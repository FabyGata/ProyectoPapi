<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});
Route::get('/caja', function () {
    return view('caja');
});

Route::get('/ventas', function () {
    return view('ventas');
});

//Route::get('/reportes', function () {
//    return view('reportes');
//});

Route::get('/configuraciones', function () {
    return view('configuraciones');
});