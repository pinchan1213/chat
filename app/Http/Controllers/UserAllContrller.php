<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllContrller extends Controller
{
    public function showUserAll(){//ユーザー一覧を表示
        //自分以外のユーザーを取得
        $users = User::where("id" , "!=" , Auth::user()->id)->get();

        return View('user',[
            'users' => $users,
        ]);
    }

    public function index(int $id){
        //自分以外のユーザーを取得
        $users = User::where("id" , "!=" , Auth::user()->id)->pagin(10);

        return View('user',[
            'users' => $users,
            'partner_id' => $id,
        ]);
    }
}
