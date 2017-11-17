<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/factura', 'pdfController@factura');


Route::post('/seleccion', 'seleccionController@index')->middleware('auth');
Route::post('/personalizado', 'reportePersonalizadoController@index')->middleware('auth');


Route::resource('/registrar', 'ingresosController');
Route::resource('/cliente', 'clientesController');
Route::resource('/reportes', 'reportesController');
