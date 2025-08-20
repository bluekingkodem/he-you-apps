<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();

        return view('category.list', ['category' => $category]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string']
        ]);

        Category::create($validated);

        return redirect()->route('category.list')->with('success', "la categorie a bien ete cree");
    }

    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category]);
    }

    public function update(Category $category, Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string']
        ]);

        $category->update($validated);
        // dd($category);

        return redirect()->route('category.list')->with('success', "la categorie a bien ete modifie");
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.list')->with('success', "la categorie a bien ete supprime");
    }
}
