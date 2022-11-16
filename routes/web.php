<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;

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
    return view('data.home');
});

Route::get('/home', function () {
    return view('data.home');
});

Route::get('/siswa', [SiswaController:: class, 'index']);

Route::get('/detail_siswa/{siswa}',[SiswaController::class,'show']);

Route::get('/kelas', [KelasController:: class, 'index']);

Route::get('/detail_kelas/{kelas}',[KelasController::class,'show']);
