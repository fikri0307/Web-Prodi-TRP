@extends('layouts.app')

@section('title', 'Beranda | Teknologi Rekayasa Pangan')

@push('styles')
<style>
        :root {
            --primary: #4B9B49;
            --primary-solid: #2E7D32;
            --emerald-50: #f0fdf4;
            --emerald-100: #dcfce7;
            --emerald-200: #bbf7d0;
            --emerald-300: #86efac;
            --emerald-400: #4ade80;
            --emerald-500: #22c55e;
            --emerald-600: #16a34a;
            --emerald-700: #15803d;
            --emerald-800: #166534;
            --emerald-900: #14532d;
            --emerald-950: #052e16;
            --stone-50: #fafaf9;
            --stone-100: #f5f5f4;
            --stone-200: #e7e5e4;
            --stone-300: #d6d3d1;
            --stone-400: #a8a29e;
            --stone-500: #78716c;
            --stone-600: #57534e;
            --stone-700: #44403c;
            --stone-800: #292524;
            --stone-900: #1c1917;
            --stone-950: #0c0a09;
            --background: #ffffff;
            --surface: #ffffff;
            --on-surface: #1c1917;
            --on-surface-variant: #57534e;
            --outline-variant: #e7e5e4;
            --radius-default: 0.25rem;
            --radius-lg: 0.5rem;
            --radius-xl: 0.75rem;
            --max-width: 1536px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--stone-50);
            color: var(--on-surface);
            line-height: 1.5;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        /* Container */
        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        /* Hero Section */
        header {
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            background-color: var(--emerald-900);
        }

        .hero-bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-bg-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay-gradient {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(20, 83, 45, 0.95) 20%, rgba(20, 83, 45, 0.6) 50%, rgba(0, 0, 0, 0.2) 100%);
            z-index: 2;
        }

        .hero-content-container {
            position: relative;
            z-index: 3;
            width: 100%;
        }

        .hero-text-box {
            max-width: 42rem;
            color: white;
        }

        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background-color: var(--emerald-400);
            color: var(--emerald-950);
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-radius: var(--radius-default);
            margin-bottom: 1.5rem;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            color: white;
            line-height: 1.1;
            letter-spacing: -0.025em;
            margin-bottom: 2rem;
        }

        .hero-title span {
            color: var(--emerald-300);
        }

        .hero-desc {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.25rem;
            line-height: 1.625;
            margin-bottom: 2.5rem;
            max-width: 32rem;
        }

        .btn-primary {
            background-color: var(--emerald-500);
            color: white;
            padding: 1rem 2rem;
            border-radius: var(--radius-default);
            font-weight: 700;
            font-size: 0.875rem;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.2);
            transition: all 0.2s;
        }

        .btn-primary:hover {
            background-color: var(--emerald-600);
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 1rem 2rem;
            border-radius: var(--radius-default);
            font-weight: 700;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /* Section Backgrounds */
        .section-padding {
            padding: 6rem 0;
        }

        .section-about {
            background-color: #d9ffd9;
        }

        .section-vision {
            background-color: #d9ffd9; 
            border-top: 1px solid var(--emerald-100);
            border-bottom: 1px solid var(--emerald-100);
        }

        .section-features {
            background-color: white;
        }

        .section-news {
            background-color: #d9ffd9;
            border-top: 1px solid var(--emerald-100);
        }

        /* Content Styles */
        .about-grid {
            display: grid;
            gap: 4rem;
        }

        @media (min-width: 768px) {
            .about-grid {
                grid-template-columns: repeat(12, 1fr);
            }
            .about-left {
                grid-column: span 4;
            }
            .about-right {
                grid-column: span 8;
            }
        }

        .section-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--emerald-900);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            letter-spacing: -0.025em;
        }

        .title-line {
            width: 2rem;
            height: 0.25rem;
            background-color: var(--emerald-600);
        }

        .section-subtitle {
            margin-top: 1.5rem;
            color: var(--stone-500);
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.1em;
        }

        .about-text {
            font-size: 1.25rem;
            color: var(--stone-700);
            line-height: 1.625;
            margin-bottom: 3rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 640px) {
            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .stat-card {
            padding: 2rem;
            background-color: white;
            border: 1px solid var(--stone-200);
            border-radius: var(--radius-lg);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .stat-number {
            display: block;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--emerald-700);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--stone-500);
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        .vm-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
        }

        @media (min-width: 768px) {
            .vm-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .vm-card {
            padding: 2.5rem;
            background: white;
            border-radius: 8px;
            border: 1px solid var(--emerald-100);
            transition: box-shadow 0.3s ease;
        }

        .vm-card:hover {
            box-shadow: 0 10px 15px -3px rgba(75, 155, 73, 0.1);
        }

        .vm-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--emerald-900);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .vm-title-icon {
            color: var(--emerald-600);
        }

        .vm-text {
            color: var(--stone-700);
            line-height: 1.625;
            font-size: 1rem;
        }

        .mission-list {
            list-style: none;
        }

        .mission-item {
            margin-bottom: 1rem;
            display: flex;
            gap: 0.75rem;
            align-items: flex-start;
        }

        .mission-bullet {
            width: 8px;
            height: 8px;
            background-color: var(--emerald-600);
            border-radius: 50%;
            margin-top: 8px;
            flex-shrink: 0;
        }

        .header-center {
            text-align: center;
            margin-bottom: 4rem;
        }

        .header-center h2 {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--emerald-900);
        }

        .header-center p {
            color: var(--stone-600);
            margin-top: 1rem;
            max-width: 42rem;
            margin-left: auto;
            margin-right: auto;
        }

        .keunggulan-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 768px) {
            .keunggulan-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .grid-col-2 {
                grid-column: span 2;
            }
        }

        .card-white {
            background-color: white;
            padding: 2.5rem;
            border-radius: var(--radius-lg);
            border: 1px solid var(--stone-200);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            transition: all 0.2s;
        }

        .card-white:hover {
            border-color: var(--emerald-200);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .card-dark {
            background-color: var(--emerald-800);
            padding: 2.5rem;
            border-radius: var(--radius-lg);
            color: white;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .icon-lg {
            color: var(--emerald-600);
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .card-title-lg {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--emerald-900);
            margin-bottom: 1rem;
        }

        .news-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
        }

        .news-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--emerald-900);
        }

        .btn-view-all {
            color: var(--emerald-700);
            font-weight: 700;
            font-size: 0.875rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .news-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .news-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .news-card {
            background-color: white;
            border: 1px solid var(--stone-200);
            border-radius: var(--radius-lg);
            padding: 1.25rem;
            transition: all 0.3s ease;
            cursor: pointer;
            height: 100%;
        }

        .news-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            border-color: var(--emerald-200);
        }

        .news-thumb {
            aspect-ratio: 16 / 10;
            overflow: hidden;
            border-radius: calc(var(--radius-lg) - 4px);
            background-color: var(--stone-100);
            margin-bottom: 1.25rem;
        }

        .news-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-meta {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--emerald-700);
            background-color: var(--emerald-50);
            padding: 0.25rem 0.5rem;
            border-radius: var(--radius-default);
            align-self: flex-start;
        }

        .news-heading {
            font-size: 1.125rem;
            font-weight: 700;
            color: var(--emerald-900);
            line-height: 1.25;
            margin: 0.75rem 0;
        }

        .news-excerpt {
            color: var(--stone-500);
            font-size: 0.875rem;
            line-height: 1.625;
        }

        footer {
            width: 100%;
            border-top: 1px solid var(--stone-200);
            background-color: var(--stone-100);
        }

        .footer-main {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 4rem 3rem;
            gap: 2rem;
        }

        @media (min-width: 768px) {
            .footer-main {
                flex-direction: row;
                text-align: left;
            }
        }

        .footer-brand-title {
            font-size: 1.125rem;
            font-weight: 700;
            color: var(--stone-900);
            margin-bottom: 0.5rem;
        }

        .footer-brand-desc {
            color: var(--stone-500);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            max-width: 20rem;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
        }

        .footer-links a {
            color: var(--stone-500);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 500;
            text-decoration: none;
        }

        .footer-bottom {
            border-top: 1px solid rgba(231, 229, 228, 0.5);
            padding: 2rem 3rem;
        }

        .footer-bottom-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        @media (min-width: 768px) {
            .footer-bottom-content {
                flex-direction: row;
            }
        }

        .copyright {
            color: var(--stone-500);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.15em;
        }

        .footer-meta-links {
            display: flex;
            gap: 1.5rem;
            font-size: 10px;
            font-weight: 700;
            color: var(--emerald-800);
        }

        .flex-between {
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: space-between;
        }
        .learn-more {
            margin-top: 2rem;
            display: flex;
            align-items: center;
            color: var(--emerald-700);
            font-weight: 700;
            font-size: 0.875rem;
            gap: 0.5rem;
            cursor: pointer;
            text-decoration: none;
        }
        .card-title-white {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }
        .card-text-light {
            color: rgba(209, 250, 229, 0.8);
            font-size: 0.875rem;
            line-height: 1.625;
        }
        .badge-bottom {
            margin-top: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid var(--emerald-700);
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--emerald-300);
        }
        .card-horizontal {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }
        @media (min-width: 768px) {
            .card-horizontal { flex-direction: row; }
        }
        .card-img-small {
            width: 100%;
            height: 12rem;
            overflow: hidden;
            border-radius: 0.375rem;
        }
        @media (min-width: 768px) {
            .card-img-small { width: 33.333333%; }
        }
        .card-img-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-content-side { flex: 1; }

        .card-text {
            color: var(--stone-500);
            line-height: 1.625;
        }
        .news-subtitle { }
    </style>
@endpush

@section('content')
<!-- Hero Section -->
<header>
<div class="hero-bg-image">
<img alt="Agricultural engineering lab" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAH2dZXleeQKdH1LuCvA8ga15TZiPd891Bhqc8RrPye2LnU-S32YSfkUX8jd_HOnEraApMGx9Ch8Jr2FP2eVouUkjBz13IDcDYEdYi5Ixhwrl_6AT-5ULBTe2sMMre3seD2CN-z9Lm-VzfrnJ3Neq1BYcUpMJI4LJTx6h-GxxIFON4oi0ExVYZLJxX7D2fsuTA3tpIcgcZmQFeVzm6MC0c3j1G-kNRECzlrkwCN7J_AmQMepOehVsd_F1qHb5OTlEoXHSWeZ4anc4Jt"/>
</div>
<div class="hero-overlay-gradient"></div>
<div class="container hero-content-container">
<div class="hero-text-box">

<h1 class="hero-title">
                Masa Depan Pangan: <span>Presisi, Organik, Inovatif</span>
</h1>
<p class="hero-desc">
                Menggabungkan rekayasa bioproses dengan keberlanjutan pertanian untuk menghasilkan sistem produksi pangan yang lebih cerdas dan bernilai tinggi.
            </p>
<div class="hero-btns">
<button class="btn-primary" onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' });">Jelajahi Program</button>
</div>
</div>
</div>
</header>
<!-- Tentang Kami Section -->
<section class="section-padding section-about"id="about">
<div class="container about-grid ">
<div class="about-left">
<h2 class="section-title">
<span class="title-line "></span> Tentang Kami
            </h2>
<p class="section-subtitle">Bridging Nature and Tech</p>
</div>
<div class="about-right">
<p class="about-text">
                Departemen Teknologi Rekayasa Pangan (TRP) berdiri sebagai pusat unggulan dalam mengintegrasikan ilmu pertanian tradisional dengan teknologi manufaktur mutakhir. Kami mencetak inovator yang mampu mengubah sumber daya organik menjadi solusi nutrisi global.
            </p>
<div class="stats-grid">
<div class="stat-card">
<span class="stat-number">15+</span>
<span class="stat-label">Laboratorium Cerdas</span>
</div>
<div class="stat-card">
<span class="stat-number">40+</span>
<span class="stat-label">Sinergi Industri</span>
</div>
</div>
</div>
</div>
</section>
<!-- Visi & Misi Section -->
<section class="section-padding section-vision" id="visimisi">
<div class="container">
<div class="vm-grid">
<!-- Visi Card -->
<div class="vm-card">
<h2 class="vm-title">
<span class="material-symbols-outlined vm-title-icon">visibility</span>
                    Visi Kami
                </h2>
<p class="vm-text">
                    MENJADI program studi sarajana terapan yang unggul dalam menghasilkan lulusan yang mampu menciptakan inovasi pangan bernilai tambah, berkontribusi pada ketahanan pangan nasional, dan berdaya saing di pasar global
                </p>
</div>
<!-- Misi Card -->
<div class="vm-card">
<h2 class="vm-title">
<span class="material-symbols-outlined vm-title-icon">track_changes</span>
                    Misi Kami
                </h2>
<ul class="mission-list">
<li class="mission-item">
<span class="mission-bullet"></span>
<p class="vm-text">Menyiapkan lulusan yang memiliki kompetensi yang dibutuhkan oleh industry pangan masa depan, termasuk kemampuan dalam riset, pengembangan produk, dan Manajemen kualitas.</p>
</li>
<li class="mission-item">
<span class="mission-bullet"></span>
<p class="vm-text">Membangun kemitraan yang kuat dengan industri, pemerintah, dan Lembaga  penelitian untuk mendorong pengembangan teknologi pangan di Indonesia</p>
</li>
<li class="mission-item">
<span class="mission-bullet"></span>
<p class="vm-text">Membudayakan semangat kewirausahaan di kalangan mahasiswa melalui berbagai program inkubasi bisnis dan kompetisi bisnis.</p>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Keunggulan Section -->
<section class="section-padding section-features" id="keunggulan">
<div class="container">
<div class="header-center">
<h2>Keunggulan Departemen</h2>
<p>Membangun ekosistem pendidikan yang memadukan etika lingkungan dengan presisi engineering di era digital.</p>
</div>
<div class="keunggulan-grid">
<!-- Card 1 -->
<div class="grid-col-2 card-white">
<div class="flex-between">
<div>
<span class="material-symbols-outlined icon-lg">agriculture</span>
<h3 class="card-title-lg">Dosen Profesional & Berdedikasi</h3>
<p class="card-text" style="max-width: 28rem;">Penerapan metode pembelajaran interaktif dan berbasis riset untuk mencetak lulusan unggul dengan kompetensi yang relevan di industri.</p>
</div>
<a href="/dosen" class="learn-more">
    Pelajari Profilnya <span class="material-symbols-outlined">arrow_right_alt</span>
</a>
</div>
</div>
<!-- Card 2 -->
<div class="card-dark">
<div>
<span class="material-symbols-outlined" style="font-size: 2.5rem; color: var(--emerald-300); margin-bottom: 1rem;">settings_input_component</span>
<h3 class="card-title-white">Smart Pilot Plant</h3>
<p class="card-text-light">Fasilitas pengolahan skala industri yang sepenuhnya terintegrasi dengan sistem pemantauan berbasis IoT.</p>
</div>
<div class="badge-bottom">Industry Standard</div>
</div>
<!-- Card 3 -->
<div class="card-white">
<span class="material-symbols-outlined icon-lg" style="font-size: 1.875rem;">eco</span>
<h3 class="card-title-white" style="color: var(--emerald-900);">Ekosistem Berkelanjutan</h3>
<p class="card-text" style="font-size: 0.875rem;">Fokus pada 'Zero Waste' dalam setiap tahapan pengolahan pangan hasil rekayasa untuk menjaga kelestarian bumi.</p>
</div>
<!-- Card 4 -->
<div class="grid-col-2 card-white">
<div class="card-horizontal">
<div class="card-img-small">
<img alt="Greenhouse" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQBST7d6ggQuTYviB0ktcM2I-FOKkmM1fsf_hJDSNJxBd9P73Y8zjn_7qru-SuvBhaDe8CzVXg9Ef0qTtAhCRcYPFfyczdxsKCgg_hW7wbXsKOVkxCMhzUDyLCci-YlZqtSi8lYt5F8xoHbx8cCKpTNHTcjs5BrSinvYB5V6Qa-8tyEmXZTxL36n_od4W5i_-0hwMMhESjI40K1WXWXhRIvpAd6UXA2nzElRN2dsYM-eGiY2JijgBP3KQvFpgy95sPCAwRbf_oRVcI"/>
</div>
<div class="card-content-side">
<h3 class="card-title-white" style="color: var(--emerald-900);">Ekosistem Laboratorium Modern</h3>
<p class="card-text" style="font-size: 0.875rem;">Didukung fasilitas riset mutakhir berstandar internasional dan instrumen teknologi terkini untuk mendukung inovasi bio-pangan.</p>
<a href="/fasilitas" class="learn-more">
                            laboratorium dan fasilitas <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Berita Terkini Section -->
<section class="section-padding section-news" id="news">
<div class="container">
<div class="news-header">
<div>
<h2 class="news-title">Kanal Berita</h2>
<p class="news-subtitle" style="color: var(--stone-500); margin-top: 0.5rem; font-size: 0.875rem;">Informasi terkini seputar riset dan kegiatan akademik.</p>
</div>
<a class="btn-view-all" href="/berita">
                Lihat Semua Berita <span class="material-symbols-outlined" style="font-size: 0.875rem;">open_in_new</span>
</a>
</div>
<div class="news-grid">

    @foreach ($beritas as $berita)
<a href="{{ route('berita.detail', $berita->id) }}">
<article class="news-card">
    <div class="news-thumb">
        <img 
            src="{{ asset('storage/' . $berita->gambar) }}" 
            alt="{{ $berita->judul }}"
        >
    </div>

    <div class="news-info">
        <span class="news-meta">
            {{ $berita->kategori ?? 'Berita' }} • 
            {{ \Carbon\Carbon::parse($berita->tanggal_dibuat)->translatedFormat('M Y') }}
        </span>

        <h3 class="news-heading">
            {{ $berita->judul }}
        </h3>

        <p class="news-excerpt">
            {{ Str::limit($berita->isi, 100) }}
        </p>
    </div>
</article>
</a>
@endforeach

</div>
</div>
</section>

{{-- @include('components.footer-home') --}}

@endsection

@push('scripts')
<script>
    // Override scroll behavior agar menarget #mainNav dari layout
    // Script navbar sudah ada di layouts/app.blade.php, tidak perlu duplikasi
</script>
@endpush                                