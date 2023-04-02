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
            $table->bigInteger('timeline_id')->constrained()->nullable();
            $table->string('name')->nullable();
            $table->text('post');
            $table->tinyInteger('timeline_fixed')->nullable();
            $table->timestamps();
            
            // $table->softDeletes();
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
