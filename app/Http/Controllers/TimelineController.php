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

    public function fixed(Request $request){
    return json_decode('aaa');

    //  $id = Auth::user()->id;
    //  $timeline_id = $request->timeline_id;
    //  $timeline = timeline::findOrFail($timeline_id);//一致する画面が見つからなかった場合エラー

     //すでに固定しているなら
    //  if($fixed){
    //     //fixedテーブルのレコードを削除
    //     $fixed = Fixed::where('timeline_id',$timeline_id)->where('id',$id)->delete();}
    //     else{
    //      //まだ固定していないならfixedテーブルに新しいレコードを作成する
    //      $fixed = new Fixed;
    //      $fixed->timeline_id = $request->timeline_id.
    //      $fixed->id = Auth::user()->id;
    //      $fixed ->save();
    //     }
     }
}
