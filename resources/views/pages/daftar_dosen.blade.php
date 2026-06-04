@extends('layouts.app')

@section('title', 'Daftar Dosen | Teknologi Rekayasa Pangan')

@push('styles')
<style>
    body { font-family: 'Inter', sans-serif; }
    h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }

    /* Override navbar: solid hijau dari awal karena tidak ada hero */
    #mainNav {
        background-color: #166a1f;
    }
</style>
@endpush

@section('content')

<main class="pt-40 pb-20 px-8 max-w-7xl mx-auto">
    <!-- Page Title & Header Section Centered -->
    <div class="mb-16 text-center">
        <span class="text-primary font-bold uppercase tracking-[0.1em] text-xs mb-4 block">Our Experts</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-on-surface leading-tight max-w-2xl mx-auto">
            Daftar Dosen Teknik Rekayasa Pangan
        </h1>
        <div class="h-1 w-24 bg-primary mt-6 mx-auto"></div>
    </div>

    <!-- Faculty Bento Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

        {{-- dosen 1 --}}
        @foreach ($dosens as $dosen)
        <a href="{{ route('dosen.detail', $dosen->id) }}" class="block">
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img  alt="{{ $dosen->nama }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"  src="{{ asset('storage/' . $dosen->foto) }}"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">{{ $dosen->jabatan }}</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">{{ $dosen->nama }}</h3>
                <p class="text-on-surface-variant text-sm font-medium">NIP : {{ $dosen->nip }}</p>
            </div>
           
        </div>
        </a>
         @endforeach
        {{-- dosen 1 end --}}
        <!-- Lecturer Card 1 -->


     
    </div>

    <!-- Contact CTA Section -->
    <div class="mt-24 p-12 bg-surface-container-highest rounded-2xl flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="max-w-xl text-center md:text-left">
            <h2 class="text-2xl font-bold text-on-surface mb-2">Tertarik melakukan riset bersama?</h2>
            <p class="text-on-surface-variant">Hubungi departemen kami untuk kolaborasi akademik, penelitian, atau informasi program studi lebih lanjut.</p>
        </div>
        <button class="bg-primary text-on-primary px-8 py-3 rounded-xl font-bold hover:bg-primary-container transition-colors shadow-lg">
            Hubungi Kami
        </button>
    </div>
</main>
@endsection