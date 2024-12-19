<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'Users';  // Nama tabel
    protected $primaryKey = 'user_id';  // Primary key
    public $timestamps = false;  // Tidak menggunakan timestamp default

    protected $fillable = ['username', 'password', 'role', 'name'];

    // Relasi dengan Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Relasi dengan Approval
    public function approvals()
    {
        return $this->hasMany(Approval::class);
    }
}

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// class User extends Authenticatable
// {
//     use HasFactory;

//     // Nama tabel yang digunakan oleh model
//     protected $table = 'Users'; 

//     // Menetapkan primary key jika bukan 'id'
//     protected $primaryKey = 'user_id'; 

//     // Menonaktifkan timestamp otomatis (jika tidak ada kolom created_at dan updated_at)
//     public $timestamps = false; 

//     // Kolom-kolom yang dapat diisi
//     protected $fillable = ['username', 'password', 'role', 'name'];

//     // Relasi dengan Booking
//     public function bookings()
//     {
//         return $this->hasMany(Booking::class);
//     }

//     // Relasi dengan Approval
//     public function approvals()
//     {
//         return $this->hasMany(Approval::class);
//     }
// }


// class User extends Authenticatable
// {
//     protected $table = 'Users';  // Nama tabel
//     protected $primaryKey = 'user_id';  // Primary key jika tidak menggunakan `id` default
//     public $timestamps = false;  // Jika tidak menggunakan timestamps default `created_at` dan `updated_at`

//     protected $fillable = ['username', 'password', 'role', 'name'];
    
//     // Menambahkan konstanta untuk ENUM 'role'
//     const ROLE_ADMIN = 'admin';
//     const ROLE_APPROVER = 'approver';
//     /** @use HasFactory<\Database\Factories\UserFactory> */
//     use HasFactory, Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var list<string>
//      */
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var list<string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * Get the attributes that should be cast.
//      *
//      * @return array<string, string>
//      */
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
//         ];
//     }
// }
