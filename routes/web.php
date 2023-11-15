<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/tambah', [SiswaController::class, 'tambah']);


Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::get('/siswa/{id}/hapus', [SiswaController::class, 'hapus']);
