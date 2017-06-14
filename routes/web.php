<?php
Auth::loginUsingId(1);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('avatars', function() {
	//request()->file('avatar')->store('avatars');// specifies a folder name.
	//if no unique file is needed then:
	$file = request()->file('avatar');
	$ext = $file->extension();// you can also do $file->extension()

	$file->storeAs('avatars/' . auth()->id(), "avatar.{$ext}");// to make it jeneric and not over-write it everytime (don't forget the "" when using {$...}).

	return back();
});
