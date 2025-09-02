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
        Schema::create('crops', function (Blueprint $table) {
            $table->id();
            $table->string('name_si'); // භෝගයේ සිංහල නම
            $table->string('name_en'); // භෝගයේ ඉංග්‍රීසි නම
            $table->text('description_si')->nullable(); // විස්තරයක් (optional)
            $table->string('season'); // කන්නය (Maha, Yala, All Year)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crops');
    }
};
