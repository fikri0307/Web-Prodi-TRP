
@extends('layouts.app')

@section('title', 'TRP NEWS | Agricultural Food Engineering')

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>




@push('styles')
<style>
    
    /* Override navbar: solid hijau dari awal karena tidak ada hero */
    /* #mainNav {
        background-color: #166a1f;
    } */
</style>
@endpush

@section('content')

<header>
<style>
        .content-canvas{
            text-align: justify;
            /* text-justify: inter-word; */
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .editorial-gradient {
            background: linear-gradient(135deg, #166a1f 0%, #348435 100%);
        }
        .content-canvas {
            max-width: 800px;
            margin: 0 auto;
        }
         #mainNav {
        background-color: #166a1f;
    }
    </style>
</header>
<body class="bg-surface font-body text-on-surface selection:bg-primary-container selection:text-on-primary-container">
<!-- TopNavBar -->

<main class="pt-20">
<!-- Breadcrumbs -->
<!-- News Header -->
<article class="bg-surface px-8 pb-16">
<header class="max-w-4xl mx-auto text-center mb-12">
<h1 class="font-headline text-4xl md:text-6xl font-extrabold text-on-surface leading-tight tracking-tight mb-8">
                   {{ $berita->judul }}
                </h1>
<div class="flex flex-wrap justify-center items-center gap-6 text-sm text-on-surface-variant font-medium"><div class="inline-flex items-center gap-2 px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-[10px] font-bold uppercase tracking-wider"><span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>{{ $berita->kategori }}</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-lg" data-icon="calendar_today">calendar_today</span>
<span> {{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->translatedFormat('d F Y') }}</span>
</div>
</div>
</header>
<!-- Featured Image -->
<div class="max-w-5xl mx-auto mb-16 px-4">
<div class="relative aspect-video w-full overflow-hidden rounded-xl shadow-2xl">
<img src="{{ asset('storage/' . $berita->gambar) }}" 
            alt="{{ $berita->judul }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
</div>
<p class="mt-4 text-center text-sm text-on-surface-variant italic font-body">
            {{ $berita->judul }}
                </p>
</div>
<!-- Content Canvas -->
<div class="content-canvas" id="contentCanvas">    
<div class="prose prose-lg prose-stone max-w-none font-body text-on-surface leading-relaxed space-y-8">
<p class="text-xl font-medium text-on-surface-variant leading-relaxed first-letter:text-6xl first-letter:font-bold first-letter:text-primary first-letter:mr-3 first-letter:float-left">
                         {!! $berita->isi !!}
                    </p>

</div>
<!-- Tags & Social -->
</div>
</article>

<!-- Related News Section -->
<section class="bg-surface-container-low py-24 px-8">
    
<div class="max-w-7xl mx-auto">
<div class="flex justify-between items-end mb-12">
<div>
<span class="text-primary font-bold text-sm uppercase tracking-widest block mb-2">Lanjut Membaca</span>
<h2 class="font-headline text-4xl font-extrabold tracking-tight">Berita Terkait</h2>
</div>
<a class="hidden md:flex items-center gap-2 text-primary font-bold hover:gap-4 transition-all duration-300" href="#">
                        Lihat Semua Berita <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">




<!-- Card 1 -->
@foreach ($beritaTerbaru as $berita)
<a href="{{ route('berita.detail', $berita->id) }}">
<article>
<div class="bg-surface rounded-xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500 group">
<div class="h-56 overflow-hidden">
<img  src="{{ asset('storage/' . $berita->gambar) }}" 
            alt="{{ $berita->judul }}"/>
</div>
<div class="p-8">
<span class="text-[10px] font-bold text-primary uppercase tracking-widest mb-3 block">{{ $berita->kategori ?? 'Berita' }} </span>
<h3 class="font-headline font-bold text-xl mb-4 group-hover:text-primary transition-colors">{{ $berita->judul }}</h3>
<p class="text-sm text-on-surface-variant line-clamp-2 mb-6"> {{ Str::limit($berita->isi, 100) }}</p>
<div class="text-xs font-bold text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="calendar_month">calendar_month</span>
                                {{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->translatedFormat('d M Y') }}
</div>
</div>
</div>
</article>
</a>
@endforeach
<div class="mt-12 text-center md:hidden">
<a class="inline-flex items-center gap-2 text-primary font-bold" href="#">
                        Lihat Semua Berita <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
</section>
</main>
@endsection