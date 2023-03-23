<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
Route::get('/email',function(){
    return view('email');
});

//リセット画面
Route::get('/reset',function(){
    return view('reset');
});

// Route::get('/mypage',function(){
//     return view('mypage');
// });

//ミドルウェア認証
// Route::group(['middleware' => 'auth'], function() {
//ログイン後のアクセスページ
Route::get('/', 'HomeController@index')->name('home');

//タイムライン投稿
route::get('post','PostController@showTimelinePage')->name('posts.create');
route::post('post','PostController@create');
//タイムライン一覧表示
Route::get('/timeline', 'TimelineController@index')->name('timelines.index');
//固定タイムライン処理
Route::get('/timeline/fixed','TimelineController@fixed')->name('timelines.fixed');
Route::post('/timeline/fixed','TimelineController@fixed')->name('timelines.fixed');
//固定タイムライン一覧表示

//トーク画面,送信処理
Route::get('/talk', 'TalkController@showCreateTalk')->name('talks.create');
Route::post('/talk', 'TalkController@create');
Route::get('/talk/{id}', 'TalkController@showCreateTalk')->name('talk');

//ユーザー一覧表示
Route::get('/user', 'UserAllContrller@showUserAll')->name('user.all');

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
