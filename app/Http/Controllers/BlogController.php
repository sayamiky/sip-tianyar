<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where('status', 1)->get();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'string|required',
            'blog_category_id' => 'required|numeric',
            'description' => 'string|required',
            'locations' => 'string|required',
            'location_url' => 'string|required',
            'image' => 'mimetypes:image/jpg,image/png,image/jpeg|required|max:5000',
            'status' => 'numeric|required'
        ]);

        Blog::create(array_merge($data, [
            'image' => Storage::disk('local')->putFile('article', $request['image']),
        ]));

        return redirect()->route('blogs.index')->with('success', 'Data save successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Blog $blog)
    {
        $categories = BlogCategory::all();
        return view('admin.blog.edit', compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'blog_category_id' => 'required|numeric',
            'description' => 'string|required',
            'locations' => 'string|required',
            'location_url' => 'string|required',
            'image' => 'mimetypes:image/jpg,image/png,image/jpeg|sometimes|max:5000',
            'status' => 'numeric|required'
        ]);

        tap($blog)->update(array_merge($data, [
            'image' => $request->image != null ? Storage::disk('local')->putFile('article', $request['image']) : $blog->image
        ]));

        return redirect()->route('blogs.index')->with('success', 'Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Data delete successfully');
    }
}
