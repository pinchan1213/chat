<?php
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
        // $user=[1,2,3,4,5,6];
        $text=['会議','営業','休日'];
        $name=['あ','い','う'];
        $fixed=[1,2,3,4,5,6];
        // $timeline=[1,2,3,4,5,6];
        foreach($fixed as $value) {
            $text_key = array_rand($text);
            $name_key = array_rand($name);
            DB::table('timelines')->insert([
                'user_id' => 1,
                'name' => $name[$name_key],
                'text'=> $text[$text_key],
                'delflag'=>0,
                'created' => Carbon::now(),
                'modified' => Carbon::now(),
                'timeline_fixed'=>$value
            ]);
        }

        $this->call(TimelinesTableSeeder::class);
    }
 }
