<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    /**
     * Get the user that owns the Tweet.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

   
}
