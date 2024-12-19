<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Kirim data yang dibutuhkan (jika ada) ke view dashboard
        return view('dashboard.index');
    }
}
