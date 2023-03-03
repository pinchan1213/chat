<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('timeline_id');
            // $table->string('name');
            $table->text('post');
            // $table->dateTime('created');
            // $table->dateTime('modified');
            $table->tinyInteger('timeline_fixed');
            $table->timestamps();
            
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('timelines', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
