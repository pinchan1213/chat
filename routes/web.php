<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\PostController;


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

//タイムライン投稿
route::get('post','PostController@showTimelinePage')->name('posts.create');//投稿処理
route::post('post','PostController@create');//一覧表示
//トーク送信
Route::get('/talk', 'TalkController@showTalkPage')->name('talks.create');
Route::post('/talk', 'TalkController@create');
Route::post('/talk', 'TalkController@index')->name('talks.index');;





// Route::group(['middleware' => 'auth'], function() {
//リセット画面
Route::get('/reset',function(){
    return view('reset');
});
//タイムライン一覧表示
Route::get('/timeline', 'TimelineController@index')->name('timelines.index');
Route::post('/timeline', 'TimelineController@create')->name('timelines.create');
//固定タイムライン
Route::get('/fixed',function(){
    return view('fixed_timeline');
});
//トーク画面
// Route::get('/talk',function(){
//     return view('talks.talk');
// });
Route::get('/talk', 'TalkController@showCreateTalk')->name('talks.create');
Route::post('/talk', 'TalkController@create');
//トーク一覧
Route::get('/talk_all',function(){
    return view('talk_all');
});
//マイページ
Route::get('/mypage',function(){
    return view('mypage');
})->name('mypage');


// });//ミドルウェア認証
