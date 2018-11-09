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

Route::get('/admin', 'CreatemovieController@admin');
Route::get('/create', function (){
	return view('createmovie');
});

Route::post('/admin/insert', 'CreatemovieController@add');
Route::get('/admin/update/{id}', 'CreatemovieController@update');
Route::post('/admin/edit/{id}', 'CreatemovieController@edit');
Route::get('/admin/read/{id}', 'CreatemovieController@read');
Route::get('/admin/delete/{id}', 'CreatemovieController@delete');

Route::resource('/kiosks', 'KiosksController');
Route::resource('/kiosks/(id)', 'KiosksController');

Route::resource('/rental', 'RentalController');
Route::resource('/rental/(id)', 'RentalController');

Route::resource('/movies', 'MovieController');
Route::get('/movies/{id}', 'MovieController@show');

Route::get('/home', 'HomeController@index')->name('home');

