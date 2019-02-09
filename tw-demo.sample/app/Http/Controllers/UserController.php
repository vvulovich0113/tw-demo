<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Follow;

class UserController extends Controller
{
    public function index ()
    {

    	//usersオブジェクト脳内イメージ
        /*[
        	['id'=>1,'name'=>'kenta','email'=>rkt@gmail.com],
        	....

        ]*/

    	$where = [
            ['users.id','<>',Auth::id()]
        ];
        //ログインしてるユーザー以外の情報を取得
        $users = User::where($where)->get();

        //ログイン中のユーザーの情報を取得
        $my_user = User::find( Auth::id() );
        //dd( $my_user->follows );

        	
        //オブジェクト脳内イメージ
        /*[
        	['user_id'=>8,'follow_id'=>2],
        	['user_id'=>8,'follow_id'=>3],
        	['user_id'=>8,'follow_id'=>4],
        	['user_id'=>8,'follow_id'=>1]
        ]*/

       	$follow_list = [];
        foreach ($my_user->follows as $value) {
        	$follow_list[ $value->follow_id  ] = 1;
        }

        //in_arrayを使いたい場合
        // $follow_list = [];
        // foreach ($my_user->follows as $value) {
        // 	$follow_list[] = $value->follow_id;
        // }
        
        //}
        //説明用コード(脳内イメージ)
        //$follow_list = [ 2=>1,3=>1,4=>1,1=>1 ];


        //ここからはview側



    	//$users = User::getAllUsers();

       

       
        return view('user.list',
        	[
        		'users' => $users,
        		'followList' => $follow_list,
        	]);
        
    }

    public function follow (Request $request)
    {

    	$follow = new Follow;
    	$follow->user_id = Auth::id();
    	$follow->follow_id = $request->input('followId');
    	$follow->save();
   		
   		return redirect()->route('user_list');
    

    }
}
