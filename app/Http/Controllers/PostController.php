<?php

namespace App\Http\Controllers;

use App\Post;
use App\Edit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\TimelineController;
use App\Timeline;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
   public function showTimelinePage(){
    return view('timelines.post');
   }

   public function create(Request $request){//投稿処理

    $validator = $request->validate([
        'post'=>['required','string','max:250'],
    ]);
    //  dd($timeline);
    $timelines = new timeline();
    $timelines->user_id = Auth::user()->id;
    $timelines->name = $request->name;
    $timelines->post = $request->post;
    $timelines->save();

    return redirect()->route('timelines.index');
   }

   public function edit(Edit $id)//投稿編集画面表示
   {
       $post = Timeline::find($id);
       return view('timelines.timeline_edit', compact('post'));
   }

   public function update(Request $request,$id)//編集内容保存
   {
       $post->Timeline::find($id);
       $post->post = $request->input('post');
       $post->save();

       if (Auth::id() !== $post->user_id) {
        abort(403, '編集する権限がありません。');
    }

       return redirect()->route('timelines.index' . $post->id);
   }
}