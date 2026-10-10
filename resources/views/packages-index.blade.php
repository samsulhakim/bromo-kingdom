<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata - Bromo Kingdom</title>
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

    <!-- Header / Navbar -->
    <header class="bg-gray-900 border-b border-gray-800 py-4 sticky top-0 z-50">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <div class="bg-kingdom-orange text-gray-950 p-2.5 rounded-xl font-black text-lg">BK</div>
                <div>
                    <span class="block text-lg font-black tracking-wider text-white leading-none">BROMO KINGDOM</span>
                    <span class="block text-[10px] text-gray-400 tracking-wider">BY TAXI GUNUNG SEMERU</span>
                </div>
            </a>

            <!-- Navigasi -->
            <nav class="hidden xl:flex items-center space-x-7 text-sm font-medium text-gray-300">
                <a href="{{ url('/') }}" class="hover:text-kingdom-orange transition">Home</a>
                <a href="{{ route('destinations.index') }}" class="hover:text-kingdom-orange transition">Destinasi</a>
                <a href="{{ route('packages.index') }}" class="text-kingdom-orange font-bold transition">Paket Wisata</a>
                <a href="{{ url('/#galeri') }}" class="hover:text-kingdom-orange transition">Galeri</a>
                <a href="{{ url('/#tentang') }}" class="hover:text-kingdom-orange transition">Tentang Kami</a>
                <a href="{{ url('/#faq') }}" class="hover:text-kingdom-orange transition">FAQ</a>
                <a href="{{ url('/#kontak') }}" class="hover:text-kingdom-orange transition">Contact</a>
            </nav>

            <a href="{{ url('/') }}" class="text-sm font-semibold text-gray-300 hover:text-kingdom-orange transition">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </header>

    <!-- Konten Daftar Paket Wisata -->
    <main class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full">Eksplorasi Terbaik</span>
                <h1 class="text-4xl lg:text-5xl font-black mt-3 mb-4 text-white">Pilihan Paket Wisata Unggulan</h1>
                <p class="text-gray-400 text-sm lg:text-base">Nikmati perjalanan seru menjelajahi panorama Bromo, Semeru, dan Tumpak Sewu bersama armada Jeep 4x4 tangguh dan pemandu lokal profesional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($packages as $pkg)
                <div class="bg-gray-900 rounded-3xl shadow-2xl overflow-hidden border border-gray-800 flex flex-col justify-between">
                    <div>
                        <!-- 1. Foto Paket -->
                        <img src="{{ $pkg->image_url ?? 'https://images.unsplash.com/photo-1609137144813-7d996144673d?q=80&w=800&auto=format&fit=crop' }}" alt="{{ $pkg->title }}" class="w-full h-60 object-cover">
                        
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <!-- 3. Durasi -->
                                <span class="text-xs font-bold text-kingdom-orange bg-kingdom-orange/10 px-3 py-1 rounded-full uppercase tracking-wider">{{ $pkg->duration ?? '1 Hari' }}</span>
                                
                                <!-- 4. Kapasitas -->
                                <span class="text-xs text-gray-400 flex items-center space-x-1">
                                    <svg class="w-4 h-4 text-kingdom-orange mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    <span>{{ $pkg->capacity ?? 'Max 5 Orang / Jeep' }}</span>
                                </span>
                            </div>

                            <!-- 2. Nama Paket -->
                            <h3 class="text-2xl font-black text-white">{{ $pkg->title }}</h3>
                            
                            <p class="text-gray-300 text-xs line-clamp-2">{{ $pkg->description ?? 'Paket tour eksklusif dengan fasilitas lengkap.' }}</p>

                            <!-- 5. Destinasi yang Dikunjungi -->
                            <div class="bg-gray-950 p-4 rounded-2xl border border-gray-800/80">
                                <span class="block text-[10px] font-bold text-kingdom-orange uppercase tracking-wider mb-1">Destinasi Dikunjungi:</span>
                                <p class="text-xs text-gray-300 font-medium">{{ $pkg->destinations_included ?? 'Sunrise Bromo, Kawah Bromo, Pasir Berbisik, Savana Teletubbies' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 pt-0 mt-auto">
                        <!-- 6. Price List Harga -->
                        <div class="flex items-center justify-between mb-4 pt-4 border-t border-gray-800">
                            <div>
                                <span class="text-[10px] text-gray-400 uppercase tracking-wider block">Harga Paket</span>
                                <span class="text-2xl font-black text-kingdom-orange">Rp {{ number_format($pkg->price, 0, ',', '.') }}</span>
                            </div>
                            <span class="text-[10px] text-gray-400 bg-gray-800 px-2.5 py-1 rounded-lg">All In Jeep</span>
                        </div>

                        <!-- 7. CTA: Detail Paket & Booking Sekarang -->
                        <div class="grid grid-cols-2 gap-3">
                            <a href="{{ route('packages.show', $pkg->id) }}" class="inline-flex items-center justify-center bg-gray-800 hover:bg-gray-700 text-white font-bold py-3 px-3 rounded-xl text-xs transition duration-300 text-center">
                                Detail Paket
                            </a>
                            <a href="https://wa.me/6282232295646?text=Halo%20Bromo%20Kingdom,%20saya%20tertarik%20booking%20paket%20{{ urlencode($pkg->title) }}" target="_blank" class="inline-flex items-center justify-center bg-kingdom-orange hover:bg-[#e08f14] text-gray-950 font-extrabold py-3 px-3 rounded-xl text-xs transition duration-300 text-center shadow-lg">
                                Booking WA
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-span-3 text-center p-12 bg-gray-900 rounded-3xl border border-gray-800">
                        <h4 class="text-lg font-bold text-white">Belum ada paket wisata tersedia</h4>
                        <p class="text-gray-400 text-sm mt-1">Silakan hubungi admin via WhatsApp untuk custom itinerary.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-500 py-8 border-t border-gray-800 text-xs text-center">
        <p>&copy; 2026 Bromo Kingdom (taxigunung.com). All rights reserved.</p>
    </footer>

</body>
</html>