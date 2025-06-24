<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/dettaglio-prodotto/{book}', [PageController::class, 'detail'])->name('detail');


Route::middleware(['auth'])->group(function () {
    //Lista dei libri
    Route::get('/libri', [BookController::class, 'index'])->name('index');
    Route::get('/libri/crea', [BookController::class, 'create'])->name('create');
    Route::post('/libri/salva', [BookController::class, 'store'])->name('store');
    //Mostra dettaglio
    Route::get('/libri/mostra/{book}', [BookController::class, 'show'])->name('show');
    //Form di modifica e aggiornamento
    Route::get('/libri/modifica/{book}', [BookController::class, 'edit'])->name('edit');
    Route::put('/libri/aggiorna/{book}', [BookController::class, 'update'])->name('update');
    //Rotta di cancellazione
    Route::delete('/libri/cancella/{book}', [BookController::class, 'destroy'])->name('destroy');

    Route::resource('authors', AuthorController::class);
});
