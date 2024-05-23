<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

Route::get('/', [WordController::class, 'firstPage'])->name('home');

Route::get('/dicionarios', [WordController::class, 'index'])->name('getWords');

Route::get('/dicionarios/create', [WordController::class, 'create'])->name('insertWords');

Route::post('/dicionarios/store', [WordController::class, 'store'])->name('storeWords');
