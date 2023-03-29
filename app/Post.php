<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = [
        'user_id',
        'timeline_id',
        'name',
        'post',
        'delflag',
        'created',
        'modified',
        'timeline_fixed'
    ];
    protected $table = 'timelines';//使いたいテーブル名を指定
}
