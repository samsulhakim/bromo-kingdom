<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        Destination::create([
            'name' => 'Mount Bromo Sunrise',
            'slug' => 'mount-bromo-sunrise',
            'location' => 'Kawasan TNBTS, Jatim',
            'description' => 'Menyaksikan keindahan matahari terbit legendaris dari puncak penanjakan dengan latar megah Semeru.',
            'image_url' => 'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=800&auto=format&fit=crop',
            'is_featured' => true,
        ]);

        Destination::create([
            'name' => 'Air Terjun Tumpak Sewu',
            'slug' => 'tumpak-sewu-waterfall',
            'location' => 'Pronojiwo, Lumajang',
            'description' => 'Niagara-nya Indonesia dengan panorama air terjun megah berbentuk tirai raksasa di kaki Gunung Semeru.',
            'image_url' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=800&auto=format&fit=crop',
            'is_featured' => true,
        ]);

        Destination::create([
            'name' => 'Ranu Kumbolo Semeru',
            'slug' => 'ranu-kumbolo-semeru',
            'location' => 'Taman Nasional Semeru',
            'description' => 'Danau air tawar jernih surga para pendaki sebelum menaklukkan puncak Mahameru.',
            'image_url' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?q=80&w=800&auto=format&fit=crop',
            'is_featured' => true,
        ]);
    }
}