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
	$email = new WelcomeToLaracasts(new App\User(['name' => 'Linda']));
    Mail::to('ffmp777@example.com')->send($email);
});
