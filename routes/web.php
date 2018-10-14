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
})->name('home');

Route::get('departments', function() {
	return view('departments.main');
})->name('departments.main');

Route::get('members', function() {
	return view('members.main');
})->name('members.main');
//gives all members of dpmnt :: front-end will organize
Route::get('calendar', function() {
	return view('calendar.main');
})->name('calendar.main');

Route::get('profile', function() {
	return view('user.profile');
})->name('user.profile');