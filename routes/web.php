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
    return view('index');
});

Route::get('/clientes', 'ControladorCliente@index');
Route::get('/clientes/novo', 'ControladorCliente@create');
Route::post('/clientes', 'ControladorCliente@store');
Route::get('/clientes/apagar/{id}', 'ControladorCliente@destroy');
Route::get('/clientes/editar/{id}', 'ControladorCliente@edit');
Route::post('/clientes/{id}', 'ControladorCliente@update');

