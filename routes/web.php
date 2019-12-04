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
    return view('inicio');
});

Route::get('/habita.html', function () {
    return view('inicio');
});

Route::get('/fotos.html', function () {
    return view('inicio');
});

Route::get('/somos', function () {
    return view('somos.somos');
});

Route::get('/habitaciones', function () {
    return view('habitaciones.habitaciones');
});

Route::get('/servicios', function () {
    return view('servicios.servicios');
});

Route::get('/reservaciones', function () {
    return view('reservaciones');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/traslados', function () {
    return view('traslados');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/galeria', function () {
    return view('galeria.galeria');
});


Route::get('/tarifas', function () {
    return view('tarifas');
});

Route::get('/contactus', 'MasterController@contactus');
Route::post('/contactus', 'MasterController@contactus');

Route::get('/reserva', 'MasterController@reserva');
Route::post('/reserva', 'MasterController@reserva');