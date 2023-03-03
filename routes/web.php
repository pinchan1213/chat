<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

//ログイン前のトップ画面
Route::get('/',function(){
    return view('top');
});


// Route::group(['middleware' => 'auth'], function() {
//リセット画面
Route::get('/reset',function(){
    return view('reset');
});
//タイムライン一覧表示
Route::get('/timeline', 'TimelineController@index')->name('timelines.index');
Route::post('/timeline', 'TimelineController@index')->name('timelines.index');
//固定タイムライン
Route::get('/fixed',function(){
    return view('fixed_timeline');
});
//トーク画面
Route::get('/talk',function(){
    return view('talk');
});
//トーク一覧
Route::get('/talk_all',function(){
    return view('talk_all');
});
//マイページ
Route::get('/mypage',function(){
    return view('mypage');
})->name('mypage');

//ajax通信のルーティング
// Route::post('/newmessage', 'ChatroomController@newmessage');
// Route::get('/allmessage','ChatroomController@allmessage');

//チャットルームを表示
// Route::get('/chatroom', 'ChatroomController@index')->middleware('auth');

// });//ミドルウェア認証
