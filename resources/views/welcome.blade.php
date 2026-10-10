<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bromo Kingdom - Jelajahi Java, Temukan Hal yang Luar Biasa</title>
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
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-bg {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.85)), url('https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1920&auto=format&fit=crop');
        }
    </style>
</head>
<body class="bg-gray-950 text-white antialiased selection:bg-kingdom-orange selection:text-gray-950">

    <!-- Header / Navbar -->
    <header class="absolute top-0 left-0 w-full z-50 py-5 lg:py-6">
        <div class="container mx-auto px-6 flex items-center justify-between">
            
            <!-- Logo & Brand Kiri -->
            <div class="flex items-center space-x-3">
                <div class="bg-kingdom-orange text-gray-950 p-2.5 rounded-xl flex items-center justify-center shadow-lg font-black text-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h10a4 4 0 004-4M7 9l5-5 5 5M12 4v12"/></svg>
                </div>
                <div>
                    <span class="block text-lg lg:text-xl font-black tracking-wider text-white leading-none">BROMO KINGDOM</span>
                    <span class="block text-[10px] lg:text-xs text-gray-300 font-medium tracking-wider mt-1" data-translate="brand_sub">BY TAXI GUNUNG SEMERU</span>
                </div>
            </div>

            <nav class="hidden xl:flex items-center space-x-7 text-sm font-medium text-gray-200">
                <!-- 👇 LINK NAVBAR HOME DI SINI, CUK! 👇 -->
                <a href="{{ url('/') }}" class="hover:text-kingdom-orange transition" data-translate="nav_home">Home</a>
                
                <a href="{{ route('destinations.index') }}" class="hover:text-kingdom-orange transition" data-translate="nav_dest">Destinasi</a>
                <a href="{{ route('packages.index') }}" class="hover:text-kingdom-orange transition" data-translate="nav_pkg">Paket Wisata</a>
                <a href="{{ url('/#galeri') }}" class="hover:text-kingdom-orange transition" data-translate="nav_gal">Galeri</a>
                <a href="{{ url('/#tentang') }}" class="hover:text-kingdom-orange transition" data-translate="nav_about">Tentang Kami</a>
                <a href="{{ url('/#faq') }}" class="hover:text-kingdom-orange transition" data-translate="nav_faq">FAQ</a>
                <a href="{{ url('/#kontak') }}" class="hover:text-kingdom-orange transition" data-translate="nav_contact">Contact</a>
            </nav>

            <!-- Tombol Kanan (Bahasa & Booking) -->
            <div class="flex items-center space-x-4">
                <!-- Tombol Pilihan Bahasa ID | EN Interaktif -->
                <div class="hidden sm:flex items-center bg-gray-900/80 rounded-full p-1 text-xs font-bold border border-gray-700/60 shadow-inner">
                    <button id="btn-id" onclick="changeLang('id')" class="bg-kingdom-orange text-gray-950 px-3 py-1 rounded-full shadow transition">ID</button>
                    <button id="btn-en" onclick="changeLang('en')" class="text-gray-400 hover:text-white px-3 py-1 transition">EN</button>
                </div>
                <!-- Tombol Booking -->
                <a href="#packages" class="bg-kingdom-orange hover:bg-[#e08f14] text-gray-950 text-xs lg:text-sm font-extrabold px-5 lg:px-7 py-2.5 lg:py-3 rounded-full transition shadow-lg tracking-wide" data-translate="nav_booking">
                    BOOKING SEKARANG
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section Utama -->
    <section class="hero-bg relative min-h-screen flex flex-col justify-center bg-cover bg-center pt-36 lg:pt-40 pb-20">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl">
                <!-- Label Lokasi -->
                <p class="text-kingdom-orange text-xs lg:text-sm font-semibold tracking-widest uppercase mb-4 drop-shadow" data-translate="hero_loc">
                    PRONOJIWO, LUMAJANG — JAWA TIMUR
                </p>
                
                <!-- Judul Utama -->
                <h2 class="text-4xl sm:text-6xl lg:text-7xl font-black leading-[1.1] tracking-tight mb-6 text-white drop-shadow-md" data-translate="hero_title">
                    Jelajahi Java,Temukan <br class="hidden sm:block">Hal yang Luar Biasa
                </h2>
                
                <!-- Deskripsi -->
                <p class="text-base sm:text-lg text-gray-200 font-light mb-10 max-w-2xl leading-relaxed drop-shadow" data-translate="hero_desc">
                    Temukan keindahan alam, budaya, dan petualangan di setiap sudut Pulau Jawa. Kami siap menemani perjalananmu menciptakan cerita yang tak terlupakan.
                </p>

                <!-- Tombol Aksi & Sosial Media -->
                <div class="flex flex-col xl:flex-row xl:items-center xl:space-x-6 space-y-4 xl:space-y-0">
                    
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#packages" class="bg-kingdom-orange hover:bg-[#e08f14] text-gray-950 text-sm lg:text-base font-bold px-8 py-4 rounded-full transition shadow-xl text-center tracking-wide" data-translate="btn_pkg">
                            LIHAT PAKET WISATA
                        </a>
                        <a href="https://wa.me/628xxxxxxxxxx?text=Halo%20Bromo%20Kingdom,%20saya%20mau%20konsultasi%20trip." target="_blank" class="bg-gray-900/70 hover:bg-gray-900/90 border border-gray-600/80 text-white font-semibold px-8 py-4 rounded-full transition text-sm lg:text-base text-center backdrop-blur-md" data-translate="btn_consult">
                            KONSULTASI TRIP GRATIS
                        </a>
                    </div>

                    <!-- Sosial Media -->
                    <div class="flex flex-wrap items-center gap-3 pt-2 xl:pt-0">
                        <span class="font-bold tracking-widest text-[10px] uppercase text-gray-400 mr-1 hidden 2xl:inline-block" data-translate="social_title">IKUTI PERJALANAN KAMI</span>
                        
                        <a href="#" target="_blank" class="flex items-center space-x-2 bg-gray-900/60 hover:bg-gray-900/90 border border-gray-700/60 px-4 py-3 rounded-full transition backdrop-blur-md shadow-md">
                            <svg class="h-4 w-4 text-kingdom-orange" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-1.39 4.81 4.81 0 0 1-1.42-3.77L14 1h-4l-.4 3.53a4.83 4.83 0 0 1-1.39 3.77 4.81 4.81 0 0 1-3.77 1.42L1 10v4l3.53.4c1.49.17 2.74 1.42 2.91 2.91L10 21h4l.4-3.53a4.83 4.83 0 0 1 3.77-1.39 4.81 4.81 0 0 1 3.77-1.42L23 14v-4l-3.41-.31z"/></svg>
                            <span class="text-xs font-medium">TikTok <span class="text-gray-400 font-normal">@bromokingdom</span></span>
                        </a>

                        <a href="#" target="_blank" class="flex items-center space-x-2 bg-gray-900/60 hover:bg-gray-900/90 border border-gray-700/60 px-4 py-3 rounded-full transition backdrop-blur-md shadow-md">
                            <svg class="h-4 w-4 text-kingdom-orange" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 12l1.5 1.5c.39.39.39 1 0 1.39l-1.39 1.39C9.71 17.3 10.91 18.5 12.31 19c.23.09.47.16.72.21v-.28z"/></svg>
                            <span class="text-xs font-medium">Instagram <span class="text-gray-400 font-normal">@bromo.kingdom</span></span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Destinasi Section -->
    <section id="destinasi" class="py-12 lg:py-16 bg-gray-950 text-white border-t border-gray-900">
        <div class="container mx-auto px-6">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                <div class="max-w-xl">
                    <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full" data-translate="dest_badge">Eksplorasi Keindahan</span>
                    <h3 class="text-2xl lg:text-3xl font-black mt-2 mb-2" data-translate="dest_title">Destinasi Populer</h3>
                    <p class="text-gray-400 text-xs lg:text-sm" data-translate="dest_desc">Temukan tempat-tempat eksotis terbaik di sekitar Pronojiwo, Bromo, dan Semeru yang wajib kamu kunjungi.</p>
                </div>
                <div>
                    <a href="{{ route('destinations.index') }}" class="inline-flex items-center space-x-2 text-kingdom-orange hover:text-white font-bold text-xs lg:text-sm transition group">
                        <span>Lihat Semua Destinasi</span>
                        <span class="transform group-hover:translate-x-1 transition">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- 👇 TARUH KODE KARTU YANG RAPI DI DALAM GRID INI, CUK! 👇 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse($destinations as $dest)
                <div class="group relative rounded-3xl overflow-hidden shadow-xl border border-gray-800 bg-gray-900 flex flex-col justify-between">
                    <div>
                        <img src="{{ $dest->image_url }}" alt="{{ $dest->name }}" class="w-full h-56 object-cover group-hover:scale-105 transition duration-500">
                        <div class="p-5">
                            <span class="text-[11px] font-semibold text-kingdom-orange uppercase tracking-wider mb-1 block">{{ $dest->location }}</span>
                            <h4 class="text-xl font-bold text-white mb-1.5">{{ $dest->name }}</h4>
                            <p class="text-gray-300 text-xs line-clamp-2">{{ $dest->description }}</p>
                        </div>
                    </div>
                    <div class="px-5 pb-5 pt-0">
                        <a href="{{ route('destination.show', $dest->slug) }}" class="inline-flex items-center justify-center w-full bg-kingdom-orange/10 hover:bg-kingdom-orange text-kingdom-orange hover:text-gray-950 font-bold py-3 px-4 rounded-xl text-xs transition duration-300">
                            <span data-translate="dest_btn">Lihat Detail Destinasi</span> &rarr;
                        </a>
                    </div>
                </div>
                @empty
                    <div class="col-span-3 text-center p-8 bg-gray-900 rounded-2xl border border-gray-800">
                        <h4 class="text-base font-bold text-white">Belum ada destinasi</h4>
                    </div>
                @endforelse
            </div>
            <!-- 👆 ------------------------------------------------ 👆 -->

        </div>
    </section>

    <!-- Paket Wisata Section -->
    <section id="packages" class="py-24 bg-gray-900 text-white border-t border-gray-800">
        <div class="container mx-auto px-6">
            
            <!-- 👇 HEADER SECTION DENGAN TOMBOL "LIHAT SEMUA PAKET WISATA" DI KANAN 👇 -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                
                <!-- Sisi Kiri: Judul & Subjudul -->
                <div class="max-w-2xl">
                    <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full" data-translate="pkg_badge">Eksplorasi Terbaik</span>
                    <h3 class="text-3xl lg:text-4xl font-black mt-3 mb-4" data-translate="pkg_title">Pilihan Paket Wisata Unggulan</h3>
                    <p class="text-gray-400 text-sm lg:text-base" data-translate="pkg_desc">Nikmati perjalanan seru menjelajahi panorama Bromo dan Semeru bersama pemandu lokal profesional.</p>
                </div>

                <!-- Sisi Kanan: Tombol Lihat Semua Paket Wisata -->
                <div>
                    <a href="{{ route('packages.index') }}" class="inline-flex items-center space-x-2 text-kingdom-orange hover:text-white font-bold text-sm transition group">
                        <span>Lihat Semua Paket Wisata</span>
                        <span class="transform group-hover:translate-x-1 transition">&rarr;</span>
                    </a>
                </div>

            </div>
            <!-- 👆 ------------------------------------------------------------- 👆 -->

            <!-- Grid Kartu Paket Tour Anda (Looping seperti biasa) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($packages as $package)
                <!-- Card package kamu di sini -->
                @empty
                    <!-- Empty state -->
                @endforelse
            </div>

        </div>
    </section>

    <!-- Galeri Section -->
    <section id="galeri" class="py-24 bg-gray-950 text-white border-t border-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full" data-translate="gal_badge">Dokumentasi Perjalanan</span>
                <h3 class="text-3xl lg:text-4xl font-black mt-3 mb-4" data-translate="gal_title">Galeri Petualangan</h3>
                <p class="text-gray-400 text-sm lg:text-base" data-translate="gal_desc">Momen seru dan keindahan panorama abadi dari para traveler bersama Bromo Kingdom.</p>
            </div>

            <!-- Grid Foto Galeri -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Foto 1 -->
                <div class="group relative rounded-3xl overflow-hidden shadow-xl border border-gray-800 bg-gray-900 h-72">
                    <img src="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=800&auto=format&fit=crop" alt="Sunrise Bromo" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <div>
                            <span class="text-xs text-kingdom-orange font-bold uppercase">Mount Bromo</span>
                            <h4 class="text-lg font-bold text-white">Golden Sunrise View</h4>
                        </div>
                    </div>
                </div>

                <!-- Foto 2 -->
                <div class="group relative rounded-3xl overflow-hidden shadow-xl border border-gray-800 bg-gray-900 h-72">
                    <img src="https://images.unsplash.com/photo-1609137144813-7d996144673d?q=80&w=800&auto=format&fit=crop" alt="Jeep Adventure" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <div>
                            <span class="text-xs text-kingdom-orange font-bold uppercase">Taxi Gunung</span>
                            <h4 class="text-lg font-bold text-white">Jeep 4x4 Offroad</h4>
                        </div>
                    </div>
                </div>

                <!-- Foto 3 -->
                <div class="group relative rounded-3xl overflow-hidden shadow-xl border border-gray-800 bg-gray-900 h-72">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=800&auto=format&fit=crop" alt="Tumpak Sewu" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <div>
                            <span class="text-xs text-kingdom-orange font-bold uppercase">Pronojiwo</span>
                            <h4 class="text-lg font-bold text-white">Tumpak Sewu Waterfall</h4>
                        </div>
                    </div>
                </div>

                <!-- Foto 4 -->
                <div class="group relative rounded-3xl overflow-hidden shadow-xl border border-gray-800 bg-gray-900 h-72">
                    <img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?q=80&w=800&auto=format&fit=crop" alt="Semeru Ranu Kumbolo" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <div>
                            <span class="text-xs text-kingdom-orange font-bold uppercase">Mount Semeru</span>
                        <h4 class="text-lg font-bold text-white">Ranu Kumbolo Lake</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Tentang Kami Section -->
    <section id="tentang" class="py-24 bg-gray-900 text-white border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Kolom Kiri: Gambar / Ilustrasi -->
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl border border-gray-800">
                        <img src="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1000&auto=format&fit=crop" alt="Bromo Kingdom Jeep" class="w-full h-[420px] object-cover">
                    </div>
                    <!-- Badge Pengalaman Mengapung -->
                    <div class="absolute -bottom-6 -right-6 bg-kingdom-orange text-gray-950 p-6 rounded-3xl shadow-2xl hidden sm:block border-4 border-gray-900">
                        <span class="block text-3xl font-black">100%</span>
                        <span class="block text-xs font-bold uppercase tracking-wider">Lokal & Terpercaya</span>
                    </div>
                </div>

                <!-- Kolom Kanan: Teks Penjelasan & Statistik -->
                <div class="space-y-6">
                    <div>
                        <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full" data-translate="abt_badge">Kenali Kami Lebih Dekat</span>
                        <h3 class="text-3xl lg:text-4xl font-black mt-3 mb-4 text-white" data-translate="abt_title">Tentang Bromo Kingdom</h3>
                    </div>
                    
                    <p class="text-gray-300 text-sm lg:text-base leading-relaxed" data-translate="abt_desc1">
                        Bromo Kingdom by Taxi Gunung Semeru adalah penyedia layanan tour dan transportasi petualangan terpercaya yang berbasis langsung di kaki Gunung Semeru, tepatnya di Pronojiwo, Lumajang, Jawa Timur.
                    </p>
                    
                    <p class="text-gray-400 text-sm leading-relaxed" data-translate="abt_desc2">
                        Kami berdedikasi untuk memberikan pengalaman menjelajahi keindahan alam Pulau Jawa—mulai dari Sunrise Bromo, Air Terjun Tumpak Sewu, hingga jalur pendakian Semeru—dengan armada Jeep 4x4 tangguh dan driver lokal berpengalaman yang mengutamakan keselamatan dan kenyamanan Anda.
                    </p>

                    <!-- Statistik Singkat -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-gray-800">
                        <div>
                            <span class="block text-2xl lg:text-3xl font-black text-kingdom-orange">5+</span>
                            <span class="block text-xs text-gray-400 mt-1" data-translate="abt_stat1">Tahun Pengalaman</span>
                        </div>
                        <div>
                            <span class="block text-2xl lg:text-3xl font-black text-kingdom-orange">1.5k+</span>
                            <span class="block text-xs text-gray-400 mt-1" data-translate="abt_stat2">Trip Terselenggara</span>
                        </div>
                        <div>
                            <span class="block text-2xl lg:text-3xl font-black text-kingdom-orange">25+</span>
                            <span class="block text-xs text-gray-400 mt-1" data-translate="abt_stat3">Driver & Guide Lokal</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-gray-950 text-white border-t border-gray-900">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-16">
                <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full" data-translate="faq_badge">Pertanyaan Populer</span>
                <h3 class="text-3xl lg:text-4xl font-black mt-3 mb-4" data-translate="faq_title">Frequently Asked Questions</h3>
                <p class="text-gray-400 text-sm lg:text-base" data-translate="faq_desc">Temukan jawaban atas pertanyaan yang sering diajukan seputar layanan trip dan penyewaan Jeep Bromo Kingdom.</p>
            </div>

            <!-- Accordion List -->
            <div class="space-y-4">
                <!-- Item 1 -->
                <div class="bg-gray-900 border border-gray-800 rounded-2xl overflow-hidden shadow-md">
                    <button onclick="toggleFaq(1)" class="w-full flex justify-between items-center p-6 text-left font-bold text-white hover:text-kingdom-orange transition">
                        <span data-translate="q1">Bagaimana cara melakukan booking paket wisata atau Jeep?</span>
                        <svg id="faq-icon-1" class="w-5 h-5 transform transition-transform duration-300 text-kingdom-orange" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="faq-content-1" class="hidden px-6 pb-6 text-gray-300 text-sm leading-relaxed border-t border-gray-800/60 pt-4">
                        <p data-translate="a1">Anda bisa langsung memilih paket yang diinginkan lalu mengklik tombol 'Booking via WA' atau 'Booking Sekarang'. Anda akan langsung terhubung ke WhatsApp official kami untuk konfirmasi jadwal dan pembayaran.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="bg-gray-900 border border-gray-800 rounded-2xl overflow-hidden shadow-md">
                    <button onclick="toggleFaq(2)" class="w-full flex justify-between items-center p-6 text-left font-bold text-white hover:text-kingdom-orange transition">
                        <span data-translate="q2">Dimana titik penjemputan (meeting point) untuk tour Bromo?</span>
                        <svg id="faq-icon-2" class="w-5 h-5 transform transition-transform duration-300 text-kingdom-orange" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="faq-content-2" class="hidden px-6 pb-6 text-gray-300 text-sm leading-relaxed border-t border-gray-800/60 pt-4">
                        <p data-translate="a2">Penjemputan standar kami meliputi wilayah Lumajang (Pronojiwo), Malang, atau Pasuruan. Kami juga melayani penjemputan langsung dari hotel, homestay, atau stasiun terdekat.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-gray-900 border border-gray-800 rounded-2xl overflow-hidden shadow-md">
                    <button onclick="toggleFaq(3)" class="w-full flex justify-between items-center p-6 text-left font-bold text-white hover:text-kingdom-orange transition">
                        <span data-translate="q3">Apakah harga paket sudah termasuk tiket masuk wisata?</span>
                        <svg id="faq-icon-3" class="w-5 h-5 transform transition-transform duration-300 text-kingdom-orange" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="faq-content-3" class="hidden px-6 pb-6 text-gray-300 text-sm leading-relaxed border-t border-gray-800/60 pt-4">
                        <p data-translate="a3">Ya, sebagian besar paket unggulan kami sudah mencakup sewa Jeep 4x4 tangguh, BBM, driver lokal profesional, tiket masuk kawasan wisata, dan biaya parkir.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="bg-gray-900 border border-gray-800 rounded-2xl overflow-hidden shadow-md">
                    <button onclick="toggleFaq(4)" class="w-full flex justify-between items-center p-6 text-left font-bold text-white hover:text-kingdom-orange transition">
                        <span data-translate="q4">Apakah bisa melakukan custom rute atau jadwal perjalanan?</span>
                        <svg id="faq-icon-4" class="w-5 h-5 transform transition-transform duration-300 text-kingdom-orange" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="faq-content-4" class="hidden px-6 pb-6 text-gray-300 text-sm leading-relaxed border-t border-gray-800/60 pt-4">
                        <p data-translate="a4">Tentu saja! Anda bisa berkonsultasi secara gratis dengan tim kami via tombol 'Konsultasi Trip Gratis' untuk merancang rute perjalanan sesuai keinginan Anda.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

<!-- Kontak Section -->
    <section id="kontak" class="py-24 bg-gray-900 text-white border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full">Hubungi Kami</span>
                <h3 class="text-3xl lg:text-4xl font-black mt-3 mb-4">Informasi & Lokasi Basecamp</h3>
                <p class="text-gray-400 text-sm lg:text-base">Hubungi layanan official kami atau kunjungi langsung basecamp petualangan kami di Pronojiwo, Lumajang.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch max-w-6xl mx-auto">
                
                <!-- Kotak Kiri: Informasi Kontak Lengkap -->
                <div class="bg-gray-950 p-8 lg:p-10 rounded-3xl border border-gray-800 shadow-2xl flex flex-col justify-between">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        
                        <!-- WhatsApp Bromo Kingdom -->
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">WhatsApp Bromo Kingdom</span>
                            <a href="https://wa.me/6282232295646" target="_blank" class="text-sm font-semibold text-white hover:text-kingdom-orange transition mt-1 block">+62 822-3229-5646</a>
                        </div>

                        <!-- WhatsApp Taxi Gunung -->
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">WhatsApp Taxi Gunung</span>
                            <a href="https://wa.me/6285188688648" target="_blank" class="text-sm font-semibold text-white hover:text-kingdom-orange transition mt-1 block">+62 851-8868-8648</a>
                        </div>

                        <!-- Email -->
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">Email</span>
                            <a href="mailto:pttaxigunungsemeru@gmail.com" class="text-sm font-semibold text-white hover:text-kingdom-orange transition mt-1 block break-all">pttaxigunungsemeru@gmail.com</a>
                        </div>

                        <!-- Alamat -->
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">Alamat</span>
                            <p class="text-sm font-semibold text-white mt-1">Pronojiwo, Lumajang, Jawa Timur, Indonesia</p>
                        </div>

                        <!-- Meeting Point -->
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">Meeting Point</span>
                            <p class="text-sm font-semibold text-white mt-1">Jeep Lava Tour Semeru</p>
                        </div>

                        <!-- Jam Operasional -->
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">Jam Operasional</span>
                            <p class="text-sm font-semibold text-white mt-1">06.00 - 23.00</p>
                        </div>

                        <!-- Instagram -->
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">Instagram</span>
                            <a href="https://www.instagram.com/bromo.kingdom" target="_blank" class="text-xs font-semibold text-white hover:text-kingdom-orange transition mt-1 block truncate">instagram.com/bromo.kingdom</a>
                        </div>

                        <!-- Facebook -->
                        <div>
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">Facebook</span>
                            <a href="#" target="_blank" class="text-sm font-semibold text-white hover:text-kingdom-orange transition mt-1 block">BromoKingdom</a>
                        </div>

                        <!-- TikTok -->
                        <div class="sm:col-span-2">
                            <span class="block text-[10px] font-bold tracking-widest text-gray-400 uppercase">TikTok</span>
                            <a href="#" target="_blank" class="text-sm font-semibold text-white hover:text-kingdom-orange transition mt-1 block">tiktok.com/@bromokingdom</a>
                        </div>

                    </div>

                    <div class="pt-8 mt-8 border-t border-gray-900 text-[11px] text-gray-500 flex justify-between items-center">
                        <span>&copy; 2026 Bromo Kingdom (taxigunung.com)</span>
                        <span class="text-kingdom-orange font-bold">Pronojiwo, Lumajang</span>
                    </div>
                </div>

                <!-- Kotak Kanan: Google Maps Embed Area Pronojiwo -->
                <div class="bg-gray-950 rounded-3xl border border-gray-800 shadow-2xl overflow-hidden relative min-h-[400px] flex flex-col">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.8876879815414!2d112.9234!3d-8.2145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd63f0000000001%3A0x0!2sPronojiwo%2C+Lumajang+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0; flex-grow:1;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    

    <!-- Footer -->
    <footer class="bg-gray-950 text-gray-500 py-10 border-t border-gray-900 text-xs">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2026 Bromo Kingdom (taxigunung.com). All rights reserved.</p>
            <p class="mt-1 text-gray-600">Jelajahi Java, Temukan Hal yang Luar Biasa.</p>
        </div>
    </footer>

    <!-- Script Pengubah Bahasa ID | EN Secara Instan -->
    <script>
        const translations = {
            id: {
                brand_sub: "BY TAXI GUNUNG SEMERU",
                nav_home: "Home",
                nav_dest: "Destinasi",
                nav_pkg: "Paket Wisata",
                nav_gal: "Galeri",
                nav_about: "Tentang Kami",
                nav_faq: "FAQ",
                nav_contact: "Contact",
                nav_booking: "BOOKING SEKARANG",
                hero_loc: "PRONOJIWO, LUMAJANG — JAWA TIMUR",
                hero_title: "Jelajahi Java, Temukan Hal yang Luar Biasa",
                hero_desc: "Temukan keindahan alam, budaya, dan petualangan di setiap sudut Pulau Jawa. Kami siap menemani perjalananmu menciptakan cerita yang tak terlupakan.",
                btn_pkg: "LIHAT PAKET WISATA",
                btn_consult: "KONSULTASI TRIP GRATIS",
                social_title: "IKUTI PERJALANAN KAMI",
                dest_badge: "Eksplorasi Keindahan",
                dest_title: "Destinasi Populer",
                dest_desc: "Temukan tempat-tempat eksotis terbaik di sekitar Pronojiwo, Bromo, dan Semeru yang wajib kamu kunjungi.",
                dest_btn: "Lihat Detail Destinasi",
                pkg_badge: "Eksplorasi Terbaik",
                pkg_title: "Pilihan Paket Wisata Unggulan",
                pkg_desc: "Nikmati perjalanan seru menjelajahi panorama Bromo dan Semeru bersama pemandu lokal profesional.",
                gal_badge: "Dokumentasi Perjalanan",
                gal_title: "Galeri Petualangan",
                gal_desc: "Momen seru dan keindahan panorama abadi dari para traveler bersama Bromo Kingdom.",
                abt_badge: "Kenali Kami Lebih Dekat",
                abt_title: "Tentang Bromo Kingdom",
                abt_desc1: "Bromo Kingdom by Taxi Gunung Semeru adalah penyedia layanan tour dan transportasi petualangan terpercaya yang berbasis langsung di kaki Gunung Semeru, tepatnya di Pronojiwo, Lumajang, Jawa Timur.",
                abt_desc2: "Kami berdedikasi untuk memberikan pengalaman menjelajahi keindahan alam Pulau Jawa—mulai dari Sunrise Bromo, Air Terjun Tumpak Sewu, hingga jalur pendakian Semeru—dengan armada Jeep 4x4 tangguh dan driver lokal berpengalaman yang mengutamakan keselamatan dan kenyamanan Anda.",
                abt_stat1: "Tahun Pengalaman",
                abt_stat2: "Trip Terselenggara",
                abt_stat3: "Driver & Guide Lokal",
                faq_badge: "Pertanyaan Populer",
                faq_title: "Frequently Asked Questions",
                faq_desc: "Temukan jawaban atas pertanyaan yang sering diajukan seputar layanan trip dan penyewaan Jeep Bromo Kingdom.",
                q1: "Bagaimana cara melakukan booking paket wisata atau Jeep?",
                a1: "Anda bisa langsung memilih paket yang diinginkan lalu mengklik tombol 'Booking via WA' atau 'Booking Sekarang'. Anda akan langsung terhubung ke WhatsApp official kami untuk konfirmasi jadwal dan pembayaran.",
                q2: "Dimana titik penjemputan (meeting point) untuk tour Bromo?",
                a2: "Penjemputan standar kami meliputi wilayah Lumajang (Pronojiwo), Malang, atau Pasuruan. Kami juga melayani penjemputan langsung dari hotel, homestay, atau stasiun terdekat.",
                q3: "Apakah harga paket sudah termasuk tiket masuk wisata?",
                a3: "Ya, sebagian besar paket unggulan kami sudah mencakup sewa Jeep 4x4 tangguh, BBM, driver lokal profesional, tiket masuk kawasan wisata, dan biaya parkir.",
                q4: "Apakah bisa melakukan custom rute atau jadwal perjalanan?",
                a4: "Tentu saja! Anda bisa berkonsultasi secara gratis dengan tim kami via tombol 'Konsultasi Trip Gratis' untuk merancang rute perjalanan sesuai keinginan Anda.",
                contact_badge: "Hubungi Kami",
                contact_title: "Mulai Petualanganmu Sekarang",
                contact_desc: "Punya pertanyaan seputar rute, custom trip, atau ketersediaan armada Jeep? Jangan ragu untuk menghubungi tim kami.",
                info_title: "Informasi Kontak",
                addr_label: "Basecamp Utama",
                addr_val: "Pronojiwo, Kabupaten Lumajang, Jawa Timur, Indonesia",
                phone_label: "WhatsApp / Telepon",
                email_label: "Email Resmi",
                form_title: "Kirim Pesan Cepat",
                name_label: "Nama Lengkap",
                name_placeholder: "Masukkan nama kamu",
                whatsapp_label: "Nomor WhatsApp",
                whatsapp_placeholder: "Contoh: 081234567890",
                msg_label: "Pesan / Rencana Trip",
                msg_placeholder: "Tuliskan tanggal trip atau destinasi yang ingin dikunjungi...",
                send_btn: "Kirim Pesan via WhatsApp"
            },
            en: {
                brand_sub: "BY TAXI GUNUNG SEMERU",
                nav_home: "Home",
                nav_dest: "Destinations",
                nav_pkg: "Tour Packages",
                nav_gal: "Gallery",
                nav_about: "About Us",
                nav_faq: "FAQ",
                nav_contact: "Contact",
                nav_booking: "BOOK NOW",
                hero_loc: "PRONOJIWO, LUMAJANG — EAST JAVA",
                hero_title: "Explore Java, Discover the Extraordinary",
                hero_desc: "Discover natural beauty, culture, and adventure in every corner of Java Island. We are ready to accompany your journey in creating unforgettable stories.",
                btn_pkg: "VIEW TOUR PACKAGES",
                btn_consult: "FREE TRIP CONSULTATION",
                social_title: "FOLLOW OUR JOURNEY",
                dest_badge: "Explore Beauty",
                dest_title: "Popular Destinations",
                dest_desc: "Discover the best exotic places around Pronojiwo, Bromo, and Semeru that you must visit.",
                dest_btn: "View Destination Details",
                pkg_badge: "Best Exploration",
                pkg_title: "Featured Tour Packages",
                pkg_desc: "Enjoy an exciting journey exploring the panoramas of Bromo and Semeru with professional local guides.",
                gal_badge: "Trip Documentation",
                gal_title: "Adventure Gallery",
                gal_desc: "Exciting moments and timeless panoramic beauty from travelers with Bromo Kingdom.",
                abt_badge: "Get to Know Us",
                abt_title: "About Bromo Kingdom",
                abt_desc1: "Bromo Kingdom by Taxi Gunung Semeru is a trusted tour and adventure transportation service provider based directly at the foot of Mount Semeru, precisely in Pronojiwo, Lumajang, East Java.",
                abt_desc2: "We are dedicated to providing an unforgettable experience exploring the natural beauty of Java Island—from Bromo Sunrise, Tumpak Sewu Waterfall, to Semeru hiking trails—with rugged 4x4 Jeep fleets and experienced local drivers prioritizing your safety and comfort.",
                abt_stat1: "Years Experience",
                abt_stat2: "Trips Completed",
                abt_stat3: "Local Drivers & Guides",
                faq_badge: "Popular Questions",
                faq_title: "Frequently Asked Questions",
                faq_desc: "Find answers to frequently asked questions regarding trip services and Bromo Kingdom Jeep rentals.",
                q1: "How do I book a tour package or Jeep?",
                a1: "You can directly select your desired package and click the 'Booking via WA' or 'Book Now' button. You will be instantly connected to our official WhatsApp for schedule and payment confirmation.",
                q2: "Where is the meeting point for the Bromo tour?",
                a2: "Our standard pickups cover the Lumajang (Pronojiwo), Malang, or Pasuruan areas. We also provide direct pickups from your hotel, homestay, or nearest station.",
                q3: "Are entrance fees included in the package price?",
                a3: "Yes, most of our featured packages already include rugged 4x4 Jeep rental, fuel, professional local drivers, tourist area entrance tickets, and parking fees.",
                q4: "Can I customize my route or travel schedule?",
                a4: "Of course! You can consult for free with our team via the 'Free Trip Consultation' button to design a travel route tailored to your preferences.",
                contact_badge: "Get in Touch",
                contact_title: "Start Your Adventure Now",
                contact_desc: "Have questions about routes, custom trips, or Jeep availability? Don't hesitate to reach out to our team.",
                info_title: "Contact Information",
                addr_label: "Main Basecamp",
                addr_val: "Pronojiwo, Lumajang Regency, East Java, Indonesia",
                phone_label: "WhatsApp / Phone",
                email_label: "Official Email",
                form_title: "Send Quick Message",
                name_label: "Full Name",
                name_placeholder: "Enter your name",
                whatsapp_label: "WhatsApp Number",
                whatsapp_placeholder: "Example: 081234567890",
                msg_label: "Message / Trip Plan",
                msg_placeholder: "Write your trip date or destination you want to visit...",
                send_btn: "Send Message via WhatsApp"
            }
        };

        function changeLang(lang) {
            // Ubah gaya tombol aktif
            if (lang === 'id') {
                document.getElementById('btn-id').className = "bg-kingdom-orange text-gray-950 px-3 py-1 rounded-full shadow transition";
                document.getElementById('btn-en').className = "text-gray-400 hover:text-white px-3 py-1 transition";
            } else {
                document.getElementById('btn-en').className = "bg-kingdom-orange text-gray-950 px-3 py-1 rounded-full shadow transition";
                document.getElementById('btn-id').className = "text-gray-400 hover:text-white px-3 py-1 transition";
            }

            // Ganti teks elemen berdasarkan atribut data-translate
            document.querySelectorAll('[data-translate]').forEach(el => {
                const key = el.getAttribute('data-translate');
                if (translations[lang] && translations[lang][key]) {
                    el.innerText = translations[lang][key];
                }
            });
        }
    </script>
</body>
</html>