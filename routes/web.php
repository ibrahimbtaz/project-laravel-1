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

route::group(['prefix' => '/siswa'], function(){
    Route::get('/all', [SiswaController:: class, 'index']);
    Route::get('/detail/{siswa}',[SiswaController::class,'show']);
});

route::group(['prefix' => '/kelas'], function(){
    Route::get('/all', [KelasController:: class, 'index']);
    Route::get('/detail/{kelas}',[KelasController::class,'show']);
});

