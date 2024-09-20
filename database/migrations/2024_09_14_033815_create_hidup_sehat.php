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
        Schema::create('hidup_sehat', function (Blueprint $table) {
            $table->id('tip_id'); // Primary key, auto-incrementing
            $table->string('title', 255); // Title with max length 255 characters
            $table->text('content'); // Content of the tip
            $table->string('category', 100); // Category (e.g., diet, exercise)
            $table->timestamps(); // created_at and updated_at timestamps
        });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hidup_sehat');
    }
};
