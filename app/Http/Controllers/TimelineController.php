<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;

class TimelineController extends Controller
{
    public function index(Request $request){
        $timelines = Timeline::all();

        return view('timelines.timeline',[
            'timelines' =>$timelines,
        ]);
        
        $timelines = new timeline();

        $timelines->text = $request->text;

        $timelines->save();

        return redirect()->route('timelines.timeline');
    }
}
