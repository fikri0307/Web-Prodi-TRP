@extends('layouts.app')

@section('title', 'Lab Rekayasa Bioproses | Prodi TRP')

@push('styles')
<style>
    #mainNav {
        background-color: #166a1f;
    }
    .data-leaf {
        background-color: rgba(196, 232, 209, 0.5);
        backdrop-filter: blur(4px);
    }
    .tonal-gradient {
        background: linear-gradient(135deg, #166a1f 0%, #348435 100%);
    }
    .asymmetric-grid {
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 4rem;
    }
    @media (max-width: 768px) {
        .asymmetric-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
<!-- Header Section -->
<header class="pt-32 pb-16 px-8 max-w-7xl mx-auto">

<div class="max-w-4xl">
<h1 class="font-display text-5xl md:text-6xl font-extrabold text-primary tracking-tight mb-6">{{ $fasilitas->nama }}</h1>
<p class="text-xl text-on-surface-variant leading-relaxed">
                {{ $fasilitas->deskripsi_singkat }}
            </p>
</div>
</header>
<!-- Main Content Canvas -->
<main class="max-w-7xl mx-auto px-8 pb-24">
<!-- Hero Image -->
<div class="mb-20 rounded-xl overflow-hidden shadow-sm">
<img alt="{{ $fasilitas->nama }}" class="w-full h-[450px] object-cover" src="{{ asset('storage/' . $fasilitas->gambar) }}"/>
</div>
<div class="">
<!-- Left Column: Description & Specs -->
<div class="space-y-16">
<!-- Detailed Description -->
<section>
<div class="flex items-center gap-3 mb-6">
<span class="w-12 h-[2px] bg-primary"></span>
<h2 class="font-display text-sm font-bold tracking-widest text-primary uppercase">Deskripsi Fasilitas</h2>
</div>
<div class="prose text-xl text-on-surface-variant font-body leading-relaxed max-w-none">
{!! nl2br(e($fasilitas->deskripsi_lengkap)) !!}
</div>
</section>
<!-- Spesifikasi & Kapasitas -->
<section class="bg-surface-container-low p-8 rounded-xl">
<h3 class="font-display text-2xl font-bold text-on-surface mb-8">Spesifikasi &amp; Kapasitas</h3>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
<div class="flex flex-col">
<span class="text-label-sm font-bold text-outline tracking-wider uppercase mb-1">Luas Area</span>
<span class="text-2xl font-display font-semibold text-tertiary">{{ $fasilitas->luas_area ?? 'N/A' }}</span>
</div>
<div class="flex flex-col">
<span class="text-label-sm font-bold text-outline tracking-wider uppercase mb-1">Kapasitas Mahasiswa</span>
<span class="text-2xl font-display font-semibold text-tertiary">{{ $fasilitas->kapasitas_mahasiswa ?? 'N/A' }}</span>
</div>
<div class="flex flex-col">
<span class="text-label-sm font-bold text-outline tracking-wider uppercase mb-1">Status Operasional</span>
<div class="flex items-center gap-2">
<span class="data-leaf px-3 py-1 rounded-full text-sm font-semibold text-primary">{{ $fasilitas->status_operasional ?? 'N/A' }}</span>
</div>
</div>
</div>
</section>
<!-- Peralatan Utama -->
</div>
<!-- Right Column: Sidebar / Coordinator -->
</div>
</main>
@endsection

@push('scripts')
<script>
    // Add micro-interaction for equipment list items
    document.querySelectorAll('.asymmetric-grid .space-y-4 > div').forEach(item => {
        item.addEventListener('mouseenter', () => {
            const icon = item.querySelector('.material-symbols-outlined');
            if(icon) icon.style.fontVariationSettings = "'FILL' 1";
        });
        item.addEventListener('mouseleave', () => {
            const icon = item.querySelector('.material-symbols-outlined');
            if(icon) icon.style.fontVariationSettings = "'FILL' 0";
        });
    });
</script>
@endpush
