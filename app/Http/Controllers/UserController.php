<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  User $user
     * @return View
     */
    public function show(User $user)
    {
        return view('user.profile', compact('user'));
    }
}
