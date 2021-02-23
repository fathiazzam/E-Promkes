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

Route::get('/req', 'ReqDemoController@getData');
Route::get('/laporankegiatanpromkes/dinkes-b/tahun={tahun}&periode={periode}', 'Dinke@lihat');
Route::get('/laporankegiatanpromkes/dinkesa', 'Dinke@index');
Route::get('/laporankegiatanpromkes/dinkes-a/tahun={tahun}&periode={periode}', 'Dinke@pilih_periode');
