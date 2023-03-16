<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use Illuminate\Support\Facades\Auth;
use App\Keyword;
use App\Fixed;

class TimelineController extends Controller
{
    public function index(Request $request){//タイムラインテーブルにデータを登録
        $timelines = Timeline::orderBy('id', 'desc')->get();//タイムラインテーブルの情報を取得する

        return view('timelines.timeline',[
            'timelines' =>$timelines,
        ]);
    }

    public function serch(Request $request)//検索機能処理
    {  
        $keyword = $request->input('keyword');

        $query = Timeline::query();

        if(!empty($keyword)) {
        $query->where('post', 'LIKE', "%{$keyword}%");//LIKE演算子
        }

        $posts = $query->get();

        return view('serch', compact('posts', 'keyword'));
    }

    public function fixed(Request $request){
     $id = Auth::user()->id;
     $timeline_id = $request->timeline_id;
     $timeline = timeline::findOrFail($timeline_id);//一致する画面が見つからなかった場合エラー

     //すでに固定しているなら
     if($fixed){
        //fixedテーブルのレコードを削除
        $fixed = Fixed::where('timeline_id',$timeline_id)->where('id',$id)->delete();}
        else{
         //まだ固定していないならfixedテーブルに新しいレコードを作成する
         $fixed = new Fixed;
         $fixed->timeline_id = $request->timeline_id.
         $fixed->id = Auth::user()->id;
         $fixed ->save();
        }
     }
}
