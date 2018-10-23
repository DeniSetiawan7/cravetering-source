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

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/store/{domain_toko}', 'PagesController@profile_toko');

Route::group(['middleware' => 'guest'], function() {
	
	// login register
	Route::get('/register', 'PagesController@register');
	Route::get('/login', 'PagesController@login')->name('login');
	Route::post('/registering', 'UserController@registering');
	Route::post('/signin', 'UserController@login');

});

Route::group(['middleware' => 'auth'], function() {

	// logout
	Route::get('/logout', 'UserController@logout');

	// buka toko
	Route::get('/createstore', 'PagesController@createstore');
	Route::post('/createstore/init', 'StoreController@init');
	Route::get('/createstore/verification_data', 'PagesController@verification_data');
	Route::put('/createstore/final', 'StoreController@final');

	// control panel toko
	Route::get('/store/{domain_toko}/tambahmenu', 'PagesController@tambahmenu');

});
