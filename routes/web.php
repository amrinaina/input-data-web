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
    Route::get('/siswa/exportdata', ['as'=>'export.data','uses'=>'SiswaController@exportdata']);

    Route::post('/exam_scores/export', ['as'=>'nimda.examScores.export','uses'=>'EExamController@export']);
    Route::post('/exam_scores/getreport', ['as'=>'nimda.examScores.getReport','uses'=>'EExamController@getReport']);
    Route::post('/exam_scores/getsubjecthotroom/{class_id}', ['as'=>'nimda.examScores.gethubjecthotroom','uses'=>'EExamController@getSubjectHotroom']);

    //Import
    Route::get('/siswa/import', ['as'=>'import.index','uses'=>'SiswaController@importindex']);
    Route::post('/siswa/importdata', ['as'=>'import.data','uses'=>'SiswaController@importdata']);

});