<?php



Route::get('/', 'HomeController@index');
Route::get('/balance', 'BalanceController@index');
Route::get('/pagodeservicios', 'PagoDeServiciosController@index');
Route::get('/inversiones', 'InversionesController@index');
Route::get('/login', 'LoginController@index');

Route::post("/pagodeservicios/pago","PagoDeServiciosController@pagoDeServicios");
Route::post("/inversiones","InversionesController@inversiones");

Route::get('inversiones', 'InversionesController@index')->name('inversiones');
Route::post('/inversiones/comprar', 'InversionesController@comprarAcciones');
Route::post('/inversiones/vender', 'InversionesController@venderAcciones');


?>