<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use Illuminate\Support\Facades\Auth;

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
         $timelines = \DB::table('timelines')->get();
         return view('timelines.timeline');

        // // タイムライン一覧をページネートで取得
        // $timelines = Timeline::paginate(20);

        // 検索フォームで入力された値を取得する
        $search = $request->input('search');
        // クエリビルダ
        $query = Timeline::query();
        // もし検索フォームにキーワードが入力されたら
        if ($search) {
        // 全角スペースを半角に変換
        $spaceConversion = mb_convert_kana($search, 's');
        // 単語を半角スペースで区切り、配列にする（例："山田 翔" → ["山田", "翔"]）
        $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
        // 単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
        foreach($wordArraySearched as $value) {
            $query->where('name', 'like', '%'.$value.'%');
        }
        }
        // 上記で取得した$queryをページネートにし、変数$usersに代入
        $users = $query->paginate(20);
        // ビューにusersとsearchを変数として渡す
        return view('timelines.timeline')->with([
            'content' => $timelines,
            'search' => $search,
        ]);
    }
}
