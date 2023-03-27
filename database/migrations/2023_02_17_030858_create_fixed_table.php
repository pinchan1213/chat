<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('user_id')->unsigned();//マイナスを表示させない
            $table->string('name')->nullable();
            $table->integer('timeline_id')->nullable();
            $table->timestamps();

            // 外部キーを設定する
            $table->foreign('user_id')->references('id')->on('users');
            // $table->constrained();//userテーブルのidカラムを参照するメソッド
            // $table->unique(['user_id', 'timeline_id']);
            // $table->onDelete('cascade');//削除時のオプション
            // $table->foreginId('timeline_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixed');
    }
}
