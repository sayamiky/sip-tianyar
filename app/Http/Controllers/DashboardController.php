<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Destination;
use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $blog = Blog::all()->count();
        $destination = Destination::all()->count();
        $event = Event::all()->count();

        return view('dashboard', compact('blog', 'destination', 'event'));
    }
}
