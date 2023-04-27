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
// ログイン前のトップ画面
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


//ミドルウェア認証
Route::group(['middleware' => 'auth'], function() {
//ログイン後のアクセスページ
Route::get('/', 'HomeController@index')->name('home');
//タイムライン投稿
route::get('post','PostController@showTimelinePage')->name('posts.create');
route::post('post','PostController@create');
//タイムライン一覧表示
Route::get('/timeline', 'TimelineController@index')->name('timelines.index');
//タイムライン編集画面表示
Route::get('/posts/{edit}/edit', 'PostController@edit')->name('timeline.edit');
//タイムライン編集内容保存
Route::post('/timeline/{edit}/edit', 'PostController@update')->name('timeline.update');
//固定タイムライン処理
// Route::get('/timeline/fixed','TimelineController@fixed')->name('timelines.fixed');
Route::post('/timeline/fixed','TimelineController@fixed')->name('timelines.fixed');
//固定タイムライン一覧表示
Route::get('/fixed','TimelineController@display')->name('timelines.fixed');

//検索処理
Route::get('/serch','UsersController@serch');

//トーク画面,送信処理
Route::get('/talk/{id}', 'TalkController@showCreateTalk')->name('talks');//トーク相手紐づけ
Route::post('/talk', 'TalkController@create')->name('talks.create');//トーク送信処理
// Route::get('/talk/{id}', 'TalkController@showCreateTalk')->name('talk');

//ユーザー一覧表示
Route::get('/user', 'UserAllContrller@showUserAll')->name('user.all');

//マイページ編集画面
Route::get('/edit',function(){
    return view('edit');
});
Route::post('/edit','UsersController@profileupdate')->name('edit');
//ログアウト
Route::get('/logout', 'Auth\LoginController@logout');
});//ミドルウェア認証終わり


// 会員登録・ログイン・ログアウト・パスワード再設定の各機能で必要なルーティング設定をすべて定義
Auth::routes();
