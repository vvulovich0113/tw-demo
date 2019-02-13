<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

	public function index( Request $request ){

		$user = User::where('id',$request->user_id)->first();


		return view('profile',['user'=>$user]);
	}


	public function editIndex()
	{
		$user = Auth::user();



		return view('editProfile',['user'=>$user]);
	}

	public function update( Request $request )
	{	
		//@FIXME jpgで指定しているが、要修正
		$fileName = Auth::id().".jpg";

		$request->file('photo')->move(
			base_path() . '/public/images', $fileName
		);


		$updateData = [
			'name' => $request->name,
			'location' => $request->location,
			'age' => $request->age,
			'company_school' => $request->company_school,
			'image' => $fileName,
		];

		User::where('id', Auth::id())
		->update($updateData);


		return redirect("/profile?user_id=".Auth::id());

	}


}

