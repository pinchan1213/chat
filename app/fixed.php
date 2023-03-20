<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fixed extends Model
{
    protected $table = 'fixed';

    public function user(){
    //userテーブルとのリレーションを定義するuserメソッド
      return $this->belongsTo(User::class);
    }

    public function timeline(){
        return $this->belongsTo(Timeline::class);
    }

    public function fixed(){
        return $this->belogsTo(Fixed::class);
    }
}