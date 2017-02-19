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

//test
// Route::get('/api/prueba','DocenteController@prueba');

//rest
// Route::resource('api/docente','DocenteController');

//api docente
// Route::get('/api/docente/{id?}','DocenteController@index');
// Route::post('/api/docente','DocenteController@store');
// Route::post('/api/docente/{id}','DocenteController@update');
// Route::delete('/api/docente/{id}','DocenteController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index');
