<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\mypageController;

class UsersController extends Controller
{
    public function mypageupdate(Request $request){//プロフィール編集処理
        $validator =  validator::make($request->all(),[
            'name' => 'required|min:2|max:12',
            'email' =>['required', 'min:5', 'max:40', 'email',
             Rule::unique('users')->ignore(Auth::id())],//ログインしているユーザー以外をバリデーションチェック
            'password'=>'min:4|max:20|confirmed|alpha_num',
            'images' =>'image',
        ]);

        $user = Auth::user();
        //画像登録
        $image = $request->file('iconimage')->store('public/images');
        $validator->validate();
        $user->update([
            'name' => $request->input('username'),
            'email' => $request->input('mail'),
            'password' => bcrypt($request->input('newpassword')),
            'images' => basename($image),
        ]);
        return redirect('/mypage');
    }
}
