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
        Schema::create('motorcycle_rents', function (Blueprint $table) {
            $table->id();
            $table->string('motorcycle_name');
            $table->string('price');
            $table->string('motorcycle_image');
            $table->string('transmisi');
            $table->integer('engine_displacement');
            // cc
            $table->decimal('fuel_capacity');
            $table->string('type');
            $table->integer('popularity');
            // nanti ditambahkan fasilitas beda table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycle_rents');
    }
};
