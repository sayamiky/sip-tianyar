<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'locations' => 'string|required',
            'location_url' => 'string|required',
            'image' => 'mimetypes:image/jpg,image/png,image/jpeg|required|max:5000',
        ]);

        Destination::create(array_merge($data, [
            'image' => Storage::disk('local')->putFile('destination', $request['image']),
        ]));

        return redirect()->route('destinations.index')->with('success', 'Data save successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Destination $blog)
    {
        return view('admin.destination.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
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

        tap($destination)->update(array_merge($data, [
            'image' => $request->image != null ? Storage::disk('local')->putFile('article', $request['image']) : $destination->image
        ]));

        return redirect()->route('blogs.index')->with('success', 'Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('blogs.index')->with('success', 'Data delete successfully');
    }
}
