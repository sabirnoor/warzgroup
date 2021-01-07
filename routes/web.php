<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

// Route::get('/', function () {
// 	return view('index');
// });
// Route::get('/index', function () {
// 	return view('index');
// });
Route::get('/', 'FrantController@index');
Route::get('/about', 'FrantController@about');
Route::get('/donate', 'FrantController@donate');

Route::prefix('ubsk')->group(function () {
	Route::match(['get', 'post'], '/', array('uses' => 'UbskController@index'));
	Route::match(['get', 'post'], '/registration', array('uses' => 'UbskController@registration'));
	//Route::get('registration', 'UbskController@registration');
	Route::get('aboutus', 'UbskController@aboutus');
	Route::get('gallery', 'UbskController@gallery');
	Route::get('get_reg_form', 'UbskController@get_reg_form');
	Route::match(['get', 'post'], '/print_reg_form', array('uses' => 'UbskController@print_registration_form'));
	//Route::get('print_reg_form/{reg_no?}', 'UbskController@print_registration_form');
});

Route::match(['get', 'post'], '/get-district-blocks', array('uses' => 'UbskController@getblocksbydistrict'));

