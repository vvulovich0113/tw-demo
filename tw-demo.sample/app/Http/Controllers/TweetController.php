<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function update (Request $request)
    {
    	$tweet = new Tweet;
    	$tweet->user_id = Auth::id();
    	$tweet->tweet = $request->tweet;
    	$tweet->save();
   		
   		return redirect()->route('home');
    }

    
}