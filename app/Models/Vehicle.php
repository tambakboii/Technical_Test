<?php

// app/Models/Vehicle.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'Vehicles';  // Nama tabel
    protected $primaryKey = 'vehicle_id';  // Primary key
    public $timestamps = false;  // Tidak menggunakan timestamp default

    protected $fillable = ['vehicle_type', 'license_plate', 'status', 'fuel_consumption'];

    // Relasi dengan Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Vehicle extends Model
// {
//     use HasFactory;

//     protected $table = 'Vehicles';
//     protected $primaryKey = 'vehicle_id';
//     public $timestamps = false;

//     protected $fillable = [
//         'vehicle_type',
//         'license_plate',
//         'status',
//         'fuel_consumption'
//     ];
// }

