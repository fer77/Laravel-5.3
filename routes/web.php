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

use App\Mail\WelcomeToLaracasts;

Route::get('/', function () {
$users = collect(['Joe', 'Jack', 'Susan', 'Jane'])->map(function($name) {
	return new App\User(['name'=>$name]);
});

return view('welcome', compact('users'));
});
