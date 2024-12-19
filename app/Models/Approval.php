<?php

// app/Models/Approval.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $table = 'Approvals';  // Nama tabel
    protected $primaryKey = 'approval_id';  // Primary key
    public $timestamps = false;  // Tidak menggunakan timestamp default

    protected $fillable = ['booking_id', 'approver_id', 'status', 'comment'];

    // Relasi dengan Booking
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    // Relasi dengan Approver (User)
    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id');
    }
}
// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Approval extends Model
// {
//     use HasFactory;

//     // Nama tabel yang digunakan oleh model
//     protected $table = 'Approvals'; 

//     // Menetapkan primary key jika bukan 'id'
//     protected $primaryKey = 'approval_id'; 

//     // Menonaktifkan timestamp otomatis (jika tidak ada kolom created_at dan updated_at)
//     public $timestamps = true; // Karena ada kolom created_at

//     // Kolom-kolom yang dapat diisi
//     protected $fillable = ['booking_id', 'approver_id', 'status', 'comment'];

//     // Relasi dengan Booking
//     public function booking()
//     {
//         return $this->belongsTo(Booking::class);
//     }

//     // Relasi dengan User (Approver)
//     public function approver()
//     {
//         return $this->belongsTo(User::class, 'approver_id');
//     }
// }
