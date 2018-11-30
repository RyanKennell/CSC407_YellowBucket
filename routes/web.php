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

Route::resource('/admin/user', 'UsersController');
Route::resource('/admin/renting_history', 'RentalhistoryController');
Route::post('/admin/insert', 'CreatemovieController@add');
Route::get('/admin/update/{id}', 'CreatemovieController@update');
Route::post('/admin/edit/{id}', 'CreatemovieController@edit');
Route::get('/admin/read/{id}', 'CreatemovieController@read');
Route::get('/admin/delete/{id}', 'CreatemovieController@delete');

Route::resource('/kiosks', 'KiosksController');
Route::resource('/kiosks/(id)', 'KiosksController');

//Route::group(['middleware' => 'auth'], function () {
    Route::resource('/rentals', 'Renting_historyController');
    Route::resource('/rentals/(id)', 'Renting_historyController');
    Route::get('/rentals/update/{id}','Renting_historyController@update');
//});
Route::get('/disks/addUser/{id}', 'DiscController@addUser');
Route::resource('/disks', 'DiscController');

//Route::resource('/rentals', 'DiscRentalController');
//Route::resource('/rentals/(id)', 'DiscRentalController');

Route::resource('/movies', 'MovieController');
Route::get('/movies/{id}', 'MovieController@show');

Route::post('/accountInfo', 'UserController@store');
Route::get('/accountInfo', 'UserController@show');


Route::get('/home', 'HomeController@index')->name('home');

