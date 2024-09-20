<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statistik_latihan', function (Blueprint $table) {
            $table->id('statistic_id'); // Primary key, auto-incrementing
            $table->foreignId('user_id')->constrained('users'); // Foreign key to the users table
            $table->float('total_distance'); // Total distance covered in kilometers
            $table->float('total_calories'); // Total calories burned
            $table->time('total_time'); // Total time spent on activity in HH:MM:SS format
            $table->float('avg_pace'); // Average pace in kilometers per hour
            $table->date('date'); // Date when the statistics were calculated
            $table->timestamps(); // created_at and updated_at timestamps
        });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistik_latihan');
    }
};
