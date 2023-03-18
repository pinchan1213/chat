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
            $table->bigInteger('timeline_id')->unsigned()->nullable()->change();
            $table->string('name')->nullable()->change();
            $table->integer('comment_num');
            $table->text('content');
            $table->text('images')->nullable()->change();
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
