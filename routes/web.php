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
    return view('auth.login');
});


// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['namespace' => 'Admin'], function()
{

	Route::get('/home', 'DashboardController@index')->name('home');


	Route::get('/siswa', ['as'=>'siswa','uses'=>'SiswaController@index']);
    Route::get('/siswa/create', ['as'=>'siswa.create','uses'=>'SiswaController@add']);
    Route::post('/siswa/createprocess', ['as'=>'siswa.createprocess','uses'=>'SiswaController@addprocess']);
    Route::get('/siswa/edit/{id}', ['as'=>'siswa.edit','uses'=>'SiswaController@edit']);
    Route::post('/siswa/editprocess/{id}', ['as'=>'siswa.editprocess','uses'=>'SiswaController@editprocess']);
    Route::delete('/siswa/delete/{id}', ['as'=>'siswa.delete','uses'=>'SiswaController@delete']);
    Route::get('/siswa/view/{id}', ['as'=>'siswa.view','uses'=>'SiswaController@view']);


});