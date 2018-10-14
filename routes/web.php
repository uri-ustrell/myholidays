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

Route::group(['prefix'=>'calendar'], function(){
	//gives all members of dpmnt :: front-end will organize
	Route::get('', function() {
		return view('calendar.main');
	})->name('calendar.main');
	//with GET parameter, it'll show one member's calendar
	Route::get('{member}', function() {
		return view('calendar.main');
	})->name('calendar.member');
});

Route::group(['prefix'=>'profile'],function(){
	Route::get('', function() {
		return view('user.profile');
	})->name('user.profile');
	//POST parameters
	Route::post('update', function(){
		return 'IT WORKS!!';
	})->name('profile.update');
});