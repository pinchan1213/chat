<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Timeline;

class TimelineController extends Controller
{
    public function index(){
        $timelines = Timeline::all();

        return view('timeline',[
            'timelines' =>$timelines,
        ]);
    }
}
