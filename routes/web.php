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



//ONLY EXAMPLES REMOVE BEFORE GO TO PRODUCTION

Route::view('/widgets', 'examples/widgets');
Route::view('/charts-chartjs', 'examples/charts-chartjs');
Route::view('/charts-flot', 'examples/charts-flot');
Route::view('/charts-peity', 'examples/charts-peity');
Route::view('/font-fontawesome', 'examples/font-fontawesome');
Route::view('/font-themify', 'examples/font-themify');
Route::view('/forms-advanced', 'examples/forms-advanced');
Route::view('/forms-basic', 'examples/forms-basic');
Route::view('/maps-gmap', 'examples/maps-gmap');
Route::view('/maps-vector', 'examples/maps-vector');
Route::view('/page-login', 'examples/page-login');
Route::view('/page-register', 'examples/page-register');
Route::view('/pages-forget', 'examples/pages-forget');
Route::view('/tables-basic', 'examples/tables-basic');
Route::view('/tables-data', 'examples/tables-data');
Route::view('/ui-alerts', 'examples/ui-alerts');
Route::view('/ui-badges', 'examples/ui-badges');
Route::view('/ui-buttons', 'examples/ui-buttons');
Route::view('/ui-cards', 'examples/ui-cards');
Route::view('/ui-grids', 'examples/ui-grids');
Route::view('/ui-modals', 'examples/ui-modals');
Route::view('/ui-progressbar', 'examples/ui-progressbar');
Route::view('/ui-switches', 'examples/ui-switches');
Route::view('/ui-tabs', 'examples/ui-tabs');
Route::view('/ui-typgraphy', 'examples/ui-typgraphy');