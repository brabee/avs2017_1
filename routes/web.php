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
/*
Route::get('/', function () {
	return view('welcome');
});
*/

/*
Route::get('/loginmodal', 'FormModalController@loginmodal');
Route::get('/registermodal', 'FormModalController@registermodal');
*/
Route::get('/', 'FormModalController@logregmodal');

/*
Route::get('/', function () {
	return view('auth/loginmodal');
});
*/
/*
Route::get('/', function () {
	return view('auth/registermodal');
});
*/

Auth::routes();

// Route::get('/home', 'HomeController@index');
Route::get('/zakazky', 'HomeController@index');





