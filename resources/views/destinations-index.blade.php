<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Destinasi - Bromo Kingdom</title>
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

    <!-- Header / Navbar dengan Menu "Destinasi" Aktif -->
    <header class="bg-gray-900 border-b border-gray-800 py-4 sticky top-0 z-50">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <div class="bg-kingdom-orange text-gray-950 p-2.5 rounded-xl font-black text-lg">BK</div>
                <div>
                    <span class="block text-lg font-black tracking-wider text-white leading-none">BROMO KINGDOM</span>
                    <span class="block text-[10px] text-gray-400 tracking-wider">BY TAXI GUNUNG SEMERU</span>
                </div>
            </a>

            <!-- Navigasi dengan Status Aktif di Destinasi -->
            <nav class="hidden xl:flex items-center space-x-7 text-sm font-medium text-gray-300">
                <a href="{{ url('/') }}" class="hover:text-kingdom-orange transition">Home</a>
                <a href="{{ route('destinations.index') }}" class="text-kingdom-orange font-bold transition">Destinasi</a>
                <a href="{{ url('/#packages') }}" class="hover:text-kingdom-orange transition">Paket Wisata</a>
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

    <!-- Konten Semua Destinasi -->
    <main class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-kingdom-orange text-xs font-bold uppercase tracking-widest bg-kingdom-orange/10 px-3 py-1 rounded-full">Eksplorasi Lengkap</span>
                <h1 class="text-4xl lg:text-5xl font-black mt-3 mb-4 text-white">Semua Destinasi Pilihan</h1>
                <p class="text-gray-400 text-sm lg:text-base">Jelajahi seluruh destinasi wisata eksotis terbaik di sekitar Bromo, Semeru, dan Pronojiwo bersama armada kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($destinations as $dest)
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl border border-gray-800 bg-gray-900 flex flex-col justify-between">
                    <div>
                        <img src="{{ $dest->image_url }}" alt="{{ $dest->name }}" class="w-full h-80 object-cover group-hover:scale-105 transition duration-500">
                        <div class="p-6">
                            <span class="text-xs font-semibold text-kingdom-orange uppercase tracking-wider mb-1 block">{{ $dest->location }}</span>
                            <h4 class="text-2xl font-black text-white mb-2">{{ $dest->name }}</h4>
                            <p class="text-gray-300 text-xs line-clamp-2 mb-4">{{ $dest->description }}</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="{{ route('destination.show', $dest->slug) }}" class="inline-flex items-center justify-center w-full bg-kingdom-orange/10 hover:bg-kingdom-orange text-kingdom-orange hover:text-gray-950 font-bold py-3 px-4 rounded-xl text-xs transition duration-300">
                            Lihat Detail Destinasi &rarr;
                        </a>
                    </div>
                </div>
                @empty
                    <div class="col-span-3 text-center p-12 bg-gray-900 rounded-3xl border border-gray-800">
                        <h4 class="text-lg font-bold text-white">Belum ada destinasi tersedia</h4>
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