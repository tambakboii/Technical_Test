<?php

// app/Http/Controllers/VehicleController.php
namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create(){
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        Vehicle::create($request->all());
        return redirect()->route('vehicles.index');
    }

    public function destroy($id)
    {
        Vehicle::find($id)->delete();
        return redirect()->route('vehicles.index');
    }
}

// namespace App\Http\Controllers;

// use App\Models\Vehicle;
// use Illuminate\Http\Request;

// class VehicleController extends Controller
// {
//     public function index()
//     {
//         $vehicles = Vehicle::all();
//         return view('vehicles.index', compact('vehicles'));
//     }

//     public function create()
//     {
//         return view('vehicles.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'vehicle_type' => 'required|in:person,goods',
//             'license_plate' => 'required|string|max:255',
//             'status' => 'required|in:available,in_use,under_maintenance',
//         ]);

//         Vehicle::create([
//             'vehicle_type' => $request->vehicle_type,
//             'license_plate' => $request->license_plate,
//             'status' => $request->status,
//         ]);

//         return redirect()->route('vehicles.index');
//     }
// }

