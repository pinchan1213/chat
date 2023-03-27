<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();//マイナスを表示させない
            $table->bigInteger('timeline_id')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->integer('comment_num');
            $table->text('message');
            $table->text('images')->nullable();
            $table->integer('partner_id');
            $table->timestamps();

            $table->softDeletes();

             // 外部キーを設定する
             $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talks');
    }
}
