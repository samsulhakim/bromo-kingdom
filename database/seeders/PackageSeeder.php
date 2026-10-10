<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;
use Illuminate\Support\Facades\Schema;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        // Matikan foreign key constraint sementara agar bisa truncate
        Schema::disableForeignKeyConstraints();
        
        Package::truncate();

        // Hidupkan kembali foreign key constraint
        Schema::enableForeignKeyConstraints();

        Package::create([
            'title' => 'Bromo Midnight & Sunrise Tour',
            'slug' => 'bromo-midnight-sunrise-tour',
            'description' => 'Saksikan keemasan matahari terbit legendaris dari puncak penanjakan Bromo dengan latar megah Semeru menggunakan Jeep 4x4 tangguh.',
            'image_url' => 'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=800&auto=format&fit=crop',
            'duration' => '1 Hari (Midnight)',
            'capacity' => 'Max 5 Orang / Jeep',
            'destinations_included' => 'Sunrise Penanjakan, Kawah Bromo, Pura Luhur Poten, Pasir Berbisik, Savana Teletubbies',
            'price' => 750000,
        ]);

        Package::create([
            'title' => 'Tumpak Sewu Waterfall Adventure',
            'slug' => 'tumpak-sewu-waterfall-adventure',
            'description' => 'Jelajahi keindahan air terjun terindah di Indonesia berjuluk Niagara of Indonesia langsung dari basecamp Pronojiwo, Lumajang.',
            'image_url' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=800&auto=format&fit=crop',
            'duration' => '1 Hari (Full Day)',
            'capacity' => 'Max 5 Orang',
            'destinations_included' => 'Panorama Tumpak Sewu, Goa Tetes, Tebing Nirwana',
            'price' => 500000,
        ]);

        Package::create([
            'title' => 'Bromo & Semeru Overland Experience',
            'slug' => 'bromo-semeru-overland-experience',
            'description' => 'Paket petualangan paling lengkap melintasi kaldera Bromo, Ranu Kumbolo, hingga eksplorasi alam liar Semeru bersama *Taxi Gunung*.',
            'image_url' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?q=80&w=800&auto=format&fit=crop',
            'duration' => '2 Hari 1 Malam',
            'capacity' => 'Max 4 Orang / Jeep',
            'destinations_included' => 'Sunrise Bromo, Kawah Bromo, Ranu Kumbolo, Coban Sriti, Pronojiwo Basecamp',
            'price' => 2250000,
        ]);
    }
}