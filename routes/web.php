<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
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

// Halaman Pasien
// Menampilkan data pasien
Route::get("/pasien", [PasienController::class, 'index']);
// Menampilkan form untuk menambahkan data pasien
Route::get("/pasien/create", [PasienController::class, 'create']);
// Menyimpan data pasien yang baru
Route::post("/pasien", [PasienController::class, 'store']);

// Halaman Dokter
// Menampilkan data dokter
Route::get("/dokter", [DokterController::class, 'index']);
// Menampilkan form untuk menambahkan data dokter
Route::get("/dokter/create", [DokterController::class, 'create']);
// Menyimpan data dokter yang baru
Route::post("/dokter", [DokterController::class, 'store']);
