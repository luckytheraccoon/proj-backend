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

Route::get('/loginAjax', function () {
	return view('loginAjax');
});
Route::get('/logoutAjax', function () {
	return view('logoutAjax');
});




Route::get('/tasks', function () {
	$tasks = App\Task::all();
	return $tasks;
    //return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
	$task = DB::table('tasks')->find($id);
	return view('tasks.show', compact('task'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

