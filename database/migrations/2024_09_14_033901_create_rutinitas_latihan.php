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
        Schema::create('rutinitas_latihan', function (Blueprint $table) {
            $table->id('routine_id'); // Primary key, auto-incrementing
            $table->string('title', 255); // Name/type of workout, max length 255 characters
            $table->text('description'); // Short description of the workout routine
            $table->time('duration'); // Duration of the workout in HH:MM:SS format
            $table->float('calories_burned'); // Estimated calories burned during the workout
            $table->timestamps(); // created_at and updated_at timestamps
        });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutinitas_latihan');
    }
};
