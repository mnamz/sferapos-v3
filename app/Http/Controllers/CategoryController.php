<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
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
        return view('category', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('category')->with('success', 'Category created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editCategory = Category::findOrFail($id);
        $categories = Category::all();
        return view('category', compact('categories', 'editCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('category')->with('success', 'Category updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category')->with('success', 'Category deleted');
    }
}
