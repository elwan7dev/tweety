<?php

namespace App;

use App\Tweet;
use App\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /** Profile page
     * get the tweets of the user - onToMany Relationship
     */
    public function tweets()
    {
        return $this->hasMany('App\Tweet');
    }

    /**
     * custom accessor
     * user avatar attr
     */
    public function getAvatarAttribute()
    {
        return "https://i.pravatar.cc/40?u=" . $this->email;
    }

    /** Home Page
     * include all of the user's tweets
     * as well as the tweets of everyone they follow
     * in descending order by date
     */
    public function timeline()
    {
        // get the user's friends ids
        $friends = $this->follows->pluck('id');
        // add user's id to array
        // $ids->push($this->id);

        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()->get();
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
