<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

//Lista dei libri
Route::get('/', [BookController::class, 'index'])->name('index');
//Form di creazione e salvtaggio
Route::get('/crea', [BookController::class, 'create'])->name('create');
Route::post('/salva', [BookController::class, 'store'])->name('store');
//Mostra dettaglio
Route::get('/mostra/{book}', [BookController::class, 'show'])->name('show');
//Form di modifica e aggiornamento
Route::get('/modifica/{book}', [BookController::class, 'edit'])->name('edit');
Route::put('/aggiorna/{book}', [BookController::class, 'update'])->name('update');
//Rotta di cancellazione
Route::delete('/cancella/{book}', [BookController::class, 'destroy'])->name('destroy');
