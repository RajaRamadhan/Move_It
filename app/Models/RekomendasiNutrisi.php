<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiNutrisi extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'rekomendasi_nutrisi';

    // Kolom-kolom yang bisa diisi (mass-assignable)
    protected $fillable = [
        'activity_id',
        'food_name',
        'calories',
        'protein',
        'carbs',
        'fat',
        'created_at',
    ];

    // Jika tidak menggunakan timestamps, uncomment baris berikut:
    // public $timestamps = false;

    // Relasi ke model AktivitasLari (jika ada)
    public function aktivitasLari()
    {
        return $this->belongsTo(AktivitasLari::class, 'activity_id');
    }
}
