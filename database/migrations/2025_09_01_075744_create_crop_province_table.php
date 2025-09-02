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
        Schema::create('crop_province', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crop_id'); // crops table එකට සම්බන්ධ වෙනවා
            $table->unsignedBigInteger('province_id'); // provinces table එකට සම්බන්ධ වෙනවා
            $table->timestamps();

            // Foreign key constraints (මේකෙන් data consistency එක රැකෙනවා)
            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crop_province');
    }
};
