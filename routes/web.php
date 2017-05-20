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
$users = \App\User::create([
	'name' => 'i have name 1',
	'email' => 'i@have.name1',
	'password' => bcrypt('12345')
]);

// vypise $users vo formate pole
echo '<pre>';
print_r( $users->toArray() );
echo '<pre>';
*/

// Route::get('/home', 'HomeController@index');

// * Register the typical authentication routes for an application.
Auth::routes();

// prihlasovacie modalne okno
Route::get('/', 'FormModalController@logregmodal')->name('root');

//Route::get('logout', 'FormModalController@logout')->name('logout');

// route na prijem zakazky
Route::get('prijem', 'HomeController@prijem');

// json pre products
Route::get('products/{id?}','HomeController@jsonProducts')->name('json_products');

// json pre customers
Route::get('customers/{id?}', 'HomeController@jsonCustomers')->name('json_customers');

// json pre data
Route::get('data', 'HomeController@jsonData')->name('json_data');

// json pre towns
Route::get('towns/{id?}', 'HomeController@jsonTowns')->name('json_towns');




