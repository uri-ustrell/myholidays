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

Route::get('/', function () {
	if ( isset($_SESSION) )  session_destroy();
    return view('home');
})->name('logout');

Route::get('departments', function() {
	return view('departments.main');
})->name('departments.main'); 

//syntax 1
//Route::get('members', 'MemberController@getMembers')->name('members.main');
//syntax 2
Route::get('members', [
	'uses' => 'MemberController@getMembers',
	'as' => 'members.main'
]);

Route::group(['prefix'=>'calendar'], function(){
	//gives all members of dpmnt :: front-end will organize
	Route::get('/', [
		'uses'=>'CalendarController@get_all_DEPT',
		'as' => 'calendar.main'
	]);
	//with GET parameter, it'll show one member's calendar
	Route::get('{name}', [
		'uses' => 'MemberController@getMem',
		'as' => 'calendar.member'
	]);
});

Route::group(['prefix'=>'profile'],function() {
	Route::get('', function($userData = []) {
		//If atributes doesn't come from previows error request, fetch user atributes and array
		if ( !count($userData) ) {
			$userData = [
				'name'=>'Dwight Schrute',
				'email'=>'dwigth@tyransboss.com',
				'department'=> array('1'=>'Tyrans'),
				'hired'=>'2011-09-01',
				'vacations'=>'23'
			];
		}
		return view('user.profile', ['userData'=>$userData]);
	})->name('user.profile');
	//POST parameters
	
	Route::post('update', [
		'uses' => 'MemberController@editMemAdmin',
		'as' => 'profile.update'
	]);

	/*Route::post('update', function(\Illuminate\Http\Request $request , \Illuminate\Validation\Factory $validator ){
		
		$validation = $validator->make($request->all(), [
			'userName'=>['required','min:2','max:90',
			'regex:/[\'^£$%&*()}{@#~?><>,|=_+¬]/'],
			'userEmail'=>'required|e-mail',
			'pass'=>'required|min:6|max:16',
			'pass2'=>'required_with:pass|same:pass|min:6|max:16'
		]);

		if( $validation->fails() ) {
			return redirect()->back()->withErrors($validation)->with('userData',$request->all());
		}

		return redirect()
			->route('user.profile')
			->with('userInfo', $request->input('userName') .'\'s data have been updated succesfuly');
	})->name('profile.update');*/
});