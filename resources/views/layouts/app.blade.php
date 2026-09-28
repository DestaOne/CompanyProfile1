<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV. Elka Mandiri</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                
                <div class="flex items-center">
                    <a href="/" class="flex flex-col justify-center transition duration-300 hover:opacity-80">
                        <img src="{{ asset('images/logo.png') }}" alt="Elka Mandiri Logo" class="h-10 md:h-14 object-contain">
                    </a>
                </div>

                <div class="hidden lg:flex items-center space-x-2">
                    <a href="/" class="{{ request()->is('/') ? 'text-blue-700 bg-blue-50 font-semibold' : 'text-gray-700 hover:text-blue-700 hover:bg-blue-50 font-medium' }} flex flex-col items-center group px-4 py-2 rounded-md transition-all duration-300">
                        Beranda
                        <span class="{{ request()->is('/') ? 'w-5' : 'w-0 group-hover:w-5' }} h-0.5 bg-blue-600 mt-1 rounded-full transition-all duration-300"></span>
                    </a>
                    
                    <a href="/tentang" class="{{ request()->is('tentang') ? 'text-blue-700 bg-blue-50 font-semibold' : 'text-gray-700 hover:text-blue-700 hover:bg-blue-50 font-medium' }} flex flex-col items-center group px-4 py-2 rounded-md transition-all duration-300">
                        Tentang Kami
                        <span class="{{ request()->is('tentang') ? 'w-5' : 'w-0 group-hover:w-5' }} h-0.5 bg-blue-600 mt-1 rounded-full transition-all duration-300"></span>
                    </a>
                    
                    <a href="/layanan" class="{{ request()->is('layanan') ? 'text-blue-700 bg-blue-50 font-semibold' : 'text-gray-700 hover:text-blue-700 hover:bg-blue-50 font-medium' }} flex flex-col items-center group px-4 py-2 rounded-md transition-all duration-300">
                        Layanan
                        <span class="{{ request()->is('layanan') ? 'w-5' : 'w-0 group-hover:w-5' }} h-0.5 bg-blue-600 mt-1 rounded-full transition-all duration-300"></span>
                    </a>
                    
                    
                    
                    <a href="/kontak" class="{{ request()->is('kontak') ? 'text-blue-700 bg-blue-50 font-semibold' : 'text-gray-700 hover:text-blue-700 hover:bg-blue-50 font-medium' }} flex flex-col items-center group px-4 py-2 rounded-md transition-all duration-300">
                        Kontak
                        <span class="{{ request()->is('kontak') ? 'w-5' : 'w-0 group-hover:w-5' }} h-0.5 bg-blue-600 mt-1 rounded-full transition-all duration-300"></span>
                    </a>
                </div>

                <div class="hidden md:flex items-center">
                    <a href="#contact" class="flex items-center gap-2 px-5 py-2.5 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 transition duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                        Hubungi Kami
                    </a>
                </div>

                <div class="flex lg:hidden items-center">
                    <button id="menu-btn" class="text-gray-700 hover:text-blue-600 focus:outline-none p-2">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 shadow-xl px-4 pt-4 pb-6 space-y-2">
            <a href="/" class="block px-4 py-2.5 rounded-md text-base font-medium {{ request()->is('/') ? 'text-blue-700 bg-blue-50 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">Beranda</a>
            <a href="/tentang" class="block px-4 py-2.5 rounded-md text-base font-medium {{ request()->is('tentang') ? 'text-blue-700 bg-blue-50 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">Tentang Kami</a>
            <a href="/layanan" class="block px-4 py-2.5 rounded-md text-base font-medium {{ request()->is('layanan') ? 'text-blue-700 bg-blue-50 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">Layanan & KBLI</a>
            
            <a href="/kontak" class="block px-4 py-2.5 rounded-md text-base font-medium {{ request()->is('kontak') ? 'text-blue-700 bg-blue-50 font-semibold' : 'text-gray-700 hover:bg-gray-100' }}">Kontak</a>
            <div class="pt-2">
                <a href="#contact" class="flex justify-center items-center gap-2 w-full px-5 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-24">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-300 pt-16 pb-12 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-white p-2 rounded-lg">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo Footer" class="h-8 object-contain">
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        Solusi Komputer, Teknologi dan Furniture Dalam Satu Tempat
                    </p>
                    
                </div>

                <div>
                    <h4 class="text-white font-semibold text-lg mb-4 border-l-4 border-blue-600 pl-3">Tautan Cepat</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="/" class="text-gray-400 hover:text-blue-400 transition duration-300">Beranda</a></li>
                        <li><a href="/tentang" class="text-gray-400 hover:text-blue-400 transition duration-300">Tentang Kami</a></li>
                        <li><a href="/layanan" class="text-gray-400 hover:text-blue-400 transition duration-300">Layanan & KBLI</a></li>
                      
                        <li><a href="/kontak" class="text-gray-400 hover:text-blue-400 transition duration-300">Hubungi Kami</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold text-lg mb-4 border-l-4 border-blue-600 pl-3">Layanan Utama</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li class="text-gray-400">Mesin Kantor</li>
                        <li class="text-gray-400">Komputer dan Perlengkapannya</li>
                        <li class="text-gray-400">Peralatan Listrik Rumah Tangga dan Peralatan Penerangan Perlengkpananya</li>
                        <li class="text-gray-400">Piranti Lunak (Software)</li>
                        <li class="text-gray-400">Furniture</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold text-lg mb-4 border-l-4 border-blue-600 pl-3">Kontak & Lokasi</h4>
                    <div class="space-y-3 text-sm text-gray-400">
                        <p class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Golden Jalan Tukad Batanghari Blok B Nomor 1, Kelurahan Panjer, Kec Denpasar Selatan, Kota Denpasar Provinsi Bali
</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span>elkamandiri.cv@gmail.com</span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-gray-500">
                <p>&copy; 2026 CV. Bali Lingga Komputer. Hak Cipta Dilindungi.</p>
                
            </div>
        </div>
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.remove('bg-white', 'shadow-md');
                navbar.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-lg');
                navbar.classList.add('bg-white', 'shadow-md');
            }
        });

        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>