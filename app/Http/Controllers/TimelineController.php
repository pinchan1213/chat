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
        $talks = new talk();
        $talks->user_id = Auth::user()->id;
        $talks->post = $request->post;
        $talks->save();

        return redirect()->route('timelines.create');
    }
}
