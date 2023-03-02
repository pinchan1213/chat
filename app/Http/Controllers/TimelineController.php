<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Timeline;
use App\Post;

class TimelineController extends Controller
{
    public function showTimelinePage()
    {
        $posts = timeline::latest()->get();
        return view('timeline', compact('post'));
    }

    // public function post(Request $request){
    //     dd($request);
    //     $request->validate([
    //         'timeline' => 'required|max:2000',
    //     ]);

    //     $timelines = new Timeline;

    //     $timelines->user_id = Auth::user()->id;
    //     $timelines->name = Auth::user()->name;
    //     $timelines->text = $request->tweet;
    //     $timelines->save();

    //     return back();
    // }
}