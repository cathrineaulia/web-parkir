<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index()
    {
        return view('locations.index', ['title' => 'Location', 'datas' => Location::all()]);
    }

    public function create()
    {
        return view('locations.create', ['title' => 'Location']);
    }
    public function store(Request $request)
    {
        $data = $request->only([
            'location_name', 'max_motorcycle', 'max_car', 'other'
        ]);
        Location::create($data);
        return redirect()->route('locations.index')->with('success', 'New Location created successfully.');
    }
}
