<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Store a new Tweet.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // validation
        $validatedData = $request->validate([
            'body' => 'required|max:255',
        ]);

//        create a record and store data in DB.
        Tweet::create([
            'user_id' => auth()->user()->id,
//             'body' => $request->input('body')
            'body' => $validatedData['body']
        ]);

        return redirect()->route('home');
    }
}
