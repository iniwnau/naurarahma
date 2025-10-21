<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\KeluargaKkController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/keluarga', [KeluargaController::class, 'index']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('warga', WargaController::class);
Route::resource('kependudukan', KeluargaKkController::class);