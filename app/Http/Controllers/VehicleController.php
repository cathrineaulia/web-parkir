<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return view('vehicle.index', ['title' => 'Vehicle Type', 'datas' => VehicleType::all()]);
    }
    
    public function create()
    {
        return view('vehicle.create', ['title' => 'Vehicle Type']);
    }
    public function store(Request $request)
    {
        $data = $request->only([
            'jenis', 'perjam_pertama', 'perjam_berikutnya', 'max_perhari'
        ]);
        VehicleType::create($data);
        return redirect()->route('vehicle.index')->with('success', 'New Vehicle created successfully.');
    }
}
