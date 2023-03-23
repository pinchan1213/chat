<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllContrller extends Controller
{
    public function showUserAll(){//ユーザー一覧を表示//ユーザー一覧を表示
        //自分以外のユーザーを取得
        $users = User::where("id" , "!=" , Auth::user()->id)->get();

        return View('user',[
            'users' => $users,
        ]);
    }

    public function index(int $id ,Request $request){
        $talk = new User();
        $talk->user_id = Auth::user()->id;
        $talk->name = Auth::user()->name;
        $talk->comment_num = 1;
        $talk->message = $request->message;
        $talk->partner_id = 1;
        $talk->save();
        return back();
    }
}
