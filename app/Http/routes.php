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

Route::get('/users', function () {
    return view('users');
});

Route::get('/users_crear_usuario', function () {
    return view('users.users_crear_usuario');
});

Route::get('/users_listar_usuarios', function () {
    return view('users.users_listar_usuarios');
});

Route::get('/caja_apertura', function () {
    return view('caja.caja_apertura');
});

Route::get('/caja_depositos', function () {
    return view('caja.caja_depositos');
});
Route::get('/caja_arqueo', function () {
    return view('caja.caja_arqueo');
});
Route::get('/caja_cierre', function () {
    return view('caja.caja_cierre');
});
Route::resource('products', 'ProductsController');