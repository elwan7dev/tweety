<?php

namespace App;

use App\User;
use App\Tweet;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * custom accessor
     * user avatar attr
     */
    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/40?u=" . $this->email;
    }

    /**
     * get all latest tweet for the user
     */
    public function timeline()
    {
        // get the user's tweets
        return Tweet::where('user_id' , $this->id)->latest()->get();
    }

    /**
     * follow others
     */
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    /**
     * Relationship function
     */
    public function follows()
    {
        return $this->belongsToMany('App\User', 'follows', 'user_id', 'following_user_id');
    }

    
}
