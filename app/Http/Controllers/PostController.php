<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\TimelineController;
use App\Timeline;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
   public function showTimelinePage(){
    // $posts = Timeline::latest()->get();
    // return view('timelines.post',compact('posts'));
    return view('timelines.post');
   }

   public function create(Request $request){
    $validator = $request->validate([
        'post'=>['required','string','max250'],
    ]);
    Timeline::create([
        'user_id'=>Auth::user()->id,
        'timeline_id'=>Auth::user()->id,
        'post'=>$request->post,
    ]);
    return redirect()->route('timelines.timelen');
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