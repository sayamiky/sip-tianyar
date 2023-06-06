<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('web.event',compact('events'));
    }
    public function show(Event $tradition)
    {
        $traditions = Event::take(4)->get();
        return view('web.eventdetail', compact('tradition','traditions'));
    }
}
