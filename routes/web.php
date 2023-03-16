<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


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
//ログイン前のトップ画面
Route::get('/top',function(){
    return view('top');
});
Route::get('/mypage',function(){
    return view('mypage');
});

//ミドルウェア認証
// Route::group(['middleware' => 'auth'], function() {
//リセット画面
Route::get('/reset',function(){
    return view('reset');
});
//ログイン後のアクセスページ
Route::get('/', 'HomeController@index')->name('home');

//タイムライン投稿
route::get('post','PostController@showTimelinePage')->name('posts.create');
route::post('post','PostController@create');
//タイムライン一覧表示
Route::get('/timeline', 'TimelineController@index')->name('timelines.index');
//タイムライン検索
Route::get('/timeline/serch', [TimelineController::class, 'serch'])
    ->name('timeline.serch');
//固定タイムライン
Route::get('/fixed',function(){
    return view('fixed_timeline');
});
//トーク送信
Route::get('/talk', 'TalkController@showTalkPage')->name('talks.create');
Route::post('/talk', 'TalkController@create');
Route::post('/talk', 'TalkController@index')->name('talks.index');
//トーク画面
Route::get('/talk', 'TalkController@showCreateTalk')->name('talks.create');
Route::post('/talk', 'TalkController@create');
//トーク一覧
Route::get('/talk_all',function(){
    return view('talks.talk_all');
});
//マイページ
Route::get('/mypage',function(){
    return view('mypage');
})->name('mypage');
//マイページ編集画面
Route::get('/edit',function(){
    return view('edit');
});
Route::post('/edit','UsersController@profileupdate')->name('edit');
//ログアウト
Route::get('/logout', 'Auth\LoginController@logout');

// });//ミドルウェア認証終わり

// 会員登録・ログイン・ログアウト・パスワード再設定の各機能で必要なルーティング設定をすべて定義
Auth::routes();
// Auth::logout();