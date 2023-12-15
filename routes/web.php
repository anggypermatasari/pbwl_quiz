<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mhsw', [App\Http\Controllers\MhswController::class, 'index']);
Route::get('/mhsw/create', [App\Http\Controllers\MhswController::class, 'create']);
Route::post('/mhsw', [App\Http\Controllers\MhswController::class, 'store']);
Route::get('/mhsw/edit/{id}', [App\Http\Controllers\MhswController::class, 'edit']);
Route::patch('/mhsw/{id}', [App\Http\Controllers\MhswController::class, 'update']);
Route::delete('/mhsw/{id}', [App\Http\Controllers\MhswController::class, 'destroy']);
//tabel buku

Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index']);
Route::get('/buku/create', [App\Http\Controllers\BukuController::class, 'create']);
Route::post('/buku', [App\Http\Controllers\BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [App\Http\Controllers\BukuController::class, 'edit']);
Route::patch('/buku/{id}', [App\Http\Controllers\BukuController::class, 'update']);
Route::delete('/buku/{id}', [App\Http\Controllers\BukuController::class, 'destroy']);
//end tabel buku
//tabel Transaksi

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);
