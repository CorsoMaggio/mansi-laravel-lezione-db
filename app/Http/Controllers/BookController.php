<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', ['books' => $books]);
    }

    public function create()
    {
        $authors = Author::all();
        return view('create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pages' => ['required', 'integer'],
            'price' => ['decimal:2'],
        ]);

        Book::create([
            'name' => $request->name,
            'years' => $request->years,
            'pages' => $request->pages,
            'price' => $request->price,
            'author_id' => $request->author_id,
        ]);
        return redirect()
            ->route('index')
            ->with('success', 'Complimenti! Libroi creato con successo!');
    }

    public function show(Book $book)
    {
        return view('show', ['book' => $book]);
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('edit', ['book' => $book, 'authors' => $authors]);
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'pages' => ['required', 'integer'],
            'price' => ['decimal:2'],
        ]);

        $book->update([
            'name' => $request->name,
            'years' => $request->years,
            'pages' => $request->pages,
            'price' => $request->price,
            'author_id' => $request->author_id,
        ]);
        return redirect()
            ->route('index')
            ->with('success', 'Complimenti! Libroi modificato con successo!');
    }

    public function destroy(Book $book)
    {
        //azione
        $book->delete();
        return redirect()
            ->route('index')
            ->with('success', 'Complimenti! Libroi eliminato con successo!');
    }
}
