<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
use App\Fixed;
use App\User;

class TimelineController extends Controller
{
    public function index(Request $request){//タイムラインテーブルにデータを登録
        // $timelines = Timeline::orderBy('id', 'desc')->get();//タイムラインテーブルの情報を取得する

        // $timelines = DB::table('users')  // 主となるテーブル名
        // ->select('users.name', 'users.images', 'timelines.id', 'timelines.post')
        // ->join('timelines', 'users.id', '=', 'timelines.user_id') // 第一引数に結合するテーブル名、第二引数に主テーブルの結合キー、第四引数に結合するテーブルの結合キーを記述
        // ->orderBy('id', 'desc')
        // ->get();

        $timelines =Timeline::select('users.name','users.images','timelines.id','timelines.post','fixed.timeline_id')
        ->leftjoin('users','timelines.user_id','=','users.id')
        ->leftjoin('fixed', 'timelines.id', '=', 'fixed.timeline_id')
        ->orderBy('timelines.id', 'desc')
        ->get();

        //ログインしているユーザーIDを取得
        $name = Auth::user()->id;
        $name = $request->input('name');
        return view('timelines.timeline',[
            'timelines' =>$timelines,
        ]);
    }

    public function fixed(Request $request){//いいねした投稿の登録、削除処理

     $user_id = $request->id;
     $timeline_id = $request->timeline_id;
     $fixed = fixed::where('user_id',$user_id)->where('timeline_id',$timeline_id)->first();

     if(empty($fixed)){//投稿にいいねしていなかったら
        $fixed = new fixed;//インスタンスの作成
        $fixed->timeline_id = $timeline_id;
        $fixed->user_id = $user_id;
        $fixed->save();
        return 1;
     }else{//いいねしていたら
      fixed::where('timeline_id',$timeline_id)->where('user_id',$user_id)->delete();
        return 0;
     }
  }

  public function display(Request $request){//いいねした投稿の一覧を取得
    //データを取得
    // $display_all = Timeline::all();
    // dd($display_all );
    //タイムラインのデータを紐づけ(取得)
    $timelines =Timeline::select('users.name','users.images','post')
    ->join('fixed','timelines.id','=','fixed.timeline_id')
    ->join('users', 'timelines.user_id', '=', 'users.id')
    ->get();

    return view('timelines.fixed_timeline',[
      // 'display_all' =>$display_all,
      'timelines'=>$timelines,
    ]);
  }
}

// 正しい構文
// SELECT users.user_id, users.name, users.images, timelines.user_id, timelines.timelines_id, timelines.post 
// FROM timelines 
// JOIN fixed ON timelines.user_id = fixed.timeline_id 
// WHERE timelines.user_id = ?


