<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;

class TalkController extends Controller
{
    public function showCreateTalk(int $id){//トーク画面遷移処理

        //すべてのトークルームを取得する
        // $users = User::all();

        //選ばれたユーザーを取得
        // $user_id = User::find($id);

        //選ばれたユーザーに紐づく相手のトークを取得
        $users = Talk::select('users.id','users.name','users.images','talks.partner_id', 'talks.message','talks.created_at')
        ->join('users', 'talks.user_id', '=', 'users.id')
        ->get();

        $partners = Talk::select('users.id','users.name','users.images','talks.user_id', 'talks.message','talks.created_at')
        ->join('users', 'talks.partner_id', '=', 'users.id')
        ->get();

        // dd($partners);

        //ビューに渡す値
        return view('talks.talk',[
            'users' => $users,
            'partners' => $partners,
            'partner_id' => $id
        ]);
    }

    public function create(Request $request){//トーク送信処理
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
