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
      
        Schema::create('aktivitas_lari', function (Blueprint $table) {
            $table->id('aktivitas_id'); // Primary key for the activity
            $table->foreignId('user_id')->constrained('users'); // Reference to users table
            $table->float('distance'); // Distance covered (e.g., in kilometers)
            $table->time('duration'); // Duration of the run (e.g., in HH:MM:SS)
            $table->integer('calories_burned'); // Calories burned during the run
            $table->float('pace'); // Average pace (e.g., in minutes per kilometer)
            $table->timestamp('time'); // Date and time of the activity
            $table->timestamps(); // Laravel's created_at and updated_at timestamps
        });
        
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas_lari');
    }
};
