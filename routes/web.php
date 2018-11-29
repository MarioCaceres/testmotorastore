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
Route::resource('api','apiController');

//Route::view

Route::view('/recent-activity', 'recent-activity');
Route::view('/stock', 'stock');
Route::view('/sales', 'sales');
Route::view('/users-admin', 'users-admin');
Route::view('/new-sale', 'new-sale');
Route::view('/new-sale-client', 'new-sale-client');

//Route::name

Auth::routes();
Route::get('/home', 'apiController@saveApiData')->name('home');
#Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-sale-client', 'clienteController@index')->name('clienteController.clients');
Route::get('/new-sale/{id_cliente}', 'ventaController@new')->name('ventaController.new');

Route::post('/new-sale-client', 'clienteController@store')->name('clienteController.store');
Route::post('/new-sale/{id_cliente}', 'ventaController@addItem')->name('ventaController.addItem');
