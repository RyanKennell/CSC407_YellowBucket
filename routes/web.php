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
Route::get('/string', function () {
    return 'Hello World';
});


Route::resource('/movies', 'MovieController');
Route::resource('/people', 'PersonController');
Route::resource('/kiosks', 'KiosksController');

Route::resource('/Movies', 'MovieController');

Route::resource('/Movies/{id}', 'MovieController');

Route::resource('/people', 'PersonController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');