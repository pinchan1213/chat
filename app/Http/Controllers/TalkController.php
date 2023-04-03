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

        //トーク相手のusersテーブルの情報を取得
        $partner_info = User::find($id);

        //自分（ログインユーザー）のusers・talksテーブルの情報を取得
        $users = Talk::select('users.name','users.images','talks.user_id', 'talks.message','talks.created_at')
        ->join('users', 'talks.user_id', '=', 'users.id')
        ->where('talks.user_id', Auth::user()->id)
        ->where('talks.partner_id', $id)
        ->get();

        // dd($users);

        //トーク相手のtalksテーブルの情報を取得
        $partners = Talk::select('talks.user_id', 'talks.message','talks.created_at')
        ->where('talks.user_id', $id)
        ->where('talks.partner_id', Auth::user()->id)
        ->get();

        // dd($partners);

        //トーク相手と自分の情報を結合
        $talks = collect($users)->merge($partners);

        // 送信日の古い順に並べる
        $talks = collect($talks)->sortBy('created_at');

        // dd($talks);

        //ビューに渡す値
        return view('talks.talk',[
            // 'users' => $users,
            // 'partners' => $partners,
            'talks' => $talks,
            'partner_id' => $id,
            'partner_info' => $partner_info
        ]);
    }

    public function create(Request $request){//トーク送信処理

        $talk = new Talk();
        $talk->user_id = Auth::user()->id;
        $talk->name = Auth::user()->name;
        $talk->comment_num = 1;
        $talk->message = $request->message;
        $talk->partner_id = $request->partner_id;
        $talk->save();
        return back();
    }
}
