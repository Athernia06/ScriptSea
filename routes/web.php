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

// Templating
Route::get('/', function () {
    return view('index');
});
Route::get('Home', function () {
    return view('index');
});
Route::get('Pengajuan', function () {
    return view('pengajuan');
});
Route::get('PengajuanProposal', function () {
    return view('ajuproposal');
});
Route::get('Bimbingan', function () {
    return view('bimbingan');
});
Route::get('BimbinganDosen', function () {
    return view('bimbdosen');
});
Route::get('Skripsi', function () {
    return view('skripsi');
});

// Autentikasi
Auth::routes();

Route::get('Profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('Profile/update', [App\Http\Controllers\HomeController::class, 'profile_update'])->name('profile_update');
Route::post('Profile/upload/foto', [App\Http\Controllers\HomeController::class, 'profile_upload'])->name('profile_upload');


Route::get('Dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('BimbinganMahasiswa', [App\Http\Controllers\ChatsController::class, 'index']);
Route::get('BimbinganMahasiswa/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages']);
Route::post('BimbinganMahasiswa/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage']);
