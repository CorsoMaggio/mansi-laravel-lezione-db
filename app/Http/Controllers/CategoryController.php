<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Complimenti! Categoria creata con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'string'],
        ]);

        $category->update([
            'name' => $request->name,
        ]);
        return redirect()
            ->route('categories.index')
            ->with('success', 'Complimenti! Categoria modificata con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->books()->detach();
        $category->delete();
        return redirect()
            ->route('categories.index')
            ->with('success', 'Complimenti! Categoria eliminata con successo!');
    }
}
