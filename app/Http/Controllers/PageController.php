<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{


    public function homepage()
    {
        //Ottengo i dati dal DB
        $books = Book::all();
        //Creo una variabile
        //La passo alla vista 
        return view('homepage', ['books' => $books]);
        //return view('homepage', compact('books'));
    }

    public function detail(Book $book)
    {
        return view('detail', ['book' => $book]);
        //return view('detail', compact('book'));
    }
}
