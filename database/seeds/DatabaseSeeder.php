<?php

use Illuminate\Database\Seeder;
use Database\Seeders\TimelinesTableSeeder;
use Database\Seeders\TalksTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TimelinesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TalksTableSeeder::class);
    }
}
