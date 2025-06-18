<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Book::create([
            'name' => $request->name,
            'years' => $request->years,
            'pages' => $request->pages,
        ]);
        dd('ok');
    }
}
