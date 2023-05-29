<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RegisController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/form', function () {
    return view('form-regis.form');
});

Route::post('/form', function () {
    return view('form-regis.form');
});

// Halaman Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Halaman Pasien
// Menampilkan data pasien
Route::get("/pasien", [PasienController::class, 'index'])->name('pasien');
// Menampilkan form untuk menambahkan data pasien
Route::get("/pasien/create", [PasienController::class, 'create'])->name('pasien.create');
// Menyimpan data pasien yang baru
Route::post("/pasien", [PasienController::class, 'store'])->name('pasien.simpan');

// Halaman Dokter
// Menampilkan data dokter
Route::get("/dokter", [DokterController::class, 'index'])->name('dokter');
// Menampilkan form untuk menambahkan data dokter
Route::get("/dokter/create", [DokterController::class, 'create'])->name('dokter.create');
// Menyimpan data dokter yang baru
Route::post("/dokter", [DokterController::class, 'store'])->name('dokter.simpan');

// Route::get('/form', [RegisController::class, 'index'])->name('regist');
// Route::post('/output', [RegisController::class, 'store'])->name('regist.simpan');