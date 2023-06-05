<?php

namespace App\Http\Controllers;

use App\Models\VillageProfile;
use Illuminate\Http\Request;

class VillageProfileController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        $village = VillageProfile::first();
        
        if ($village == null) {
            return view('admin.profile.create');
        } else {
            return view('admin.profile.edit', compact('village'));
        }
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'string|required',
            'address' => 'string|required',
            'province' => 'string|required',
            'city' => 'string|required',
            'subdistrict' => 'string|required',
            'postalcode' => 'string|required',
            'phone' => 'string|required',
            'email' => 'email|required',
            'fax' => 'string|required',
            'location_url' => 'string|required',
            'description' => 'string|required',
            'ig' => 'string|sometimes',
            'fb' => 'string|sometimes',
            'yt' => 'string|sometimes',
        ]);

        $profile = VillageProfile::create([
            'description' => ''
        ]);

        $profile->description = $data;
        $profile->save();

        return redirect()->route('dashboard');
    }

    public function update(Request $request, VillageProfile $profile)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'address' => 'string|required',
            'province' => 'string|required',
            'city' => 'string|required',
            'subdistrict' => 'string|required',
            'postalcode' => 'string|required',
            'phone' => 'string|required',
            'email' => 'email|required',
            'fax' => 'string|required',
            'location_url' => 'string|required',
            'description' => 'string|required',
            'ig' => 'string|sometimes',
            'fb' => 'string|sometimes',
            'yt' => 'string|sometimes',
        ]);

        $profile->description = $data;
        $profile->save();

        return redirect()->route('dashboard');
    }
}
