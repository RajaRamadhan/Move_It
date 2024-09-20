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
        Schema::create('rekomendasi_nutrisi', function (Blueprint $table) {
            $table->id('recommendation_id'); // Primary key, auto-incrementing
            $table->foreignId('activity_id')->constrained('aktivitas_lari'); // Foreign key to the running activity table
            $table->string('food_name', 255); // Name of the recommended food, max length 255 characters
            $table->float('calories'); // Calories in the food
            $table->float('protein'); // Protein content in grams
            $table->float('carbs'); // Carbohydrate content in grams
            $table->float('fat'); // Fat content in grams
            $table->timestamps(); // created_at and updated_at timestamps
        });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekomendasi_nutrisi');
    }
};
