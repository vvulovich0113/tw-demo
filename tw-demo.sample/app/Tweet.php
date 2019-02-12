<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\User;

class Tweet extends Model
{
    public static function getTlTweet()
    {

    	$user = Auth::user();
    	
    	$followers = $user->follows;


    	$followers_id = [];
    	foreach ($followers as $key => $value) {
    		$followers_id[] = $value->follow_id;
    	}

    	$followers_id[] = $user->id;

    	

    	$ourTweets = self::whereIn('user_id',$followers_id)->orderByRaw('tweets.created_at DESC')->get();

    
    	return $ourTweets;
        
    }

     public function user()
    {
        return $this->hasOne('App\User','id','user_id');
        //hasmany(紐ずけたいテーブル,紐ずけたいID受,紐ずけたいID主)
        
    }
    


}

    