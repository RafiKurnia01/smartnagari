<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratsktmController;
use App\Http\Controllers\SuratpenghasilanController;
use App\Http\Controllers\SuratnikahController;
use App\Http\Controllers\SuratmeninggalController;
use App\Http\Controllers\SuratdomisiliController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('surattanah', SuratController::class);
Route::apiResource('suratsktm', SuratsktmController::class);
Route::apiResource('suratpenghasilan', SuratpenghasilanController::class);
Route::apiResource('suratnikah', SuratnikahController::class);
Route::apiResource('suratmeninggal', SuratmeninggalController::class);
Route::apiResource('suratdomisili', SuratdomisiliController::class);