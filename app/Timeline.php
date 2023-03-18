<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
    {
    protected $fillable = ['user_id'];

        public function user(){
            return $this->hasMany('App\User');
        }

        public function fixed(){
            return $this->hasMany('App¥Fixed');
        }

        public function isfixedBy($user):bool{
            //いいねされているかを判定するメソッド
            return Fixed::where('user_id',$user->id)->where('timeline_id',$this->id)->first() !==null;
        }
    }
