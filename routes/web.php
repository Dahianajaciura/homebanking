<?php



Route::get('/', 'HomeController@index');
Route::get('/balance', 'BalanceController@index');
Route::get('/pagodeservicios', 'PagoDeServiciosController@index');
Route::get('/inversiones', 'InversionesController@index');


Route::post("/pagodeservicios",
"HomeController@payService")->name("pagodeservicios");

Route::post("/pagodeservicios/pago","PagoDeServiciosController@pagoDeServicios");


Route::get('inversiones', 'InversionesController@index')->name('inversiones');
Route::get('inversiones/comprar/{id}', 'InversionesController@comprar')->name('inversiones.comprar');
Route::get('inversiones/vender/{id}', 'InversionesController@vender')->name('inversiones.vender');


?>