<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['string'],
        ]);

        Author::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
        ]);
        return redirect()
            ->route('authors.index')
            ->with('success', 'Complimenti! Autore creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('authors.show', ['author' => $author]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {

        $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['string'],
        ]);

        $author->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
        ]);

        return redirect()
            ->route('authors.index')
            ->with('success', 'Complimenti! Autore modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {

        $author->delete();
        return redirect()
            ->route('authors.index')
            ->with('success', 'Complimenti! Autore eliminato con successo!');
    }
}
