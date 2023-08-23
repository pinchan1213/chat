<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimelinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $post=['会議','営業','休日'];
        // $name=['ユーザー1','ユーザー2','ユーザー3'];
        // $fixed=[1,2,3,4,5,6];

        // foreach($fixed as $value) {
        //     $post_key = array_rand($post);
        //     $name_key = array_rand($name);
        //     DB::table('timelines')->insert([
        //         'user_id' => 1,
        //         'timeline_id'=>1,
        //         'name' => $name[$name_key],
        //         'post'=> $post[$post_key],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //         'timeline_fixed'=>$value
        //     ]);
        // }
    }
 }
