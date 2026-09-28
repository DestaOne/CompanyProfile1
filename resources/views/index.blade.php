@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-br from-blue-900 via-blue-800 to-gray-800 pt-20 pb-20 lg:pt-20 lg:pb-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            
            <div>
                
                
                <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-white leading-tight mb-6">
                    Solusi Komputer, Teknologi dan Furniture <span class="text-blue-300">Dalam Satu Tempat</span>
                </h1>
                
                
                <div class="flex flex-col sm:flex-row gap-4 mb-6">
                    <a href="#" class="inline-flex justify-center items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-lg shadow-md transition duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Minta Penawaran
                    </a>
                    <a href="#services" class="inline-flex justify-center items-center gap-2 px-6 py-3 bg-gray-700/60 hover:bg-gray-700 border border-gray-600 text-gray-100 font-semibold rounded-lg transition duration-300">
                        Jelajahi Layanan &rarr;
                    </a>
                </div>

                <div class="flex items-start gap-2.5 text-gray-200 text-sm mb-10 bg-blue-950/40 p-3.5 rounded-xl border border-blue-800/40 w-fit">
                    <svg class="w-5 h-5 text-blue-300 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span><strong>Alamat:</strong> Golden Jalan Tukad Batanghari Blok B Nomor 1, Kelurahan Panjer, Kec Denpasar Selatan, Kota Denpasar Provinsi Bali
</span>
                </div>
                
                <div class="flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-gray-200">
                    
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        100% Produk Asli 
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Pengiriman Seluruh Bali
                    </div>
                </div>
            </div>

            <div class="relative flex justify-center items-center">
                <div class="relative w-full max-w-lg rounded-2xl overflow-hidden shadow-2xl border border-gray-600/60 bg-gray-800">
                    <img src="{{ asset('images/old_computer.jpg') }}" alt="Foto Perusahaan" class="w-full h-[400px] object-cover opacity-90">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-800/30 to-transparent"></div>
                </div>

                <div class="absolute -bottom-6 -left-4 sm:left-4 bg-gray-800/90 backdrop-blur-md border border-gray-600/80 p-4 rounded-xl shadow-xl flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-600/20 border border-blue-400/40 rounded-lg flex items-center justify-center text-blue-300 font-bold text-xl">
                        5
                    </div>
                    <div>
                        <p class="text-xs text-gray-300 font-medium">Portofolio Utama</p>
                        <p class="text-white font-bold text-base">5 Layanan Unggulan</p>
                    </div>
                </div>

                <div class="absolute -top-6 -right-4 sm:right-4 bg-gray-800/90 backdrop-blur-md border border-gray-600/80 p-4 rounded-xl shadow-xl flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-600/20 border border-blue-400/40 rounded-lg flex items-center justify-center text-blue-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-300 font-medium">Cakupan Operasional</p>
                        <p class="text-white font-bold text-base">Mencangkup Wilayah Bali</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<!-- Bagian Layanan / Portofolio -->
<section id="services" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-12 text-center md:text-left">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Portofolio Layanan Kami</h2>
                <div class="w-20 h-1.5 bg-blue-600 rounded-full mb-6 mx-auto md:mx-0"></div>
                <p class="text-gray-600 text-lg">Menyediakan pengadaan barang dan jasa terbaik untuk mendukung efisiensi dan produktivitas instansi Anda.</p>
            </div>
            <div class="hidden md:block">
                <a href="/layanan" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-800 transition duration-300 group">
                    Lihat Semua Layanan 
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <a href="/layanan/mesin-kantor" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:scale-105 hover:border-blue-200 transition-all duration-300 flex flex-col">
                <div class="relative w-full h-52 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('images/mesin-kantor.jpg') }}" alt="Mesin Kantor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 lg:p-8 flex flex-col flex-grow items-start">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-700 mb-3 transition-colors duration-300">Mesin Kantor</h3>
                    <p class="text-gray-500 text-sm mb-6 leading-relaxed text-left flex-grow">Pengadaan mesin fotokopi, printer, scanner, proyektor, dan kebutuhan operasional kantor lainnya.</p>
                    <div class="mt-auto text-blue-600 font-semibold text-sm flex items-center gap-2 group-hover:gap-3 transition-all duration-300">
                        Lihat Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </a>

            <a href="/layanan/komputer" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:scale-105 hover:border-blue-200 transition-all duration-300 flex flex-col">
                <div class="relative w-full h-52 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('images/komputer.jpg') }}" alt="Komputer & IT" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 lg:p-8 flex flex-col flex-grow items-start">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-700 mb-3 transition-colors duration-300">Komputer & IT</h3>
                    <p class="text-gray-500 text-sm mb-6 leading-relaxed text-left flex-grow">Solusi perangkat keras seperti PC Desktop, Laptop, Server, serta aksesoris dan suku cadang asli.</p>
                    <div class="mt-auto text-blue-600 font-semibold text-sm flex items-center gap-2 group-hover:gap-3 transition-all duration-300">
                        Lihat Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </a>

            <a href="/layanan/kelistrikan" class="group bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:scale-105 hover:border-blue-200 transition-all duration-300 flex flex-col">
                <div class="relative w-full h-52 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('images/kelistrikan.jpg') }}" alt="Listrik & Penerangan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6 lg:p-8 flex flex-col flex-grow items-start">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-700 mb-3 transition-colors duration-300">Listrik & Penerangan</h3>
                    <p class="text-gray-500 text-sm mb-6 leading-relaxed text-left flex-grow">Peralatan listrik, komponen penerangan ruangan, instalasi energi, dan aksesoris kelistrikan.</p>
                    <div class="mt-auto text-blue-600 font-semibold text-sm flex items-center gap-2 group-hover:gap-3 transition-all duration-300">
                        Lihat Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </a>
        </div>

        <div class="mt-10 text-center md:hidden">
            <a href="/layanan" class="inline-flex justify-center items-center gap-2 px-6 py-3 bg-white border border-gray-200 shadow-sm text-blue-600 font-semibold rounded-lg hover:bg-gray-50 hover:border-blue-200 transition duration-300 w-full max-w-xs mx-auto">
                Lihat Semua Layanan 
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>

    </div>
</section>
@endsection