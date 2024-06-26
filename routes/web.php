<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasukanController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\WebsktmController;

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
Route::get('/wisata', [App\Http\Controllers\TourController::class, 'index'])->name('wisata');
Route::get('/report-detail-balita', [App\Http\Controllers\PendudukController::class, 'balita'])->name('report-detail-balita');
Route::get('/report-detail-lansia', [App\Http\Controllers\PendudukController::class, 'lansia'])->name('report-detail-lansia');
Route::get('/report-detail-stunting', [App\Http\Controllers\PendudukController::class, 'stunting'])->name('report-detail-stunting');
Route::get('/registrasi', [App\Http\Controllers\ClientController::class, 'regis'])->name('registrasi');
Route::post('/registrasi/store', [App\Http\Controllers\ClientController::class, 'store'])->name('registrasi_store');
Route::get('/print-data-stunting', [App\Http\Controllers\PendudukController::class, 'printStunting'])->name('print-data-stunting');
Route::get('/print-data-lansia', [App\Http\Controllers\PendudukController::class, 'printLansia'])->name('print-data-lansia');
Route::get('/print-data-balita', [App\Http\Controllers\PendudukController::class, 'printBalita'])->name('print-data-balita');
Route::get('/login', [App\Http\Controllers\ClientController::class, 'index'])->name('login');
Route::post('/login/auth', [App\Http\Controllers\ClientController::class, 'authenticate'])->name('login_auth');
Route::get('/login-admin', [App\Http\Controllers\AdminController::class, 'index'])->name('login-admin');
Route::post('/login-admin/auth', [App\Http\Controllers\AdminController::class, 'login'])->name('login-admin-auth');
Route::get('/wisata/detail/{id}', [App\Http\Controllers\TourController::class, 'readmore'])->name('wisata-detail');

Route::middleware('client')->group(function(){
    Route::get('/services', [App\Http\Controllers\PelayananController::class, 'index'])->name('services');
    Route::get('/contact', [App\Http\Controllers\MasukanController::class, 'index'])->name('contact');
    Route::post('/contact/store', [App\Http\Controllers\MasukanController::class, 'store'])->name('masukanstore');
    Route::get('/logout', [App\Http\Controllers\ClientController::class, 'logout'])->name('logout');
    Route::get('/status/{jenis_surat}/{id_client}', [PelayananController::class, 'status'])->name('status');
    Route::get('/services/sktm', [WebsktmController::class, 'index'])->name('sktm');
    Route::post('/services/sktm/store', [WebsktmController::class, 'store'])->name('sktmstore');
    Route::get('/services/penghasilan', [App\Http\Controllers\WebpenghasilanController::class, 'index'])->name('penghasilan');
    Route::post('/services/penghasilan/store', [App\Http\Controllers\WebpenghasilanController::class, 'store'])->name('penghasilanstore');
    Route::get('/services/nikah', [App\Http\Controllers\WebnikahController::class, 'index'])->name('nikah');
    Route::post('/services/nikah/store', [App\Http\Controllers\WebnikahController::class, 'store'])->name('nikahstore');
});

Route::middleware('user')->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'show'])->name('index-admin');
    Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout-admin');
    Route::get('/admin/wisata', [App\Http\Controllers\AdminController::class, 'wisata'])->name('adminwisata');
    Route::post('/admin/wisata/post', [App\Http\Controllers\TourController::class, 'store'])->name('wisata-post');
});

Route::get('/about', function(){
    return view('about');
})->name('about');



Route::get('/sejarah_kota', function(){
    return view('sejarah_kota');
})->name('sejarah_kota');



