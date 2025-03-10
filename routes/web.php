<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/opini', [HomeController::class, 'opini'])->name('opini');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/essai', [HomeController::class, 'essai'])->name('essai');
