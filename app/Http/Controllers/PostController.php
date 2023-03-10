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
    Timeline::latest()->get(); 
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
    return redirect()->route('timelines.timeline');
   }
}