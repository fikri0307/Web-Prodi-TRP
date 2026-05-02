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
<section class="py-12 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-8">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-8">
<div class="flex flex-wrap gap-3">
<button class="px-6 py-2.5 rounded-full bg-primary text-on-primary font-bold text-sm transition-all scale-102-hover-lift">Semua</button>
<button class="px-6 py-2.5 rounded-full bg-surface-container-highest text-on-surface-variant font-bold text-sm hover:bg-secondary-container transition-all">Informasi Umum</button>
<button class="px-6 py-2.5 rounded-full bg-surface-container-highest text-on-surface-variant font-bold text-sm hover:bg-secondary-container transition-all">Akademik</button>
<button class="px-6 py-2.5 rounded-full bg-surface-container-highest text-on-surface-variant font-bold text-sm hover:bg-secondary-container transition-all">Kemahasiswaan</button>
</div>
<div class="flex items-center gap-2 text-primary font-bold font-label uppercase text-xs tracking-widest">
<span class="material-symbols-outlined text-sm">filter_list</span>
<span>Sort by: Newest First</span>
</div>
</div>
</div>
</section>
<!-- News Grid Canvas -->
<main class="py-20 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
<!-- News Card 1 -->
<article class="group flex flex-col bg-surface-container-low rounded-xl overflow-hidden scale-102-hover-lift transition-all duration-300">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Modern hydroponic indoor farm with glowing purple LED lights and rows of vibrant green lettuce on clean white racks" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIlcZKOqVlA1GVJEHl9UBAkqxockoqXSCyXvqhJXap9l9r6mQUN3ZR9_Exj2eRPx6Yzg9zpqezRIQAsLN_o3FNUdP4hycZbGva1ffFPaxZcGLYsP-06VpSpk_TxS-xtWeyQi2_YkiKmK52AE5ZA7WrV-msjKSslKmhyymRgtXkxL3aZMylCeZzjhB9tdnwi21N726eXBsiDjKNADl_XPrcMCn9NKHXE2UY-R3ELNdJW38ZiQ-64eiFtLUH0SfFs2_3lMwhz89pnwNB"/>
<div class="absolute top-4 left-4">
<span class="bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-black uppercase px-3 py-1 rounded-full tracking-widest shadow-lg">Informasi Umum</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<h3 class="text-xl font-display font-bold text-on-surface leading-snug mb-4 group-hover:text-primary transition-colors">
                        Peresmian Lab Sensorik Berbasis IoT Untuk Keamanan Pangan
                    </h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8 flex-grow">
                        Departemen TRP secara resmi membuka fasilitas pengujian sensorik terbaru yang mengintegrasikan kecerdasan buatan untuk pemantauan real-time.
                    </p>
<div class="flex items-center justify-between pt-6 border-t border-outline-variant/20">
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">calendar_today</span>
<span>12 Oct 2024</span>
</div>
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">visibility</span>
<span>1,248 views</span>
</div>
</div>
</div>
</article>
<!-- News Card 2 -->
<article class="group flex flex-col bg-surface-container-low rounded-xl overflow-hidden scale-102-hover-lift transition-all duration-300">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Close-up of golden wheat grains being analyzed by a robotic arm in a sterile laboratory environment with soft bokeh background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtnDkIqcvN5xFCxtcWXcXoLskxqt3J0GxX2PsRlLr_fiaqpxXk8Vb5e_Jg9pJLOndkxCzcfqNS7UhjfDHG7I6Y7QNFJvQsncSh5GHkg4Qvwjqx5kB30WsEruCZ1yJw3bsQBqnvnTdMwfi3JW5OUO1jHHOAt-Rxq4MQ8Cb9xpcaEro_gRIQhSyTniAgzX3HiOHrqXNama5NNiKOJ-HWuDcKSjVW4_XDxAMNesO5U1kudJqrXgF8xOGLNCa1ArO5wSqoIogQ1EunDZpz"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary-container text-on-secondary-container text-[10px] font-black uppercase px-3 py-1 rounded-full tracking-widest shadow-lg">Akademik</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<h3 class="text-xl font-display font-bold text-on-surface leading-snug mb-4 group-hover:text-primary transition-colors">
                        Pendaftaran Program Fast-Track Magister Teknologi Pangan Dibuka
                    </h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8 flex-grow">
                        Kesempatan bagi mahasiswa berprestasi untuk menyelesaikan gelar Sarjana dan Magister dalam waktu 5 tahun dengan fokus rekayasa sistem.
                    </p>
<div class="flex items-center justify-between pt-6 border-t border-outline-variant/20">
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">calendar_today</span>
<span>08 Oct 2024</span>
</div>
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">visibility</span>
<span>850 views</span>
</div>
</div>
</div>
</article>
<!-- News Card 3 -->
<article class="group flex flex-col bg-surface-container-low rounded-xl overflow-hidden scale-102-hover-lift transition-all duration-300">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Group of diverse students in laboratory coats working with agricultural drones and sensors in an outdoor research orchard" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBb3aRkf9Nu3A-b6py4YhLB-auYojyhT5uv4uuT8SymAVxde0SjJjKlhWqbzFYPjvfefrAmf5obAsXoXuTyZh1x_s1wBhxVmFwigw7ycpAVCI4n85jwSL0qVfliGbVW9rmC6Nj6ICnqajpIrxDRZBBbju06jfB0vfPFVOwc7gVxi2z1thrAp7rIshMYpwV55qeO5hKJcYPE_GCyOHVgxn_DmoDoKgwf5519Bjya0EycoMSHd_o2YWWd_lpGoUYU-rzcYwS4oKcHf9tG"/>
<div class="absolute top-4 left-4">
<span class="bg-primary-container text-on-primary-container text-[10px] font-black uppercase px-3 py-1 rounded-full tracking-widest shadow-lg">Kemahasiswaan</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<h3 class="text-xl font-display font-bold text-on-surface leading-snug mb-4 group-hover:text-primary transition-colors">
                        Tim Robotika TRP Raih Juara 1 Nasional Inovasi Pertanian
                    </h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8 flex-grow">
                        Mahasiswa berhasil menciptakan prototipe penanam benih otomatis yang mampu bekerja pada lahan miring dengan akurasi tinggi.
                    </p>
<div class="flex items-center justify-between pt-6 border-t border-outline-variant/20">
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">calendar_today</span>
<span>05 Oct 2024</span>
</div>
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">visibility</span>
<span>2,105 views</span>
</div>
</div>
</div>
</article>
<!-- News Card 4 -->
<article class="group flex flex-col bg-surface-container-low rounded-xl overflow-hidden scale-102-hover-lift transition-all duration-300">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Scientist hands holding a digital tablet displaying biological growth data in front of a vertical farm wall" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1a2_ZZBfQTg-xVEBQjM3T_KKSWKlQDoPo0pQgynQes276KH3QSw20gQi7SlTS4pcAdaManfb1PwLFooY5HF9ev62yb8_aC-RelUzS73S48ImzrWz-fG8RI2U8fUow-4c9YiitqjYcAh2eW52PXLz7DINXTNpTgBHBRwYWG35jPRD70c9HQgyATCwwRJxESNrohtvio2fpotyFLDb_GDsM9rhTfsXTq-X7_HVINa0BjMHM6jzlUihx7HWuVulMDb74Ce6JTgb-ksGK"/>
<div class="absolute top-4 left-4">
<span class="bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-black uppercase px-3 py-1 rounded-full tracking-widest shadow-lg">Informasi Umum</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<h3 class="text-xl font-display font-bold text-on-surface leading-snug mb-4 group-hover:text-primary transition-colors">
                        Seminar Internasional: Masa Depan Rantai Pasok Pangan Digital
                    </h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8 flex-grow">
                        Menghadirkan pakar dari Belanda dan Jepang untuk mendiskusikan implementasi blockchain dalam transparansi logistik pangan global.
                    </p>
<div class="flex items-center justify-between pt-6 border-t border-outline-variant/20">
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">calendar_today</span>
<span>28 Sep 2024</span>
</div>
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">visibility</span>
<span>612 views</span>
</div>
</div>
</div>
</article>
<!-- News Card 5 -->
<article class="group flex flex-col bg-surface-container-low rounded-xl overflow-hidden scale-102-hover-lift transition-all duration-300">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Macro photo of fresh green coffee beans in a stainless steel processing machine with dramatic industrial lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLYXJT01XxEsERVtDwGHjCoApowOyC5tOEzZelX4xCJ3k4FDw4qXVLLcl4n7dRo5f95ExwNwFPZBTnH_MuUIue2JYET7dkH9y2-RncwstnXi8rcsvj--q_KTnbb4bgFaSMzNmkgtZ0yNlIe4thpddFL6Y_SniX0qOeMhQTt-MqXePjk7DZD4ea0Kpxr6JdHY5jVcz2zqG2psFOL4E6qFL0e5VcDdqqkoUj3YSlB3A0lU-PLKf0N7qH5TIqRI2P2U1dFhXX3UaYHQl5"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary-container text-on-secondary-container text-[10px] font-black uppercase px-3 py-1 rounded-full tracking-widest shadow-lg">Akademik</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<h3 class="text-xl font-display font-bold text-on-surface leading-snug mb-4 group-hover:text-primary transition-colors">
                        Modul Baru: Rekayasa Pasca Panen Komoditas Tropis
                    </h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8 flex-grow">
                        Kurikulum semester ganjil kini menyertakan studi kasus optimasi pengeringan kopi dan kakao menggunakan energi terbarukan.
                    </p>
<div class="flex items-center justify-between pt-6 border-t border-outline-variant/20">
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">calendar_today</span>
<span>20 Sep 2024</span>
</div>
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">visibility</span>
<span>430 views</span>
</div>
</div>
</div>
</article>
<!-- News Card 6 -->
<article class="group flex flex-col bg-surface-container-low rounded-xl overflow-hidden scale-102-hover-lift transition-all duration-300">
<div class="relative h-64 overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Aerial view of a circular sustainable farm design with different crop sections and a central laboratory building at dawn" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOXkmRg0eptSjmZ7OiVrYiA62O2XYb-uJdPCR0B1oohfw_Wd0oZh37gFZpIMtmNV19222wkAnU-sNzhvo3telMnVr7CAOOTtkSBanWctjqGMEPiRuI7O-zf7-IE3lvn_OITenv99sPNYnKenjWqDxEGhnW7FvCG5cKgTEh7H6YjdSJwYnXVDd_t1eG3tnOH3PGWKcqC-kguBacf02FqoVig7pcYWbkcU8Ww_IrwQJkr3y8DmP3wGPmmZU-8Qs8dIQxU4RjVuKp8p0N"/>
<div class="absolute top-4 left-4">
<span class="bg-primary-container text-on-primary-container text-[10px] font-black uppercase px-3 py-1 rounded-full tracking-widest shadow-lg">Kemahasiswaan</span>
</div>
</div>
<div class="p-8 flex flex-col flex-grow">
<h3 class="text-xl font-display font-bold text-on-surface leading-snug mb-4 group-hover:text-primary transition-colors">
                        Open Recruitment: Asisten Peneliti Laboratorium Arboretum
                    </h3>
<p class="text-on-surface-variant text-sm leading-relaxed mb-8 flex-grow">
                        Dicari mahasiswa semester 5 keatas untuk bergabung dalam proyek pemetaan biodiversitas tanaman pangan lokal.
                    </p>
<div class="flex items-center justify-between pt-6 border-t border-outline-variant/20">
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">calendar_today</span>
<span>15 Sep 2024</span>
</div>
<div class="flex items-center gap-2 text-stone-500 text-xs font-medium">
<span class="material-symbols-outlined text-base">visibility</span>
<span>1,560 views</span>
</div>
</div>
</div>
</article>
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