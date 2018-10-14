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

Route::get('/', function () {
    return view('home');
});

Route::get('departments/{user}', function() {
	return view('department.main');
});

Route::get('members/{department}', function() {
	return view('members.main');
});
//gives all members of dpmnt :: front-end will organize
Route::get('calendar/{department}', function() {
	return view('calendar.main');
});

Route::get('profile/{user}', function() {
	return view('user.main');
});

