<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JamController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanAdminController;

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

// Route::get('/', function () {
//      return view('welcome');
//  });

Auth::routes();

Route::get('/', function () {
    return redirect('login');
});

//  Route::get('/Presensi', function () {
//     return view('page.presensi');
// });
// Route::get('/jadwal', function () {
//     return view('page.jadwal');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'administrator'])->group(function () {
    Route::resource('dosen', DosenController::class);
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('kelass', KelasController::class);
    Route::resource('jam', JamController::class);
    Route::resource('Matakuliah', MatakuliahController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::get('/laporan/admin', [LaporanAdminController::class, 'indexLaporan']);
    Route::get('/laporan/admin/cetak_pdf', [LaporanAdminController::class, 'cetak_pdf']);
    Route::get('home', [HomeController::class, 'index']);
    
});
Route::middleware(['auth', 'mahasiswa'])->group(function () {
    Route::get('/home/mahasiswa', [HomeController::class, 'indexMahasiswa']);
    Route::get('/profil/{id}', [ProfileController::class, 'index']);
    Route::get('presensi', [PresensiController::class, 'index'])->name('presensi.index');
    Route::get('presensi/submit/{id}', [PresensiController::class, 'store']);
    Route::get('/laporan', [LaporanController::class, 'index']);
    Route::get('/laporan/cetak_pdf', [LaporanController::class, 'cetak_pdf']);
});
