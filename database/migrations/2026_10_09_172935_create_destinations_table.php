<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name');                   // Nama Destinasi (Contoh: Gunung Bromo)
            $table->string('slug')->unique();         // URL Slug
            $table->string('location')->default('Pronojiwo, Lumajang'); // Lokasi
            $table->text('description')->nullable();  // Deskripsi singkat
            $table->string('image_url')->nullable();  // Foto destinasi
            $table->boolean('is_featured')->default(true); // Tampil di Home/Featured
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};