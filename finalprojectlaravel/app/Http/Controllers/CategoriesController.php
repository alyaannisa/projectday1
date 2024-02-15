<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $CategoriesList = Categories::all();
        return view('categories')->with('categoriesList', $CategoriesList);
    }

    public function create()
    {
    // return view('categories.create');
        $categories = Categories::all();
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|max:100',
        'parent_id' => 'nullable|exists:categories,category_id',
    ]);

    $category = new Categories();
    $category->name = $request->name;
    $category->parent_id = fake()->numberBetween(1,3);
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $CategoriesList = Categories::find($id);
        // dd($id);
        return view('editCategories')->with("categories", $CategoriesList);
    }

    public function destroy(string $id)
    {
        $findCategories = Categories::find($id);
        $findCategories->delete();
        return redirect()->route('categories.index');
    }
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $category = Categories::find($id);
        $category->update($request->all());
        return redirect()->route("categories.index");
    }
}
