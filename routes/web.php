<?php

use App\Http\Controllers\DahboardUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasUserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaUserController;
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

//belajaran

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/daftar', function () {
//     return view('daftar');
// });

// Route::get('/smktelkom', function () {
//     return ('pendaftaran');
// });

// Route::get('/user/{id}', function ($id) {
//     return ('SMK Telkom Purwokerto ' . $id);
// });
//---------------------------------------------

//project web pas genap -------------
Route::get('/', function () {
    return view('homepage');
}); //untuk menampilkan halaman utamanya sebelum ke tampilan halaman login / Register

Auth::routes(); //routes bawaan dari laravel/ui nya

// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginform'])->name('login');

// route untuk role admin
Route::get('/home', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'admin']);
//'auth','admin' di ambil dari file kernel nya
//karna peraturan dlm ngodingnya seperti itu ..

Route::group(['prefix' => 'admin', 'namespace' => 'AdminMiddleware', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/siswa', [SiswaController::class, 'index'])->name('admin.siswa');

    Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa'])->name('admin.tambahsiswa'); //untuk menampilkan halaman tambah data

    Route::post('/siswa-ditambahkan', [SiswaController::class, 'siswa'])->name('admin.siswaadd'); //untuk menyimpan data baru

    Route::get('/showsiswa/{id}', [SiswaController::class, 'showsiswa'])->name('admin.lihatsiswa'); //untuk menampilkan data berdasarkan id tertentu

    Route::get('/siswa/{id}/edit', [SiswaController::class, 'editsiswa'])->name('admin.editsiswa'); // untuk mengedit data berdasarkan id tertentu

    Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('admin.siswaupdate');

    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('admin.hapussiswa');

    Route::get('/kelas', [KelasController::class, 'index'])->name('admin.kelas');
});

Route::group(['prefix' => 'user', 'namespace' => 'UserMiddleware', 'middleware' => ['auth', 'user']], function () {
    Route::get('/dashboard-user', [DahboardUserController::class, 'index'])->name('user.dashboard');
    Route::get('/siswa-user', [SiswaUserController::class, 'index'])->name('user.siswa-user');
    Route::get('/kelas-user', [KelasUserController::class, 'index'])->name('user.kelas-user');
});

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard-user', [DashboardController::class, 'user'])->middleware('auth','user');
// Route::get('/siswa', [SiswaController::class, 'index']);

//route siswa bukan pakai middleware grup melainkan menggunakan prefix
// Route::middleware(['auth', 'admin'])->group(function () {

    //     Route::get('/siswa', [SiswaController::class, 'index']); //untuk menampilkan seljuruh data
    //     Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa']); //untuk menampilkan tambah data
    //     Route::post('/siswa', [SiswaController::class, 'siswa']); //untuk menyimpan data baru
    //     Route::get('/showsiswa/{id}', [SiswaController::class, 'showsiswa']); //untuk menampilkan data berdasarkan id tertentu

    //     Route::get('/siswa/{id}/edit', [SiswaController::class, 'editsiswa']); // untuk mengedit data berdasarkan id tertentu
    //     Route::put('/siswa/{id}', [SiswaController::class, 'update']);
    //     Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']);
    // });

    // //menu yg menampilkan untuk user
    // Route::middleware(['auth', 'user'])->group(
        //     function () {

            //         Route::get('/siswa-user', [SiswaUserController::class, 'index']);
            //         Route::get('/kelas-user', [SiswaUserController::class, 'kelas']);
//     }
// );

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
