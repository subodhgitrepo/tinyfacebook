<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tweet_desc'];

	/**
	 * Get the user that owns the post.
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
