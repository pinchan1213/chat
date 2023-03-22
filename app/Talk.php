<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    protected $fillable = [   
        'user_id',
        'name',
        'comment_num',
        'message',
        'images',
        'partner_id',
        'created',
    ];
}
