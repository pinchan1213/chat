<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailTestController extends Controller
{
    public function index(){

    	$data = [];

    	Mail::send('mail.password-reset', $data, function($message){
    	    $message->to('test@info.com', 'Test')//送り主
    	    ->subject('パスワード再設定リンク');//メールの件名
    	});
    }
}
