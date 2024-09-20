<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivitasLari extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'aktivitas_lari';

    // Kolom-kolom yang bisa diisi (mass-assignable)
    protected $fillable = [
        'user_id',
        'distance',
        'duration',
        'calories_burned',
        'pace',
        'time',
    ];

    // Jika tidak menggunakan timestamps, uncomment baris berikut:
    // public $timestamps = false;

    // Relasi ke model User (jika ada)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
