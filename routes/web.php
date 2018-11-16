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

/* Route::get('/', function () {
 return view('home');
}); */





Route::resource('/people', 'PersonController');
Route::resource('/kiosks', 'KiosksController');
Route::resource('/user', 'UsersController');
Route::resource('/renting_history', 'RentalhistoryController');

Auth::routes();
Route::get('/', 'CreatemovieController@home');
Route::get('/create', function (){
	return view('createmovie');
});
	
	
	

Route::post('/insert', 'CreatemovieController@add');
Route::get('/update/{id}', 'CreatemovieController@update');
Route::post('/edit/{id}', 'CreatemovieController@edit');
Route::get('/read/{id}', 'CreatemovieController@read');
Route::get('/delete/{id}', 'CreatemovieController@delete');
///trey was here 