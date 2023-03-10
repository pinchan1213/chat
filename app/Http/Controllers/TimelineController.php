<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function index(Request $request){
        $timelines = Timeline::orderBy('id', 'desc')->get();//タイムラインテーブルの情報を取得する

        return view('timelines.timeline',[
            'timelines' =>$timelines,
        ]);
    }

    public function create(Request $request){
        $timelines = new timeline();

        $timelines->user_id = Auth::user()->id;
        $timelines->post = $request->post;
        $timelines->save();
        // Auth::user()->posts()->save($timelines);

        return redirect()->route('timelines.index');
    }
}
