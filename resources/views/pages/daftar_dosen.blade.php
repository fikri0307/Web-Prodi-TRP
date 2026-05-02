@extends('layouts.app')

@section('title', 'Daftar Dosen - Teknik Rekayasa Pangan')

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
        <!-- Lecturer Card 1 -->
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img alt="Dosen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCL1dgC0VE1FbJ9VHvM4Xpw1kesKMpcFGf14IxYcbQrWyzF9j1j0IgouxXTJAdqv9JKbBaDpdkmOz4d66jcrXb-_gsFD-UL-sQGAno3Ha5ulyiliH4CDqPsTW7j0h2tPGKP_hlsKoMcqh_Yz5pnbg_WshljuzBPFVEh5F5Zwf3u3QX_WggN0cDLHHKRUSdMGDr7iH-BGJXUFHHzZ8K2bmt39TE0yPKBO09TiFp2JSgdYGorB4Wt4K0V_KLbcw-Lc2LgCfpVoSsmggN2"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">Professor of Bioprocess</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">Prof. Dr. Ir. Siti Aminah</h3>
                <p class="text-on-surface-variant text-sm font-medium">M.Si., Ph.D.</p>
            </div>
            <div class="absolute top-4 right-4 bg-primary/90 text-on-primary p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-sm">visibility</span>
            </div>
        </div>
        <!-- Lecturer Card 2 -->
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img alt="Dosen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKSoJiw1StQ0i-xRtbOeZoeQo3r0X8pl7-sdEKs8Z4xFe26P0o-vwTtnKQaU09GdGEXWBa4rowFn2fw3WVU1CUgkxOZ7EZKakLFz8OBKAvfjCklUAe1I9J1Xvi39GuHAG90rabCcSQkhlcDmpscJFjTeMmNckcw7LWLFo9BzT6LNu5i5tOClc3Rjshct1xi4zmdy16h4sp3HCcm-JJHKmHVocU6nq3tWmW6X-OUYoLyiiNjbe85ajzSahJARyy7rrPzv6CYYDN6Dif"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">Food Safety Specialist</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">Dr. Ahmad Hidayat</h3>
                <p class="text-on-surface-variant text-sm font-medium">S.Si., M.T.</p>
            </div>
            <div class="absolute top-4 right-4 bg-primary/90 text-on-primary p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-sm">visibility</span>
            </div>
        </div>
        <!-- Lecturer Card 3 -->
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img alt="Dosen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-y6p3pUkfSqbjlFvBMr9ay5neNlgYkQbv1vqDUvTdprl_H6fhwC5BGFw3MB8NQNRjt8ZrzqOZaCo4EQdOfHArqg1snl4jQK21bIllLU772ahGr_FkSgBcQyRpTYlqurR5ujJ64FsvUOBf1XdT1iRwP1u24RzoTnlnusjoZoeCNuo8GvW_oKlC5wIfFC7aOp_QiM_cpoV16EZStTha4XzpUoPilgTvA2Uf6rePYuEcg_F0NTEj6zt8lfktdVkydiRkFSXqhlFse_pk"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">Microbiology Research</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">Dr. Maria Lestari</h3>
                <p class="text-on-surface-variant text-sm font-medium">S.Hut., M.Si.</p>
            </div>
            <div class="absolute top-4 right-4 bg-primary/90 text-on-primary p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-sm">visibility</span>
            </div>
        </div>
        <!-- Lecturer Card 4 -->
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img alt="Dosen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTXghNao4JnOxGz8tiDP26v6RXBb09P-EYSu8C82eglUcjeMsu5sg5wcWRlxlsBaq8GorAiyPbqiyRYRbW258fx8ut1exqTAOOgYfQ-PvNqGXQ8huy_WZbunrTDyYgGdrX0opO-onYTIIfdA0-jg8gAuh6phiTfuqwhf4zwPs80Xja44J-hlZ5RLq2tdunkGnRlECi2N3BlER9mkPTFQ9O4SCejkH2kdDGWvGNOxcio4rLScF4MN25JQDHoqRoTsAxxKkq1x6qxclj"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">Sustainable Agriculture</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">Ir. Bambang Wijaya</h3>
                <p class="text-on-surface-variant text-sm font-medium">M.Eng., Ph.D.</p>
            </div>
            <div class="absolute top-4 right-4 bg-primary/90 text-on-primary p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-sm">visibility</span>
            </div>
        </div>
        <!-- Lecturer Card 5 -->
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img alt="Dosen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDp7-QN5InXQc4FEX2G7nAMeZXSSc5RaW3XEGcs1bSswmfFrDFYcl3uPaPhRy-JTW6BHj4dyGM0wmDN0LEp3PlH87TNxo_eIB_15T37-czlfSCtqLf-6mvZEuzSV_4I-7-uKjBcQYAkF3jDDjh2VXdrT2STKTGBY2Z21F7t87nbwT2KDMa94q28yMjACmSpLsDRr5o8k7BzY1-ih48vauwHWHid91O70llI8xEBlXNADv-7FSdmD2juTxTQNM7WQ90Ulh8BqSdVB4fE"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">Food Chemistry</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">Rina Putri</h3>
                <p class="text-on-surface-variant text-sm font-medium">S.TP., M.Sc.</p>
            </div>
            <div class="absolute top-4 right-4 bg-primary/90 text-on-primary p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-sm">visibility</span>
            </div>
        </div>
        <!-- Lecturer Card 6 -->
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img alt="Dosen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcBxrvxrW9EQ9rIaP_lL-gvKVi4eaW5w7VpThImPvnquy80jWMZ7De2NqwroO0AwWV4kwQwhQuaUy6oDlNYShu_IBflmPi5VtilljRzh5aHqRTGxodTZGVWtHevdkDUj-7RY6Uw2ijYFDbdilV_gyLU-I3xnyjOem1uDV0XHtiTYFBxYZXi6ghmlYtcUwpiWR8-e9R1A_cz44Ow7UsakHmswDbzy4g9OgCnJcwBhZof025jQv1w25fFgNE-PrktVsDBie6y-E3abNb"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">Nutrition Science</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">Dr. Taufik Kurniawan</h3>
                <p class="text-on-surface-variant text-sm font-medium">M.Si., D.Sc.</p>
            </div>
            <div class="absolute top-4 right-4 bg-primary/90 text-on-primary p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-sm">visibility</span>
            </div>
        </div>
        <!-- Lecturer Card 7 -->
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img alt="Dosen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8BUPGA_izwt2lTc__zM1C2uSWWKYIymjBChdYDvP-udKHo1W_I3EKenLlGF8HJeoqYPIjKCAtPcbhJiRyqJV33W650QGyoaTz9JPOHvCXuyfMIkgz7wMXG591k0Hrq0KaX6A61JFHNaitM2sZ6CMnSZibv3puVJgKj2sekcudY5uKesEfKpv2bK7krM28oX7ILGa_BONTjkOE8b1nEutQ0mpi5asmkkm5zoTqOUWWjzuKE1q58CFv1oJdH8wit2lLKj5obAEnnvgH"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">Quality Control</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">Indah Permata</h3>
                <p class="text-on-surface-variant text-sm font-medium">S.T., M.T.</p>
            </div>
            <div class="absolute top-4 right-4 bg-primary/90 text-on-primary p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-sm">visibility</span>
            </div>
        </div>
        <!-- Lecturer Card 8 -->
        <div class="group relative bg-surface-container-low rounded-xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <div class="aspect-[4/5] overflow-hidden">
                <img alt="Dosen" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAt6wXMFOA-hlkHUeFmz6FbYUyQ9Qx-eJfzxwfVTVCbfatV1yne2PetOYbCl4eu7NmE-rHtF3JX4NDb6P7G1ZNPGJPXF2I26gTRbnMmTYtykKVHvN2FivgZAAXXj3ECinjG_-pUKIKpKlAN_tXYo15v0j5PTIgu-96pstShBT5pgfwFxLspUu4HfowaGXz0qZjfjk-Sg5sjpnTfsEOTrlZ9_QgG4CagRt-QpnKsLSbJq9nT3RQTCSaZnZMnKqS4uIjzQQAIT_u5j6n2"/>
            </div>
            <div class="p-6">
                <p class="text-tertiary font-bold text-[10px] tracking-widest uppercase mb-2">Process Engineering</p>
                <h3 class="text-lg font-bold text-on-surface leading-snug mb-1">Prof. Ir. Hendra Gunawan</h3>
                <p class="text-on-surface-variant text-sm font-medium">M.T., Ph.D.</p>
            </div>
            <div class="absolute top-4 right-4 bg-primary/90 text-on-primary p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-sm">visibility</span>
            </div>
        </div>
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