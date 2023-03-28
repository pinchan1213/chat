<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    protected $guarded = array('id');

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function post()//投稿紐づけ
    {
        return $this->hasMany('App\Timeline');
    }
    public function talk()//トーク紐づけ
    {
        // return $this->hasMany('App\Talk');
        return $this->belongsToMany(User::class, 'Talks', 'user_id', 'partner_id')->withTimestamps();
    }
    public function fixed()
    {
        return $this->hasMany(Fixed::class,);
    }

    public function fixed_articles()
    {
        return $this->belogsTomany(Fixed::class,'fixed','user_id','timeline_id');
        $user = Auth::user()->id;
        $articles = $user->fixed_articles()->get();
    }
    /**
     * ★ パスワード再設定メールを送信する
     */
    public function sendPasswordResetNotification($token)
    {
        Mail::to($this)->send(new ResetPassword($token));
    }
}