<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
class TalkController extends Controller
{
    public function showCreateTalk(){
        return view('talks.create');
    }

    public function create(Request $request){
        //インスタンスの作成
        $talk = new Talk();
        //入力値を代入
        $talk->content = $request->content;
        //インスタンスの状態をデータベースに書き込む
        $talk->save();

        return redirect()->route('talks.create',[

        ])
    }
}
