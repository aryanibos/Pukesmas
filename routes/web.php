<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RegisController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    // Menampilkan form untuk menambahkan data pasien
    Route::get("/pasien/create", [PasienController::class, 'create'])->name('pasien.create');
    // Menyimpan data pasien yang baru
    Route::post("/pasien", [PasienController::class, 'store'])->name('pasien.simpan');
    // Menampilkan form untuk mengedit data pasien
    Route::get("/pasien/edit/{id}", [PasienController::class, 'edit'])->name('pasien.edit');
    // Menyimpan data pasien yang diedit
    Route::put("/pasien/update/{id}", [PasienController::class, 'update'])->name('pasien.update');
    // Menghapus data pasien
    Route::delete("/pasien/delete/", [PasienController::class, 'destroy'])->name('pasien.hapus');

    // Halaman Dokter

    // Menampilkan form untuk menambahkan data dokter
    Route::get("/dokter/create", [DokterController::class, 'create'])->name('dokter.create');
    // Menyimpan data dokter yang baru
    Route::post("/dokter", [DokterController::class, 'store'])->name('dokter.simpan');
    // Menampilkan form untuk mengedit data dokter
    Route::get("/dokter/edit/{id}", [DokterController::class, 'edit'])->name('dokter.edit');
    // Menyimpan data dokter yang diedit
    Route::put("/dokter/update/{id}", [DokterController::class, 'update'])->name('dokter.update');
    // Menghapus data dokter
    Route::delete("/dokter/delete/", [DokterController::class, 'destroy'])->name('dokter.hapus');
});


Route::group(['middleware' => ['auth']], function () {
    // Halaman Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Halaman Pasien
    // Menampilkan data pasien
    Route::get("/pasien", [PasienController::class, 'index'])->name('pasien');

    // Menampilkan data dokter
    Route::get("/dokter", [DokterController::class, 'index'])->name('dokter');
});

// Route::get('/form', [RegisController::class, 'index'])->name('regist');
// Route::post('/output', [RegisController::class, 'store'])->name('regist.simpan');

// halaman Auth (Login, Register, Logout)
Auth::routes();
