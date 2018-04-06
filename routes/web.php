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

Route::get('/somos', function () {
    return view('somos');
});

Route::get('/habitaciones', function () {
    return view('habitaciones');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/traslados', function () {
    return view('traslados');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/tarifas', function () {
    return view('tarifas');
});
