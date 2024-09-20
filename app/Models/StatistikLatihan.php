<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatistikLatihan extends Model
{
    use HasFactory;
    protected $table = 'statistik_latihan';
    protected $fillable = [
        'user_id',
        'total_distance',
        'total_calories',
        'total_time',
        'avg_pace',
        'date',
    ];

public function user()
    {
        return $this->belongsTo(User::class);
    }
}