<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/factura', 'pdfController@factura');
Route::get('/reporte_anual', 'pdfController@reporteAnual');
Route::get('/reporte_mensual', 'pdfController@reporteMensual');
Route::get('/reporte_semanal', 'pdfController@reporteSemanal');
Route::get('/reporte_dia', 'pdfController@reporteDia');
Route::get('/reporte_personalizado', 'pdfController@reportePersonalizado');

Route::post('/seleccion', 'seleccionController@index')->middleware('auth');
Route::post('/personalizado', 'reportePersonalizadoController@index')->middleware('auth');


Route::resource('/registrar', 'ingresosController');
Route::resource('/cliente', 'clientesController');
Route::resource('/reportes', 'reportesController');
