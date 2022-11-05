<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    return view('mahasiswa/index');
});
Route::get('/data', function () {
    return view('mahasiswa/data');
});
Route::get('/success', function () {
    return view('mahasiswa/success');
});
Route::post('/mahasiswa/store', 'App\Http\Controllers\MahasiswaController@store');
Route::get('/mahasiswa/cetak_kartu', 'App\Http\Controllers\MahasiswaController@cetak_kartu');
