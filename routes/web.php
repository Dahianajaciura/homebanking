<?php



Route::get('/', 'HomeController@index');
Route::get('/balance', 'BalanceController@index');
Route::get('/pagodeservicios', 'PagoDeServiciosController@index');
Route::get('/inversiones', 'InversionesController@index');

Route::post("/pagodeservicios",
"HomeController@payService")->name("pagodeservicios");



?>