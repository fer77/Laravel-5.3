<?php
use App\Events\UserBecameForeverSupporter;
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

Route::get('/events', function () {
	$user = App\User::first();
	
    event(new UserBecameForeverSupporter($user));

    return 'Done';
});
