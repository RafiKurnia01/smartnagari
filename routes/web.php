<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasukanController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\WebsktmController;
use App\Http\Controllers\AdminkepengurusanController;
use App\Http\Controllers\WalinagariController;

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
    Route::get('/services/meninggal', [App\Http\Controllers\WebmeninggalController::class, 'index'])->name('meninggal');
    Route::get('/services/domisili', [App\Http\Controllers\WebdomisiliController::class, 'index'])->name('domisili');
    Route::post('/services/domisili/store', [App\Http\Controllers\WebdomisiliController::class, 'store'])->name('domisilistore');
    Route::get('/services/tanah', [App\Http\Controllers\WebtanahController::class, 'index'])->name('tanah');
    Route::post('/services/tanah/store', [App\Http\Controllers\WebtanahController::class, 'store'])->name('tanahstore');
    Route::get('/services/suratmeninggal', [App\Http\Controllers\WebmeninggalController::class, 'index'])->name('suratmeninggal');
    Route::post('/services/suratmeninggal/store', [App\Http\Controllers\WebmeninggalController::class, 'store'])->name('suratmeninggalstore');
});

Route::middleware('user')->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'show'])->name('index-admin');
    Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout-admin');
    Route::get('/admin/wisata', [App\Http\Controllers\AdminController::class, 'wisata'])->name('adminwisata');
    Route::post('/admin/wisata/post', [App\Http\Controllers\TourController::class, 'store'])->name('wisata-post');
    Route::get('/admin/kepengurusan', [App\Http\Controllers\AdminController::class, 'kepengurusan'])->name('adminkepengurusan');
    Route::post('/admin/kepengurusan/post', [App\Http\Controllers\AdminkepengurusanController::class, 'store'])->name('kepengurusanpost');
    Route::get('/admin/proker', [App\Http\Controllers\AdminController::class, 'proker'])->name('adminproker');
    Route::post('/admin/proker/post', [App\Http\Controllers\AdminprokerController::class, 'store'])->name('prokerpost');
    Route::get('/admin/produk', [App\Http\Controllers\AdminController::class, 'produk'])->name('adminproduk');
    Route::post('/admin/produk/post', [App\Http\Controllers\AdminprodukrController::class, 'store'])->name('produkpost');
    Route::get('/admin/walinagari', [App\Http\Controllers\AdminController::class, 'walinagari'])->name('adminwalinagari');
    Route::post('/admin/walinagari/update', [WalinagariController::class, 'updateWalinagari'])->name('walinagariupdate');
    Route::get('/admin/pengaduan', [App\Http\Controllers\AdminController::class, 'pengaduan'])->name('adminpengaduan');
    Route::get('/admin/lansia', [App\Http\Controllers\AdminController::class, 'lansia'])->name('adminlansia');
    Route::get('/admin/balita', [App\Http\Controllers\AdminController::class, 'balita'])->name('adminbalita');
    Route::get('/admin/stunting', [App\Http\Controllers\AdminController::class, 'stunting'])->name('adminstunting');
    Route::post('/admin/stunting/post', [App\Http\Controllers\PendudukController::class, 'storeStunting'])->name('stuntingpost');
    Route::post('/admin/balita/post', [App\Http\Controllers\PendudukController::class, 'storeBalita'])->name('balitapost');
    Route::post('/admin/lansia/post', [App\Http\Controllers\PendudukController::class, 'storeLansia'])->name('lansiapost');
    Route::get('/admin/dataproduk', [App\Http\Controllers\AdminController::class, 'dataProduk'])->name('dataproduk');
    Route::get('/admin/surat', [App\Http\Controllers\AdminController::class, 'surat'])->name('surat');
    Route::get('/admin/detail-sktm/{id}', [App\Http\Controllers\WebsktmController::class, 'detail'])->name('detail-sktm');
    Route::post('/admin/detail-sktm/update', [App\Http\Controllers\WebsktmController::class, 'updateStatusSurat'])->name('update-status');
    Route::post('/admin/surat/delete', [App\Http\Controllers\WebsktmController::class, 'delete'])->name('delete-suratsktm');
    Route::get('/admin/detail-tanah/{id}', [App\Http\Controllers\WebtanahController::class, 'detail'])->name('detail-tanah');
    Route::post('/admin/detail-tanah/update', [App\Http\Controllers\WebtanahController::class, 'update'])->name('update-status-tanah');
    Route::post('/admin/detail-tanah/delete', [App\Http\Controllers\WebtanahController::class, 'delete'])->name('delete-tanah');
    Route::get('/admin/detail-penghasilan/{id}', [App\Http\Controllers\WebpenghasilanController::class, 'detail'])->name('detail-penghasilan');
    Route::post('/admin/detail-penghasilan/update', [App\Http\Controllers\WebpenghasilanController::class, 'updateStatus'])->name('update-status-penghasilan');
    Route::post('/admin/detail-penghasilan/delete', [App\Http\Controllers\WebpenghasilanController::class, 'delete'])->name('delete-penghasilan');
    Route::get('/admin/detail-nikah/{id}', [App\Http\Controllers\WebnikahController::class, 'detail'])->name('detail-nikah');
    Route::post('/admin/detail-nikah/update', [App\Http\Controllers\WebnikahController::class, 'updateStatus'])->name('update-status-nikah');
    Route::post('/admin/detail-nikah/delete', [App\Http\Controllers\WebnikahController::class, 'delete'])->name('delete-nikah');
    Route::get('/admin/detail-meninggal/{id}', [App\Http\Controllers\WebmeninggalController::class, 'detail'])->name('detail-meninggal');
    Route::post('/admin/detail-meninggal/update', [App\Http\Controllers\WebmeninggalController::class, 'updateStatus'])->name('update-status-meninggal');
    Route::post('/admin/detail-meninggal/delete', [App\Http\Controllers\WebmeninggalController::class, 'delete'])->name('delete-meninggal');
    Route::get('/admin/detail-domisili/{id}', [App\Http\Controllers\WebdomisiliController::class, 'detail'])->name('detail-domisili');
    Route::post('/admin/detail-domisili/update', [App\Http\Controllers\WebdomisiliController::class, 'updateStatus'])->name('update-status-domisili');
    Route::post('/admin/detail-domisili/delete', [App\Http\Controllers\WebdomisiliController::class, 'delete'])->name('delete-domisili');
    Route::get('/admin/pegawai', [App\Http\Controllers\AdminController::class, 'pegawai'])->name('adminpegawai');
    Route::get('/admin/pegawai/updatepegawai/{id}', [App\Http\Controllers\AdminkepengurusanController::class, 'updatePegawai'])->name('updatepegawai');
    Route::post('/admin/pegawai/updatepegawai/store', [App\Http\Controllers\AdminkepengurusanController::class, 'updatePegawaiStore'])->name('updatepegawaistore');
    Route::post('/admin/pegawai/delete', [App\Http\Controllers\AdminkepengurusanController::class, 'deletePegawai'])->name('deletepegawai');
});

Route::get('/about', function(){
    return view('about');
})->name('about');



Route::get('/sejarah_kota', function(){
    return view('sejarah_kota');
})->name('sejarah_kota');



