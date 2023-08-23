<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TalksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 2) as $num) {
            $name = ['まぐろ','たまご','いくら'];
            $name_key = array_rand($name);
            $comment_num = rand(1, 5); // 1から5の範囲でランダムな数値を選択
            $partner_id = rand(1, 5); // 1から5の範囲でランダムな数値を選択
            
            DB::table('talks')->insert([
                'user_id' => 1,
                'timeline_id' => 1,
                'name' => $name[$name_key],
                'comment_num' => $comment_num,
                'message' => 'こんにちは',
                'partner_id' => $partner_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
