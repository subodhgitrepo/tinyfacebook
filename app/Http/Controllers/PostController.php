<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
	/**
	* Create a new controller instance.
	*
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	* Display a list of all of the user's posts.
	*
	* @param  Request  $request
	* @return Response
	*/
	public function index(Request $request, $id = null)
	{
		if ($id) {
			$user = User::find($id);
			$posts = $user->posts()->orderBy('created_at', 'desc')->get();
		} else {
			$posts = Post::orderBy('created_at', 'desc')->get();
		}

		return view('posts', [
			'posts' => $posts,
		]);
	}

	/**
	* create a user's posts.
	*
	* @param  Request  $request
	*/
	public function store(Request $request)
	{
		try{
			try{
			$this->validate($request, [
				'post_desc' => 'required|max:255',
			]);
			}
			catch(\Exception $e) {
				return $this->sendError('Validation Error', $e, 422);
			}
			$x = $request->user()->posts()->create([
				'post_desc' => $request->post_desc,
			]);
				
			return $this->sendSuccess('Post Created', $x, 201);
		}
		catch(\Exception $e) {
			return $this->sendError('Server Error occured', $e, 400);
		}
		
		
		// return redirect('/profile');
	}

	/**
	* Delete Post
	*/
	public function destroy(Post $post)
	{
		$post->delete();

		return redirect('/profile');
	}
}
