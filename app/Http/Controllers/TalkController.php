<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
use App\User;
use Illuminate\Support\Facades\Auth;

class TalkController extends Controller
{
    public function showCreateTalk(){//データを保存
        $talks = Talk::all();
        return view('talks.talk',[
            'talks' => $talks,
        ]);
    }

    public function create(Request $request){//トーク送信処理
        // $validator = $request->validate([
        //     'content' => ['required', 'string', 'max:200'],
        // ]);
        $talk = User::where("id" , "!=" , Auth::user()->id)->get();

        $talk = new Talk();
        $talk->user_id = Auth::user()->id;
        $talk->name = Auth::user()->name;
        $talk->comment_num = 1;
        $talk->message = $request->message;
        $talk->partner_id = 1;
        $talk->save();
        return back();
    }
}
