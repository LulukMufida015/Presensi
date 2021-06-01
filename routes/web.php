<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('page/home');
});
Route::get('/jadwal', function () {
    return view('page/jadwal');
});

Route::get('/laporan', function () {
    return view('page/laporan');
});
Route::get('/siswa', function () {
    return view('page/siswa');
});
Route::get('/contact', function () {
    return view('page/contact');
});

