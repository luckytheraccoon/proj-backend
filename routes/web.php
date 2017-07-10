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
    return view('welcome');
});

Auth::routes();

Route::get('/loginAjax', function () {
	return view('loginAjax');
});
Route::get('/logoutAjax', function () {
	return view('logoutAjax');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
	$user = Auth::user();
	if($user === null) {
		echo json_encode(array("loggedIn"=>false));
	} else {
		echo json_encode(array("loggedIn"=>true));
	}
});

Route::get('/checkAuth', function () {
	$user = Auth::user();
	if($user === null) {
		$msg = ["loggedIn" => false, "loggedInAs" => null];
	} else {
		$msg = ["loggedIn" => true, "loggedInAs" => $user->name];
	}
    return response()->json($msg, 200);
});
