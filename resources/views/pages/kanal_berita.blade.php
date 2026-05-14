@extends('layouts.app')

@section('title', 'TRP NEWS | Agricultural Food Engineering')

@section('content')

<!-- Hero Section -->
<header class="relative pt-0 h-[614px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="Microscopic view of organic plant cell structures with vibrant green chlorophyll and laboratory lighting, high-end scientific photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwRF-fBdFdZaHQcCFyl0YXB_a2V72ZUL7LWUcBuCKow792bb_dXrDLTOMBpVyF62kwfoGQmxj_s9-j7lt_yoYOjtdSfsvH6RVq8G9q9NuYBhbEzp026tFqzyBjLR-Nfs0uzIZ-pKdT4PjJVjctHRqUxekQK2OAIbCN4r0yfxzU-nFhUw0ZZ9bXsj9cSC2D3XjVfldTuMXQfQzlwor5gBKKsUgKRDaig4JrCLVcjkihEtScwBHJZAjVBcTrXPGGdjLlrZ7sW6gSpTSG"/>
<div class="absolute inset-0 hero-gradient-overlay"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<span class="inline-block py-1 px-3 bg-tertiary-fixed text-on-tertiary-fixed font-label text-xs tracking-widest font-bold rounded-full mb-6 uppercase">Scientific Arboretum</span>
<h1 class="text-display font-display text-6xl md:text-8xl font-extrabold text-white leading-tight tracking-tighter mb-4">
                TRP NEWS
            </h1>
<p class="text-white/90 text-lg md:text-xl font-medium max-w-lg leading-relaxed">
                Advancing food security through precision engineering and biological innovation.
            </p>
</div>
</div>
</header>
<!-- Navigation & Filter Section -->
<section class="py-12 bg-surface-container-low" id="filter">
    <div class="max-w-7xl mx-auto px-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-8">

            <div class="flex flex-wrap gap-3">

                <a href="{{ url('/berita#filter') }}"
                   class="{{ request('kategori') == '' ? 'px-6 py-2.5 rounded-full bg-primary text-white font-bold text-sm' : 'px-6 py-2.5 rounded-full bg-gray-200 text-black font-bold text-sm' }}">
                    Semua
                </a>    
                 {{-- in_array(request('kategori'), ['Informasi Umum', 'akademik', 'kemahasiswaan'] --}}
                {{-- 'px-6 py-2.5 rounded-full bg-primary text-white font-bold text-sm' : 'px-6 py-2.5 rounded-full bg-gray-200 text-black font-bold text-sm' --}}
                <a href="{{ url('/berita?kategori=Informasi Umum#filter') }}"
                   class="{{ request('kategori') == 'Informasi Umum' ? 'px-6 py-2.5 rounded-full bg-primary text-white font-bold text-sm' : 'px-6 py-2.5 rounded-full bg-gray-200 text-black font-bold text-sm' }}">
                    Informasi Umum
                </a>

                <a href="{{ url('/berita?kategori=Akademik#filter') }}"
                   class="{{ request('kategori') == 'Akademik' ? 'px-6 py-2.5 rounded-full bg-primary text-white font-bold text-sm' : 'px-6 py-2.5 rounded-full bg-gray-200 text-black font-bold text-sm' }}">
                    Akademik
                </a>

                <a href="{{ url('/berita?kategori=Kemahasiswaan#filter') }}"
                   class="{{ request('kategori') == 'Kemahasiswaan' ? 'px-6 py-2.5 rounded-full bg-primary text-white font-bold text-sm' : 'px-6 py-2.5 rounded-full bg-gray-200 text-black font-bold text-sm' }}">
                    Kemahasiswaan
                </a>

            </div>

            <div class="flex items-center gap-2 text-primary font-bold uppercase text-xs">
                
            </div>

        </div>
    </div>
</section>
<!-- News Grid Canvas -->
<main class="py-20 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
    
<!-- News Card 1 -->
@foreach ($beritas as $berita)
<a href="{{ route('berita.detail', $berita->id) }}">    
@php
    $kategoriColor = match($berita->kategori) {
        'Informasi umum' => 'bg-green-500 text-white',
        'Kemahasiswaan' => 'bg-blue-500 text-white',
        'Akademik' => 'bg-purple-500 text-white',
        default => 'bg-gray-500 text-white',
    };
@endphp

<article class="group flex flex-col bg-surface-container-low rounded-xl overflow-hidden scale-102-hover-lift transition-all duration-300">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Modern hydroponic indoor farm with glowing purple LED lights and rows of vibrant green lettuce on clean white racks" src="{{ asset('storage/' . $berita->gambar) }}" 
            alt="{{ $berita->judul }}"/>
<div class="absolute top-4 left-4">
<span class="{{ $kategoriColor }} text-[10px] font-black uppercase px-3 py-1 rounded-full tracking-widest shadow-lg">
    {{ $berita->kategori ?? 'Berita' }}
</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<h3 class="text-xl font-display font-bold text-on-surface leading-snug mb-4 group-hover:text-primary transition-colors">
                      {{ $berita->judul }}
                    </h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8 flex-grow">
                        {{ Str::limit($berita->isi, 100) }}
                    </p>
<div class="flex items-center justify-between pt-6 border-t border-outline-variant/20">
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">calendar_today</span>
<span> {{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->translatedFormat('d M Y') }}</span>
</div>
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
</div>
</div>
</div>
</article>
</a>
@endforeach

</div>
<!-- Pagination -->
<div class="mt-20 flex justify-center gap-2">
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-on-primary font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-container-highest text-on-surface-variant font-bold hover:bg-secondary-container transition-colors">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-container-highest text-on-surface-variant font-bold hover:bg-secondary-container transition-colors">3</button>
<span class="w-10 h-10 flex items-center justify-center text-stone-400">...</span>
<button class="w-10 h-10 flex items-center justify-center rounded-lg bg-surface-container-highest text-on-surface-variant font-bold hover:bg-secondary-container transition-colors">12</button>
</div>
</div>
</main>
@endsection