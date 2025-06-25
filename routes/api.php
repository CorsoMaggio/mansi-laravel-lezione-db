<?php

use App\Http\Controllers\ApiBookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/libri', [ApiBookController::class, 'index']);
Route::get('/libri/{id}', [ApiBookController::class, 'show']);
