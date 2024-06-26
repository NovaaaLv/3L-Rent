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
        Schema::create('car_rents', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->bigInteger('price');
            $table->string('car_image');
            $table->integer('seat');
            $table->string('transmisi');
            $table->string('fuel');
            $table->string('insurance');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_rents');
    }
};
