<?php

// app/Http/Controllers/BookingController.php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // public function index()
    // {
    //     $bookings = Booking::all();
    //     return view('bookings.index', compact('bookings'));
    // }

    public function index()
    {
        // Menggunakan eager loading untuk memuat user, vehicle, dan driver
        $bookings = Booking::with(['user', 'vehicle', 'driver'])->get();
        
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect()->route('bookings.index');
    }

    public function destroy($id)
    {
        Booking::find($id)->delete();
        return redirect()->route('bookings.index');
    }
}

// namespace App\Http\Controllers;

// use App\Models\Booking;
// use Illuminate\Http\Request;

// class BookingController extends Controller
// {
//     public function index()
//     {
//         $bookings = Booking::all();
//         return view('bookings.index', compact('bookings'));
//     }

//     public function create()
//     {
//         return view('bookings.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'user_id' => 'required|exists:Users,user_id',
//             'vehicle_id' => 'required|exists:Vehicles,vehicle_id',
//             'driver_id' => 'required|exists:Users,user_id',
//             'start_time' => 'required|date',
//             'end_time' => 'required|date',
//             'status' => 'required|in:pending,approved,rejected',
//         ]);

//         Booking::create([
//             'user_id' => $request->user_id,
//             'vehicle_id' => $request->vehicle_id,
//             'driver_id' => $request->driver_id,
//             'start_time' => $request->start_time,
//             'end_time' => $request->end_time,
//             'status' => $request->status,
//         ]);

//         return redirect()->route('bookings.index');
//     }
// }

