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

        //画像や名前を取得
        $partner_info = User::find($id);

        //自分の情報を取得
        $users = Talk::select('users.id','users.name','users.images','talks.partner_id', 'talks.message','talks.created_at')
        ->join('users', 'talks.user_id', '=', 'users.id')
        ->get();

        //相手側の情報を取得
        $partners = Talk::select('users.id','users.name','users.images','talks.user_id', 'talks.message','talks.created_at')
        ->join('users', 'talks.partner_id', '=', 'users.id')
        ->get();

        // dd($partners);

        //ビューに渡す値
        return view('talks.talk',[
            'users' => $users,
            'partners' => $partners,
            'partner_id' => $id,
            'partner_info' => $partner_info
        ]);
    }

    public function create(Request $request){//トーク送信処理
        
        $patner =User::all()->except([Auth::id()]);
        // dd($patner);
        $talk = new Talk();
        $talk->user_id = Auth::user()->id;
        $talk->name = Auth::user()->name;
        $talk->comment_num = 1;
        $talk->message = $request->message;
        $talk->partner_id = $patner;
        $talk->save();
        return back();
    }
}
