<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $destination->name }} - Bromo Kingdom</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'kingdom-orange': '#F99E16',
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-950 text-white antialiased">

    <!-- Navbar Sederhana / Konsisten -->
    <header class="bg-gray-900 border-b border-gray-800 py-4 sticky top-0 z-50">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <div class="bg-kingdom-orange text-gray-950 p-2 rounded-xl font-black text-lg">BK</div>
                <div>
                    <span class="block text-lg font-black tracking-wider text-white leading-none">BROMO KINGDOM</span>
                    <span class="block text-[10px] text-gray-400 tracking-wider">BY TAXI GUNUNG SEMERU</span>
                </div>
            </a>
            <a href="{{ url('/') }}" class="text-sm font-semibold text-gray-300 hover:text-kingdom-orange transition">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </header>

    <!-- Konten Utama Detail Destinasi -->
    <main class="py-16">
        <div class="container mx-auto px-6 max-w-5xl">
            
            <!-- Breadcrumb / Lokasi -->
            <div class="mb-4">
                <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full">
                    {{ $destination->location }}
                </span>
            </div>

            <!-- Judul Destinasi -->
            <h1 class="text-4xl lg:text-5xl font-black mb-6 text-white">{{ $destination->name }}</h1>

            <!-- Gambar Utama -->
            <div class="rounded-3xl overflow-hidden shadow-2xl mb-10 border border-gray-800">
                <img src="{{ $destination->image_url }}" alt="{{ $destination->name }}" class="w-full h-[450px] object-cover">
            </div>

            <!-- Grid Layout Informasi & Tombol Booking -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                
                <!-- Kolom Kiri: Deskripsi Lengkap -->
                <div class="lg:col-span-2 space-y-6 text-gray-300 leading-relaxed text-base">
                    <h3 class="text-2xl font-bold text-white">Tentang Destinasi Ini</h3>
                    <p>{{ $destination->description }}</p>
                    <p>
                        Eksplorasi keindahan alam Pronojiwo, Bromo, dan Semeru bersama armada Jeep tangguh dan pemandu lokal berpengalaman kami. Dapatkan pengalaman perjalanan yang aman, nyaman, dan penuh momen tak terlupakan.
                    </p>
                    
                    <div class="bg-gray-900 border border-gray-800 p-6 rounded-2xl space-y-3 mt-6">
                        <h4 class="text-lg font-bold text-white">Fasilitas Termasuk:</h4>
                        <ul class="list-disc list-inside space-y-2 text-sm text-gray-300">
                            <li>Sewa Jeep 4x4 Berkualitas & Berpengalaman</li>
                            <li>Driver Lokal Sekaligus Guide Profesional</li>
                            <li>BBM, Parkir, dan Tiket Masuk Kawasan Wisata</li>
                            <li>Spot Foto Terbaik & Dokumentasi Perjalanan</li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom Kanan: Card Aksi / Booking -->
                <div class="bg-gray-900 border border-gray-800 p-8 rounded-3xl h-fit space-y-6 shadow-xl">
                    <div>
                        <span class="text-xs text-gray-400 block">Tertarik Berkunjung?</span>
                        <h4 class="text-xl font-bold text-white mt-1">Book Trip Sekarang</h4>
                    </div>
                    <p class="text-xs text-gray-400">Atur jadwal keberangkatan dan konsultasikan rencana perjalanan kamu langsung dengan tim kami via WhatsApp.</p>
                    
                    <a href="https://wa.me/628xxxxxxxxxx?text=Halo%20Bromo%20Kingdom,%20saya%20mau%20booking%20trip%20ke%20destinasi%20{{ urlencode($destination->name) }}" target="_blank" class="w-full block bg-kingdom-orange hover:bg-[#e08f14] text-gray-950 font-bold py-3.5 rounded-full text-center transition shadow-lg">
                        Chat WhatsApp Admin
                    </a>
                </div>

            </div>

            <!-- Destinasi Lainnya (Rekomendasi) -->
            <div class="mt-24 border-t border-gray-900 pt-16">
                <h3 class="text-2xl font-bold mb-8 text-white">Destinasi Menarik Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedDestinations as $item)
                    <a href="{{ route('destination.show', $item->slug) }}" class="group bg-gray-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-kingdom-orange transition">
                        <img src="{{ $item->image_url }}" alt="{{ $item->name }}" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                        <div class="p-5">
                            <span class="text-[10px] font-bold text-kingdom-orange uppercase">{{ $item->location }}</span>
                            <h4 class="text-lg font-bold text-white mt-1">{{ $item->name }}</h4>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-500 py-8 border-t border-gray-800 text-xs text-center">
        <p>&copy; 2026 Bromo Kingdom (taxigunung.com). All rights reserved.</p>
    </footer>

</body>
</html>