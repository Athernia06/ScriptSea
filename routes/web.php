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

Route::get('Home', function () {
    return view('index');
});
Route::get('Dashboard', function () {
    return view('dashboard');
});
Route::get('Profile', function () {
    return view('profile');
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
Route::get('BimbinganMahasiswa', function () {
    return view('bimbstudent');
});
Route::get('BimbinganDosen', function () {
    return view('bimbdosen');
});
Route::get('Skripsi', function () {
    return view('skripsi');
});