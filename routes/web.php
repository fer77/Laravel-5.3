<?php
use App\Notifications\LessonUpdated;
use App\Notifications\PaymentReceived;
use App\Notifications\SubscriptionCanceled;

Auth::loginUsingId(1);

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
	$user = App\User::find(2);
	$admin = App\User::find(1);

	$admin->notify(new PaymentReceived($user));
});
