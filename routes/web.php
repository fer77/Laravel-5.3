<?php
use App\Notifications\LessonPublished;
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
	$user = App\User::first();
	$lesson = App\Lesson::first();

	$user->notify(new LessonPublished($lesson));
});
