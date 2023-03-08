<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    protected $fillable = [ 
        'user_id',
        'name',
        'comment_num',//相手のトーク
        'content',//自分のトーク
        'created',
        'modified',
        'images',
        'partner_id',//相手ID
    ];
    protected $table = 'Talks';//使いたいテーブル名を指定
}
