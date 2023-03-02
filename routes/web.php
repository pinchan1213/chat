<?php
use Illuminate\Support\Facades\Route;
use App\Events\MessageAdded;
use Symfony\Component\EventDispatcher\Event;
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

Route::get('/',function(){
    return view('welcome');
});

Auth::routes();

Route::get('/top',function(){
    return view('top');
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/login',function(){
    return view('login');
});

// Route::get('/timeline', 'TimelineController@index')->name('timeline.index');
Route::post('/timeline', 'TimelineController@showTimelinePage')->name('timeline');

Route::get('/post', 'Auth\TimelineController@showTimelinePage');  
Route::post('/post', 'Auth\TimelineController@postTweet');   

// Route::get('/post', 'PostController@showTimelinePage')->name('posts');
// Route::post('/post', 'PostController@post')->name('posts');

Route::get('/fixed',function(){
    return view('fixed_timeline');
});

Route::get('/talk',function(){
    return view('talk');
});

Route::get('/talk_all',function(){
    return view('talk_all');
});

Route::get('/mypage',function(){
    return view('mypage');
})->name('mypage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => 'auth'], function () {

//     //プロフィール編集画面表示
//     Route::get('/mypage', 'UserController@show')->name('profile');
//     //プロフィール編集
//     Route::put('/mypage', 'UserController@profileUpdate')->name('profile_edit');
//     //パスワード編集
//     Route::put('/password_change', 'UserController@passwordUpdate')->name('password_edit');
//     });

//ajax通信のルーティング
Route::post('/newmessage', 'ChatroomController@newmessage');
Route::get('/allmessage','ChatroomController@allmessage');

//チャットルームを表示
Route::get('/chatroom', 'ChatroomController@index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
