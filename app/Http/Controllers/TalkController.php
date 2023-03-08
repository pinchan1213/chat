<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalkController extends Controller
{
        //チャット画面を表示
        public function index()
        {
            return view('talks.talk');
        }

            //新しいメッセージが来たとき
    public function newmessage(Request $request)
    {
        $message = new Message();
        $message->message = $request->message;
        $message->user_id = Auth::id();
        $message->save();

        //イベント発動
        //新しいメッセージをpusherに
        event(new MessageAdded([$message,Auth::user()]));
    }

        //最初にアクセスした時、全メッセージを返す
        public function allmessage()
        {
            return Message::with('user')->get();
        }
}
