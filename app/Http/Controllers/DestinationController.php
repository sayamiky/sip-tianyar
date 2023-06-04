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
            'images' => 'mimetypes:image/jpg,image/png,image/jpeg|required|max:5000'
            // 'images' => ['array', 'min:1', 'required'],
            // 'images.*' => ['mimetypes:image/jpg,image/png,image/jpeg|required|max:5000']
        ]);

        $destination = Destination::create($data);

        // foreach ($request->file('images') as $image) {
        $path = Storage::disk('local')->putFile('destination', $request['images']);
        $destination->image()->create([
            'destination_id' => $destination->id,
            'image' => $path
        ]);
        // }

        return redirect()->route('destinations.index')->with('success', 'Data save successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Destination $destination)
    {
        return view('admin.destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'locations' => 'string|required',
            'location_url' => 'string|required',
            'images' => 'mimetypes:image/jpg,image/png,image/jpeg|sometimes|max:5000'
        ]);

        tap($destination)->update($data);

        // foreach ($request->file('images') as $image) {
        if ($request->image != null) {
            $path = Storage::disk('local')->putFile('destination', $request['images']);
            $destination->image()->create([
                'destination_id' => $destination->id,
                'image' => $path
            ]);
        }

        // }

        return redirect()->route('destinations.index')->with('success', 'Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->image()->delete();
        $destination->delete();
        return redirect()->route('destinations.index')->with('success', 'Data delete successfully');
    }
}
