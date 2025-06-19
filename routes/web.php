<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('/crea', [BookController::class, 'create'])->name('create');
Route::post('/salva', [BookController::class, 'store'])->name('store');
