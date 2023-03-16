<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\mypageController;
use App\Http\Controllers\validator;
use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function profileupdate(Request $request){//プロフィール編集処理

        $request->validate([
            'name' => 'required|min:2|max:12',
            'email' =>'required|min:5|max:40|email',
            'password'=>'max:20|confirmed|alpha_num',
            'newpassword' =>'max:20|alpha_num',
            'images' =>'image',
        ]);

        $user = User::find(Auth::user()->id);

        //画像登録処理
        if($request->has('iconimage')){
            $image = $request->file('iconimage')->store('public/images');
        }else {
            $image = $user->images;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('newpassword'));
        $user->images = basename($image);
        $user->save();

        return redirect('/mypage');
    }
}
