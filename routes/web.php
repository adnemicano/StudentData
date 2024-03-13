<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/smktelkom', function () {
    return ('pendaftaran');
});

Route::get('/user/{id}', function ($id) {
    return ('SMK Telkom Purwokerto ' . $id);
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'index']);

//route pelanggan
Route::get('/siswa', [SiswaController::class, 'index']); //untuk menampilkan seljuruh data
Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa']); //untuk menampilkan tambah data
Route::post('/siswa', [SiswaController::class, 'siswa']); //untuk menyimpan data baru
Route::get('/showsiswa/{id}', [SiswaController::class, 'showsiswa']); //untuk menampilkan data berdasarkan id tertentu
Route::get('/editsiswa/{id}', [SiswaController::class, 'editsiswa']);
Route::get('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa']);
