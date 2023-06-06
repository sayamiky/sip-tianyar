<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('web.blog',compact('blogs'));
    }
    public function show(Blog $article)
    {
        $articles = Blog::take(4)->get();
        return view('web.blogdetail', compact('article','articles'));
    }
}
