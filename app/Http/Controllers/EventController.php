<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'date' => 'string|required',
            'description' => 'string|required',
            'locations' => 'string|required',
            'location_url' => 'string|required',
            'image' => 'mimetypes:image/jpg,image/png,image/jpeg|required|max:5000'
        ]);

        Event::create(array_merge($data, [
            'image' => Storage::disk('local')->putFile('event', $request['image']),
            'date' => date('Y-m-d', strtotime($request->date))
        ]));

        return redirect()->route('events.index')->with('success', 'Data save successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'date' => 'string|required',
            'description' => 'string|required',
            'locations' => 'string|required',
            'location_url' => 'string|required',
            'image' => 'mimetypes:image/jpg,image/png,image/jpeg|sometimes|max:5000',
        ]);

        tap($event)->update(array_merge($data, [
            'image' => $request->image != null ? Storage::disk('local')->putFile('event', $request['image']) : $event->image,
            'date' => date('Y-m-d', strtotime($request->date))
        ]));

        return redirect()->route('events.index')->with('success', 'Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Data delete successfully');
    }
}
