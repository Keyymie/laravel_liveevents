<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Catégorie ajoutée.');
    }

 public function delete($id)
 {
     $category = Category::findOrFail($id);
     return view('categories.delete', compact('category'));
 }


 public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('categories.edit', compact('category'));
}

// Met à jour la catégorie
public function update(Request $request, $id)
{
    $request->validate([
        'category_name' => 'required|string|max:255',
    ]);

    $category = Category::findOrFail($id);
    $category->category_name = $request->input('category_name');
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
}
}

