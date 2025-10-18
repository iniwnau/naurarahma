<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keluarga', [KeluargaController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

