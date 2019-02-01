<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class UserController extends Controller
{
	public function create()
	{

		return view('users.create');
	}

	public function store(Request $request)
	{


		$hassyadaiUser = new User;
		$hassyadaiUser->name = $request->user_name;
		$hassyadaiUser->email = $request->user_email;
		$hassyadaiUser->save();

		return redirect("/");
	}


	public function index()
	{

		$userData = User::all();

		return view('users.index',['userData' => $userData]);
	}

	//public function edit()
	//{

	//	return view('users.edit');
	//}


	public function edit($id)
	{
		$user = User::findOrFail($id);



		return view('users.edit',['user' => $user]);
	}

	public function update(Request $request){

		$updateData = [
			'name' => $request->user_name,
			'email' => $request->user_email,
		];

		User::where('id', $request->id)
		->update($updateData);

		return redirect("/");

	}

	public function getDelete($id)
	{

		User::destroy($id);

		return redirect("/");
	}

	public function delete(Request $request)
	{



		User::destroy($request->id);

		return redirect("/");
	//}

	}

	public function allDelete()
	{
		User::query()->delete();

		//$allId = User::all();

		//User::destroy($allId);

		return redirect("/");

	}

	public function copy(Request $request){

		//$user = User::find($request->id)
		//$new_user = $user->replicate();
		//$new_user->name = 'new name';
		//$new_user->save();

		return redirect("/");

	}

}