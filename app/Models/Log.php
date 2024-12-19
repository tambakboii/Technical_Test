<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'Logs';  // Nama tabel
    protected $primaryKey = 'log_id';  // Primary key
    public $timestamps = false;  // Tidak menggunakan timestamp default

    protected $fillable = ['action', 'user_id', 'timestamp'];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Log extends Model
// {
//     use HasFactory;

//     // Nama tabel yang digunakan oleh model
//     protected $table = 'Logs'; 

//     // Menetapkan primary key jika bukan 'id'
//     protected $primaryKey = 'log_id'; 

//     // Menonaktifkan timestamp otomatis (jika tidak ada kolom created_at dan updated_at)
//     public $timestamps = true; // Karena ada kolom timestamp

//     // Kolom-kolom yang dapat diisi
//     protected $fillable = ['action', 'user_id'];

//     // Relasi dengan User
//     public function user()
//     {
//         return $this->belongsTo(User::class);
//     }
// }
