<?php

namespace App\Http\Controllers;

use App\Edit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\TimelineController;
use App\Providers\Post as ProvidersPost;
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

   public function edit(Edit $edit)//投稿編集画面表示
   {
       return view('timelines.timeline_edit', compact('edit'));
   }

   public function update(Edit $edit, Request $request)//編集内容保存
   {
    if (Auth::id() !== $edit->user_id) {
        abort(403, '編集する権限がありません。');
    }
       $edit->post = $request->input('post');
       $edit->save();

       return redirect()->route('timelines.index');

   }
}