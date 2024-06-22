<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasukanController;

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

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/walikota', [App\Http\Controllers\DashboardController::class, 'dataWalinagari'])->name('walikota');
Route::get('/struktur_kota', [App\Http\Controllers\DashboardController::class, 'strukturKota'])->name('struktur_kota');
Route::get('/portfolio', [App\Http\Controllers\ProdukController::class, 'index'])->name('portofolio');
Route::get('/portfolio-details/{id}', [App\Http\Controllers\ProdukController::class, 'detailProduk'])->name('portofolio-details');
Route::get('/proker', [App\Http\Controllers\ProkerController::class, 'index'])->name('team');
Route::get('/blog', [App\Http\Controllers\NewsController::class, 'index'])->name('blog');
Route::get('/blog-single/{id}', [App\Http\Controllers\NewsController::class, 'detail'])->name('blog-single');
Route::get('/contact', [App\Http\Controllers\MasukanController::class, 'index'])->name('contact');
Route::post('/contact/store', [App\Http\Controllers\MasukanController::class, 'store'])->name('masukanstore');
Route::get('/report-detail-balita', [App\Http\Controllers\PendudukController::class, 'balita'])->name('report-detail-balita');
Route::get('/report-detail-lansia', [App\Http\Controllers\PendudukController::class, 'lansia'])->name('report-detail-lansia');
Route::get('/report-detail-stunting', [App\Http\Controllers\PendudukController::class, 'stunting'])->name('report-detail-stunting');
Route::get('/registrasi_admin', [App\Http\Controllers\ClientController::class, 'index'])->name('registrasi_admin');
Route::post('/registrasi_admin/store', [App\Http\Controllers\ClientController::class, 'store'])->name('registrasi_store');


Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/services', function(){
    return view('services');
})->name('services');

Route::get('/sejarah_kota', function(){
    return view('sejarah_kota');
})->name('sejarah_kota');



