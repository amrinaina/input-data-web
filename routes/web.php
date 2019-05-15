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
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>['auth:web'],'namespace' => 'Admin'], function()
{

	//Home
	Route::get('/home', 'DashboardController@index')->name('home');

	//Siswa
	Route::get('/siswa', ['as'=>'siswa','uses'=>'SiswaController@index']);
    Route::get('/siswa/create', ['as'=>'siswa.create','uses'=>'SiswaController@add']);
    Route::post('/siswa/createprocess', ['as'=>'siswa.createprocess','uses'=>'SiswaController@addprocess']);
    Route::get('/siswa/edit/{id}', ['as'=>'siswa.edit','uses'=>'SiswaController@edit']);
    Route::patch('/siswa/editprocess/{id}', ['as'=>'siswa.editprocess','uses'=>'SiswaController@editprocess']);
    Route::delete('/siswa/delete/{id}', ['as'=>'siswa.delete','uses'=>'SiswaController@delete']);
    Route::get('/siswa/view/{id}', ['as'=>'siswa.view','uses'=>'SiswaController@view']);

    //Wakil
    Route::get('/wakil', ['as'=>'wakil','uses'=>'SiswaController@wakil']);

    //Ekskul
    Route::get('/ekskul', ['as'=>'ekskul','uses'=>'SiswaController@ekskul']);

    //Export
    Route::get('/siswa/export', ['as'=>'export.index','uses'=>'SiswaController@exportindex']);
    Route::post('/siswa/exportdata', ['as'=>'export.data','uses'=>'SiswaController@exportdata']);

    Route::post('/exam_scores/export', ['as'=>'nimda.examScores.export','uses'=>'EExamController@export']);
    Route::post('/exam_scores/getreport', ['as'=>'nimda.examScores.getReport','uses'=>'EExamController@getReport']);
    Route::post('/exam_scores/getsubjecthotroom/{class_id}', ['as'=>'nimda.examScores.gethubjecthotroom','uses'=>'EExamController@getSubjectHotroom']);

    //Import
    Route::get('/siswa/import', ['as'=>'import.index','uses'=>'SiswaController@importindex']);
    Route::post('/siswa/importdata', ['as'=>'import.data','uses'=>'SiswaController@importdata']);

    //Registrasi
    Route::get('/registrasi', ['as'=>'registrasi','uses'=>'RegistrasiController@index']);
    Route::get('/registrasi/create', ['as'=>'registrasi.create','uses'=>'RegistrasiController@add']);
    Route::post('/registrasi/createprocess', ['as'=>'registrasi.createprocess','uses'=>'RegistrasiController@addprocess']);
    Route::get('/registrasi/edit/{id}', ['as'=>'registrasi.edit','uses'=>'RegistrasiController@edit']);
    Route::patch('/registrasi/editprocess/{id}', ['as'=>'registrasi.editprocess','uses'=>'RegistrasiController@editprocess']);
    Route::delete('/registrasi/delete/{id}', ['as'=>'registrasi.delete','uses'=>'RegistrasiController@delete']);
    Route::get('/registrasi/view/{id}', ['as'=>'registrasi.view','uses'=>'RegistrasiController@view']);

    Route::get('/registrasi/export', ['as'=>'exportregister.index','uses'=>'RegistrasiController@exportindex']);
    Route::post('/registrasi/exportdata', ['as'=>'exportregister.data','uses'=>'RegistrasiController@exportdata']);
    Route::get('registrasi/filter',['as' => 'exportregister.filter','uses' => 'RegistrasiController@filter']);
    Route::post('registrasi/hasilfilter',['as' => 'exportregister.hasilfilter','uses' => 'RegistrasiController@hasilfilter']);

    Route::get('/registrasi/import', ['as'=>'importregister.index','uses'=>'RegistrasiController@importindex']);
    Route::post('/registrasi/importdata', ['as'=>'importregister.data','uses'=>'RegistrasiController@importdata']);

    //User
    Route::get('/user', ['as'=>'user','uses'=>'UserController@index']);
    Route::get('/user/create', ['as'=>'user.create','uses'=>'UserController@add']);
    Route::post('/user/createprocess', ['as'=>'user.createprocess','uses'=>'UserController@addprocess']);
    Route::get('/user/edit/{id}', ['as'=>'user.edit','uses'=>'UserController@edit']);
    Route::patch('/user/editprocess/{id}', ['as'=>'user.editprocess','uses'=>'UserController@editprocess']);
    Route::delete('/user/delete/{id}', ['as'=>'user.delete','uses'=>'UserController@delete']);
    Route::get('/user/view/{id}', ['as'=>'user.view','uses'=>'UserController@view']);
});
