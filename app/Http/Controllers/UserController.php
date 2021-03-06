<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	* Create a new controller instance.
	*
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getMyProfile(Request $request)
	{
		$user = $request->user();

		$posts = $request->user()->posts()->limit(5)->get();

		return view('profile', [
					'posts' => $posts,
		]);
	}
}
