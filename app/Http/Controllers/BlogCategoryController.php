<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_data = BlogCategory::all();
        return view('admin.blogCategory.index', compact('category_data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_name' => 'required|string|max:255'
        ]);

        $category_data = BlogCategory::create($data);
        return redirect()->route('blog-categories.index')->with('success', 'Data save successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(BlogCategory $blog_category)
    {
        return view('admin.blogCategory.edit', ['category_data' => $blog_category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogCategory $blog_category)
    {
        $data = $request->validate([
            'category_name' => 'sometimes|string|max:255'
        ]);

        tap($blog_category)->update($data);
        return redirect()->route('blog-categories.index')->with('success', 'Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogCategory $blog_category)
    {
        $blog_category->delete();
        return redirect()->route('blog-categories.index')->with('success', 'Data delete successfully');
    }
}
