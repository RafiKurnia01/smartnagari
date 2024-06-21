<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/login', function(){
    return view('login');
})->name('loginadmin');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/services', function(){
    return view('services');
})->name('services');

Route::get('/portofolio', function(){
    return view('portfolio');
})->name('portofolio');

Route::get('/team', function(){
    return view('team');
})->name('team');

Route::get('/blog', function(){
    return view('blog');
})->name('blog');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/sejarah_kota', function(){
    return view('sejarah_kota');
})->name('sejarah_kota');


