<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use Illuminate\Support\Facades\Auth;
use app\Keyword;

class TimelineController extends Controller
{
    public function index(Request $request){//タイムラインテーブルにデータを登録
        $timelines = Timeline::orderBy('id', 'desc')->get();//タイムラインテーブルの情報を取得する

        return view('timelines.timeline',[
            'timelines' =>$timelines,
        ]);
    }

    public function serch(Request $request)//検索機能処理
    {  
        $keyword = $request->input('keyword');

        $query = Timeline::query();

        if(!empty($keyword)) {
        $query->where('post', 'LIKE', "%{$keyword}%");//LIKE演算子
        }

        $posts = $query->get();

        return view('serch', compact('posts', 'keyword'));
    }
}
