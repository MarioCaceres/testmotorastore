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
    return view('dashboard');
});

Route::resource('usuario','userController');
Route::resource('historial','historialController');
Route::resource('producto','productoController');
Route::resource('venta','ventaController');

//Route::get

//Route::name

Auth::routes();
Route::get('/home', 'apiController@saveApiData')->name('home');