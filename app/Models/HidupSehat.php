<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HidupSehat extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'hidup_sehat';

    // Kolom-kolom yang bisa diisi (mass-assignable)
    protected $fillable = [
        'title',
        'description',
        'type', // Contoh kolom jika ada
        'created_at',
        'updated_at',
    ];

    // Jika tidak menggunakan timestamps, uncomment baris berikut:
    // public $timestamps = false;

    // Kamu bisa menambahkan accessor atau mutator di sini jika diperlukan
}
