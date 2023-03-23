<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllContrller extends Controller
{
    public function index(int $id){

        $users = User::all();
        //自分以外のユーザーを取得
        $users = User::where("id" , "!=" , Auth::user()->id)->pagin(10);
        return View('user',[
            $users,
            'partner_id'->$id,
        ]);
    }
}
