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
 //Route::get('/', 'MasterController@index');
Route::get('/', function () {
    return view('main.studio');
});

Route::group(['prefix'=>'sala'],function(){
	
	Route::resource('cliente','ClienteController');
	Route::resource('instru','InstrumentoController');
	Route::resource('room','RoomController');
	
	
	Route::get('reserva', 'ReservaController@index');
	Route::post('reserva', 'ReservaController@busqueda');
	Route::post('reserva/fijo', 'ReservaController@busqueda2');
	Route::post('reserva/instru', 'ReservaController@getInstrumento');
	Route::post('reserva/save', 'ReservaController@guardar');
	Route::post('reserva/save2', 'ReservaController@detalle');
	Route::post('reserva/send_email', 'ReservaController@sendEmail');
});