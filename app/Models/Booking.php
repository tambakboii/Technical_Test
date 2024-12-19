<?php

// app/Models/Booking.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'Bookings';  // Nama tabel
    protected $primaryKey = 'booking_id';  // Primary key
    public $timestamps = false;  // Tidak menggunakan timestamp default

    protected $fillable = ['user_id', 'vehicle_id', 'driver_id', 'start_time', 'end_time', 'status'];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan Vehicle
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    // Relasi dengan Driver (User)
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}

