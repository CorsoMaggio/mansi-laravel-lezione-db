<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BookController::class, 'index']);
Route::get('/crea', [BookController::class, 'create']);
Route::post('/salva', [BookController::class, 'store']);
