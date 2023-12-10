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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained()->cascadeOnDelete();

            $table->double('temp')->nullable();
            $table->double('hum')->nullable();
            $table->double('co')->nullable();
            $table->double('so2')->nullable();
            $table->double('no2')->nullable();
            $table->double('pm01')->nullable();
            $table->double('pm25')->nullable();
            $table->double('pm10')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
