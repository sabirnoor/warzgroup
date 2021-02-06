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
	Route::get('show_reg_form/{encrypted_reg_no?}', 'UbskController@show_registration_form');
	
	//result
	Route::match(['get', 'post'], '/show_result', array('uses' => 'UbskController@show_result'));
});

Route::prefix('wps')->group(function () {
	Route::match(['get', 'post'], '/', array('uses' => 'WpsController@index'));
	Route::get('about', 'WpsController@about');
	Route::get('discipline', 'WpsController@discipline');
	Route::get('for_better_future', 'WpsController@for_better_future');
	Route::get('pledge', 'WpsController@pledge');
	Route::get('time_table_dress_mera_sujhaw', 'WpsController@time_table_dress_mera_sujhaw');
	Route::get('rules_regulations', 'WpsController@rules_regulations');
	Route::get('facilities', 'WpsController@facilities');
	Route::get('activities', 'WpsController@activities');
	Route::get('kindergarten', 'WpsController@kindergarten');
	Route::get('parents', 'WpsController@parents');
	Route::get('results', 'WpsController@results');
	Route::get('contact', 'WpsController@contact');
	Route::get('time_table_dress_mera_sujhaw', 'WpsController@time_table_dress_mera_sujhaw');
	
	
});

Route::match(['get', 'post'], '/get-district-blocks', array('uses' => 'UbskController@getblocksbydistrict'));

