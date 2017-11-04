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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/factura', 'pdfController@factura');


Route::post('/seleccion', 'seleccionController@index')->middleware('auth');


Route::resource('/registrar', 'ingresosController');
Route::resource('/cliente', 'clientesController');
