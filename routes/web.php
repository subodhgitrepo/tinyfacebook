<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
* Show posts Dashboard
*/
Route::get('/', function () {
	return view('landing');
});

Route::get('/posts/{id?}', 'PostController@index');
Route::post('/post', 'PostController@store');
Route::delete('/post/{post}', 'PostController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@getMyProfile');
