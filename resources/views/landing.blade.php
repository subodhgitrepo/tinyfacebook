@extends('layouts.app')

@section('content')
	<div class="text-center">
		<h1>WELCOME TO TINYFACEBOOK</h1>
		@guest
			<h3><a href="/login">Login</a> or <a href="/register">Register</a> to start posting</h3>
		@else
			Start Posting. Go to your <a href="/profile">Profile</a>
		@endguest
	</div>
@endsection