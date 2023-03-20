<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
use App\Fixed;

class TimelineController extends Controller
{
    public function index(Request $request){//タイムラインテーブルにデータを登録
        $timelines = Timeline::orderBy('id', 'desc')->get();//タイムラインテーブルの情報を取得する
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
     $fixed = Fixed::where('user_id',$user_id)->where('timeline_id',$timeline_id)->first();

     if(empty($fixed)){//投稿にいいねしていなかったら
        $fixed = new Fixed;//インスタンスの作成
        $fixed->timeline_id = $timeline_id;
        $fixed->user_id = $user_id;
        $fixed->save();
        return 1;
     }else{//いいねしていたら
        Fixed::where('timeline_id',$timeline_id)->where('user_id',$user_id)->delete();
        return 0;
     }
  }

  public function display(Request $request){//いいねした投稿の一覧を取得
    $displays = $request->Timeline::orderBy('create_at', 'desc')->paginate(10);//全テーブルから投稿を取得
    $displays = $request->Fixed::Where('user_id')->get();//いいねしたユーザーを絞り込み
    $data = [ 'post' => $displays,];
    return view('timelines.fixed_timeline',$data);
  }
}


