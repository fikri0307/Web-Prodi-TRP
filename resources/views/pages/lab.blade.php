@extends('layouts.app')

@section('title', 'Fasilitas & Laboratorium | Teknologi Rekayasa Pangan')

@push('styles')
<style>
    #mainNav {
        background-color: #166a1f;
    }
    .glass-nav {
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
    }
    .editorial-shadow {
        box-shadow: 0 40px 80px -20px rgba(27, 27, 27, 0.08);
    }
    .research-card-hover:hover {
        transform: translateY(-8px) scale(1.01);
    }
</style>
@endpush

@section('content')
<main class="pt-24 pb-20"><section class="px-6 pt-16 pb-12 max-w-4xl mx-auto text-center">
<span class="inline-block px-3 py-1 mb-4 rounded-full bg-secondary-container/50 text-on-secondary-container font-label font-bold text-[10px] tracking-widest uppercase">Informasi Infrastruktur</span>
<h1 class="font-display text-4xl md:text-5xl font-extrabold text-on-surface tracking-tighter leading-tight mb-6">
        Fasilitas &amp; <span class="text-primary">Laboratorium</span>
</h1>
<p class="font-body text-base md:text-lg text-on-surface-variant leading-relaxed mx-auto max-w-2xl">
        Mendukung visi rekayasa pangan masa depan dengan infrastruktur mutakhir. Pusat penelitian kami dirancang untuk menjembatani inovasi biologis dan presisi teknik industri.
    </p>
</section>
<!-- Hero Section -->
<!-- Facilities Grid -->
<section class="bg-surface-container-low px-6 py-24">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
@foreach($fasilitas as $item)
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden research-card-hover transition-all duration-500">
<div class="aspect-[16/10] overflow-hidden">
<img class="w-full h-full object-cover transition-all duration-700 scale-105 group-hover:scale-100" alt="{{ $item->nama }}" src="{{ asset('storage/' . $item->gambar) }}"/>
</div>
<div class="p-8">
<h3 class="font-display text-2xl font-bold text-on-surface mb-3">{{ $item->nama }}</h3>
<p class="text-on-surface-variant font-body text-sm leading-relaxed mb-6 line-clamp-2">
                                {{ $item->deskripsi_singkat }}
                            </p>
<a class="inline-flex items-center gap-2 text-primary font-headline font-bold text-sm group/link" href="{{ route('fasilitas.detail', $item->id) }}">
                                Lihat Detail 
                                <span class="material-symbols-outlined text-sm transition-transform group-hover/link:translate-x-1">arrow_forward</span>
</a>
</div>
</div>
@endforeach
</div>
</div>
</section>

</main>
@endsection

@push('scripts')
<script>
    // Micro-interaction: Card entry animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-y-10');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.research-card-hover').forEach(card => {
        card.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
        observer.observe(card);
    });
</script>
@endpush
