<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Nama paket
            $table->string('slug')->unique(); // Slug untuk URL detail
            $table->text('description')->nullable(); // Deskripsi singkat
            $table->string('image_url')->nullable(); // URL foto paket
            $table->string('duration'); // Durasi (misal: 1 Hari / 2H 1M)
            $table->string('capacity'); // Kapasitas (misal: Max 5 Orang / Jeep)
            $table->text('destinations_included'); // Destinasi yang dikunjungi
            $table->decimal('price', 12, 2); // Price list harga
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};