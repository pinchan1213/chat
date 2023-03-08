<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \App\Talk;

class TalkController extends Controller
{
    public function showTalkPage()
    {
        $talks = Talk::latest()->get();
        return view('talks.talk',compact('talks')); // resource/views/talks/talk
    }

    public function create(Request $request)
    {
        $talks = Talk::all();
        $talks = new talk();
        $talks->user_id = Auth::user()->id;
        $talks->content = $request->content;
        $talks->save();
        $validator = $request->validate([
            'content' => ['required', 'string', 'max:150'], // 必須・文字であること・150文字まで
        ]);
        Talk::create([ // Talksテーブルにデータを保存
            'user_id' => Auth::user()->id,
            'name'=>Auth::user()->id,
            // 'partner_id'->Auth::user()->id,
            'content' => $request->content, //トーク内容
        ]);
        return back(); // リクエスト送ったページに戻る
    }

    public function index(){
                $talks = Talk::all();//タイムラインテーブルの情報を取得する

        return view('talks.talk',[
            'talks' =>$talks,
        ]);
    }
}
