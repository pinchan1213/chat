<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talk;
class TalkController extends Controller
{
    public function showCreateTalk(){
        return view('talks.talk',[
        ]);
    }

    public function create(Request $request){
        $validator = $request->validate([
            'content' => ['required', 'string', 'max:200'],
        ]);
        Talk::create([
            'user_id' => Auth::user()->id,
            'name'->Auth::user()->name,
            'content' => $request->content,
        ]);
        return back();
    }
}
