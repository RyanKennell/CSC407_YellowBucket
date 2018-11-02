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
 return view('admin');
});





Route::resource('/people', 'PersonController');
Route::resource('/kiosks', 'KiosksController');

Auth::routes();
Route::get('/admin', 'CreatemovieController@admin');
Route::get('/create', function (){
	return view('createmovie');
});
	

Route::post('/admin/insert', 'CreatemovieController@add');
Route::get('/admin/update/{id}', 'CreatemovieController@update');
Route::post('/admin/edit/{id}', 'CreatemovieController@edit');
Route::get('/admin/read/{id}', 'CreatemovieController@read');
Route::get('/admin/delete/{id}', 'CreatemovieController@delete');
///trey was here 