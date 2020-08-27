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
    echo "index page";
});


Route::get('/welcome', function(){
	return view('test');
});


Route::get('/login', 'LoginController@index');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/logout', ['uses'=>'logoutController@index']);


/*Route::group(['middleware'=>'sess'], function(){
	Route::get('/home', 'HomeController@index')->middleware('sess');
	Route::get('/home/edit/{id}', 'HomeController@edit')->middleware('sess');
	Route::post('/home/edit/{id}', 'HomeController@update')->middleware('sess');
	Route::get('/home/delete/{id}', 'HomeController@delete')->middleware('sess');
	Route::post('/home/delete/{id}', 'HomeController@destroy')->middleware('sess');
});*/


Route::middleware(['sess'])->group(function(){

	Route::get('/home', 'HomeController@index');

	Route::group(['middleware'=>['type']], function(){
		Route::get('/home/edit/{id}', 'HomeController@edit');
		Route::post('/home/edit/{id}', 'HomeController@update');
		Route::get('/home/delete/{id}', 'HomeController@delete');
		Route::post('/home/delete/{id}', 'HomeController@destroy');
	});
});

