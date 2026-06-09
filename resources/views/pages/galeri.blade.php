@extends('layouts.app')

@section('title', 'Galeri | Teknologi Rekayasa Pangan')
@push('styles')
<style>
    @media (min-width: 768px) {
            .footer-main {
                flex-direction: row;
                text-align: left;
            }
              .footer-bottom-content {
                flex-direction: row;
            }
        }

    /* Override navbar transparent style for this page */
    #mainNav {
        background-color: #2E7D32 !important;
    }
</style>
@endpush
@section('content')

<!-- Gallery Content -->
<main class="py-32 bg-surface min-h-screen">
<div class="max-w-7xl mx-auto px-8">

<div class="mb-12 text-center">
    <h1 class="text-4xl md:text-5xl font-display font-extrabold text-on-surface mb-4">Galeri</h1>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
    
@forelse ($galeris as $galeri)
<!-- Gallery Card -->
<article class="group flex flex-col bg-surface-container-low rounded-xl overflow-hidden scale-102-hover-lift transition-all duration-300 shadow-sm">
<div class="relative h-72 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ asset('storage/' . $galeri->gambar) }}" 
            alt="{{ $galeri->judul }}"/>
</div>
<div class="p-6">
<h3 class="text-lg font-display font-bold text-on-surface leading-snug group-hover:text-primary transition-colors text-center">
                      {{ $galeri->judul }}
                    </h3>
</div>
</article>
@empty
<div class="col-span-full text-center py-10">
    <p class="text-on-surface-variant text-lg">Belum ada foto di galeri.</p>
</div>
@endforelse

</div>

<!-- Pagination -->
<div class="mt-16 flex justify-center gap-2">
    {{ $galeris->links() }}
</div>

</div>
</main>
@endsection
