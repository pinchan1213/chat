<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
   public function showTimelinePage(){
    return view('timelines.post');
   }
   public function create(Request $request){
        // ポストモデルのインスタンスを作成する
        $post = new Post();
        // テキストに入力値を代入する
        $post->text = $request->text;
         // インスタンスの状態をデータベースに書き込む
        $post->save();

        return redirect()->route('timelines.timeline', [
            'id' => $post->id,
        ]);
   }
}


// public function showTimelinePage()
// {
//     $posts = Post::latest()->get();
//     return view('post');
// }

// public function Post(Request $request){
//     $validator = $request->validate([
//         'post'=> ['required','string','max:200']
//     ]);
//     // timeline::create([
//     //     'user_id' => Auth::user()->id,
//     //     'post' => $request->post,
//     // ]);
//     return view('timeline');
// }