<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class timeline extends Model
{
    protected $fillable = [
        'user_id',
        'text',
        'delflag',
        'created',
        'modified',
        'timeline_fixed'
    ];
}
