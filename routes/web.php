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

Route::prefix('konsumen')->group(function () {
	Route::get('/', 'KonsumenC@all');
	Route::get('/edit/{id}', 'KonsumenC@edit');
	Route::post('/update', 'KonsumenC@update');
	Route::post('/save', 'KonsumenC@save');
	Route::get('/delete/{id}', 'KonsumenC@delete');
});

Route::prefix('transaksi')->group(function () {
	Route::get('/', 'TransaksiC@all');
	Route::get('/edit/{id}', 'TransaksiC@edit');
	Route::post('/update', 'TransaksiC@update');
	Route::post('/save', 'TransaksiC@save');
	Route::get('/delete/{id}', 'TransaksiC@delete');
});
