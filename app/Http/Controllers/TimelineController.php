<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function index(Request $request){
        $timelines = Timeline::all();//タイムラインテーブルの情報を取得する

        return view('timelines.timeline',[
            'timelines' =>$timelines,
        ]);
    }

    public function create(Request $request){
        $timelines = new timeline();

        $timelines->user_id = Auth::user()->id;
        $timelines->post = $request->post;
        $timelines->save();

        return redirect()->route('timelines.index');
    }
}
