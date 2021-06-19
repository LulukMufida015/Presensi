<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JamController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\LaporanController;

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

Route::middleware(['auth' , 'administrator'])->group (function(){
    Route::resource('dosen', DosenController::class);
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('kelass', KelasController::class);
    Route::resource('jam', JamController::class);
    Route::resource('matakuliah', MatakuliahController::class);
    Route::resource('jadwal', JadwalController::class);
    
    Route::get('home', [HomeController::class, 'index']);
    Route::get('/laporan', function () {
        return view('page.laporan');
    });
});

Route::get('/profil', function () {
    return view('NotAdmin.mahasiswa');
});
Route::get('/home', function () {
    return view('NotAdmin.home');
});
Route::resource('presensi', PresensiController::class);
route::get('/laporan', [LaporanController::class, 'index']);
