<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = Blog::create(array_merge($request->validated(), [
            'image' => Storage::disk('local')->putFile('article', $request['image']),
        ]));
        return redirect('blogs.index')->with('success', 'Data save successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.editBlog', ['blogs' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        tap($blog)->update(array_merge($request->validated(), [
            'image' => $request->image != null ? Storage::disk('local')->putFile('article', $request['image']) : $blog->image
        ]));

        return redirect('blogs.index')->with('success', 'Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('blogs.index')->with('success', 'Data delete successfully');
    }
}
