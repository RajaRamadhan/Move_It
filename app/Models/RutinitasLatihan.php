<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutinitasLatihan extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'rutinitas_latihan';

    // Kolom-kolom yang bisa diisi (mass-assignable)
    protected $fillable = [
        'title',
        'description',
        'duration',
        'calories_burned',
    ];

    // Jika tidak menggunakan timestamps, uncomment baris berikut:
    // public $timestamps = false;

    // Jika kamu ingin mengatur format untuk atribut tertentu (misalnya duration), kamu bisa menambahkan accessor atau mutator di sini
}
