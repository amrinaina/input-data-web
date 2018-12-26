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

Route::get('/login', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['namespace' => 'Admin'], function()
// {

	Route::get('/', 'Admin\DashboardController@index')->name('home');


	Route::get('/siswa', ['as'=>'siswa','uses'=>'Admin\SiswaController@index']);
    Route::get('/siswa/create', ['as'=>'siswa.create','uses'=>'Admin\SiswaController@add']);
    // Route::post('/siswa/createprocess', ['as'=>'siswa.createprocess','uses'=>'Admin\SiswaController@addprocess']);
    // Route::get('/siswa/edit/{id}', ['as'=>'siswa.edit','uses'=>'Admin\SiswaController@edit']);
    // Route::put('/siswa/editprocess/{id}', ['as'=>'siswa.editprocess','uses'=>'Admin\SiswaController@editprocess']);
    // Route::delete('/siswa/delete/{id}', ['as'=>'siswa.delete','uses'=>'Admin\SiswaController@delete']);
    // Route::get('/siswa/view/{id}', ['as'=>'siswa.view','uses'=>'Admin\SiswaController@view']);

//  //Page
// 	Route::get('/blog',['uses' => 'PagesController@blog']);
// 	Route::get('/portfolio',['uses' => 'PagesController@portfolio']);
// 	Route::get('/contact',['uses' => 'PagesController@contact']);
// 	Route::get('/about',['uses' => 'PagesController@about']);
// 	
// });