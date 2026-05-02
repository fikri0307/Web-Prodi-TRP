<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: transparent;
            height: 80px;
            display: flex;
            align-items: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        nav.scrolled {
            background-color: var(--primary-solid);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            height: 70px;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 800;
            letter-spacing: -0.05em;
            color: white;
            z-index: 1001;
        }

        .nav-links {
            display: none;
            gap: 0.5rem;
            align-items: center;
            height: 100%;
        }

        @media (min-width: 1024px) {
            .nav-links {
                display: flex;
            }
        }

        .nav-item {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .nav-links a, .nav-item > span.nav-trigger {
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.95);
            transition: all 0.2s;
            padding: 0.5rem 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
            cursor: pointer;
        }

        .nav-links a:hover, .nav-item > span.nav-trigger:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: var(--radius-default);
        }

        /* Dropdown Styles Desktop */
        @media (min-width: 1024px) {
            .dropdown-menu {
                position: absolute;
                top: 100%;
                left: 0;
                background-color: white;
                min-width: 200px;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                border-radius: 0 0 var(--radius-lg) var(--radius-lg);
                opacity: 0;
                visibility: hidden;
                transform: translateY(10px);
                transition: all 0.3s ease;
                z-index: 110;
                padding: 0.5rem 0;
            }

            .nav-item:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .dropdown-menu a {
                color: var(--stone-700) !important;
                padding: 0.75rem 1.5rem !important;
                display: block !important;
                font-weight: 500 !important;
                background: transparent !important;
            }

            .dropdown-menu a:hover {
                background-color: var(--emerald-50) !important;
                color: var(--emerald-700) !important;
            }
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
            background-color: white;
        }

        .section-vision {
            background-color: #f7faf7; 
            border-top: 1px solid var(--emerald-100);
            border-bottom: 1px solid var(--emerald-100);
        }

        .section-features {
            background-color: white;
        }

        .section-news {
            background-color: #f7faf7;
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
    
        /* Mobile Menu Styles */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            padding: 0.5rem;
            z-index: 1001;
        }

        @media (max-width: 1023px) {
            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background-color: var(--primary-solid);
                padding: 100px 0 2rem;
                overflow-y: auto;
                z-index: 1000;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-item {
                width: 100%;
                height: auto;
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links a, .nav-item > span.nav-trigger {
                width: 100%;
                padding: 1rem 2rem;
                font-size: 1.125rem;
                justify-content: space-between;
            }

            .dropdown-menu {
                display: none;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.1);
                padding: 0;
                box-shadow: none;
                border-radius: 0;
            }

            .dropdown-menu.show {
                display: block;
            }

            .dropdown-menu a {
                padding-left: 3rem !important;
                font-size: 1rem !important;
                color: rgba(255, 255, 255, 0.85) !important;
            }

            .dropdown-menu a:hover {
                background-color: rgba(255, 255, 255, 0.1) !important;
                color: white !important;
            }

            .nav-item:hover .dropdown-menu {
                display: none; /* Disable hover triggers on mobile */
            }
            .nav-item:hover .dropdown-menu.show {
                display: block;
            }
        }
    </style>
</head>
<body>
<!-- TopNavBar -->
<nav id="mainNav">
<div class="container nav-content">
<div class="logo">AgroEngineering Polytechnic</div>
<div class="nav-links" id="navLinks">
<div class="nav-item">
<a href="#">Beranda</a>
</div>
<div class="nav-item">
<span class="nav-trigger">Programs <span class="material-symbols-outlined dropdown-icon" style="font-size: 1.25rem;">keyboard_arrow_down</span></span>
<div class="dropdown-menu">
<a href="#">Rekayasa Pangan</a>
<a href="#">Teknologi Benih</a>
<a href="#">Mekanisasi Pertanian</a>
<a href="#">Agrobisnis</a>
</div>
</div>
<div class="nav-item">
<span class="nav-trigger">Research <span class="material-symbols-outlined dropdown-icon" style="font-size: 1.25rem;">keyboard_arrow_down</span></span>
<div class="dropdown-menu">
<a href="#">Pangan Presisi</a>
<a href="#">Bioenergi</a>
<a href="#">Publikasi Jurnal</a>
<a href="#">Fasilitas Lab</a>
</div>
</div>
<div class="nav-item">
<span class="nav-trigger">Faculty <span class="material-symbols-outlined dropdown-icon" style="font-size: 1.25rem;">keyboard_arrow_down</span></span>
<div class="dropdown-menu">
<a href="#">Daftar Dosen</a>
<a href="#">Staff Akademik</a>
<a href="#">Profil Peneliti</a>
</div>
</div>
<div class="nav-item">
<a href="#">Admissions</a>
</div>
<div class="nav-item">
<a href="#">Laboratories</a>
</div>
</div>
<div class="nav-actions"></div>
<button aria-label="Toggle Menu" class="menu-toggle" id="menuToggle">
<span class="material-symbols-outlined">menu</span>
</button></div>
</nav>
<!-- Hero Section -->
<header>
<div class="hero-bg-image">
<img alt="Agricultural engineering lab" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAH2dZXleeQKdH1LuCvA8ga15TZiPd891Bhqc8RrPye2LnU-S32YSfkUX8jd_HOnEraApMGx9Ch8Jr2FP2eVouUkjBz13IDcDYEdYi5Ixhwrl_6AT-5ULBTe2sMMre3seD2CN-z9Lm-VzfrnJ3Neq1BYcUpMJI4LJTx6h-GxxIFON4oi0ExVYZLJxX7D2fsuTA3tpIcgcZmQFeVzm6MC0c3j1G-kNRECzlrkwCN7J_AmQMepOehVsd_F1qHb5OTlEoXHSWeZ4anc4Jt"/>
</div>
<div class="hero-overlay-gradient"></div>
<div class="container hero-content-container">
<div class="hero-text-box">
<span class="badge">Agriculture 4.0 &amp; Engineering</span>
<h1 class="hero-title">
                Masa Depan Pangan: <span>Presisi, Organik, Inovatif</span>
</h1>
<p class="hero-desc">
                Menggabungkan rekayasa bioproses dengan keberlanjutan pertanian untuk menghasilkan sistem produksi pangan yang lebih cerdas dan bernilai tinggi.
            </p>
<div class="hero-btns">
<button class="btn-primary">Jelajahi Program</button>
<button class="btn-secondary" style="margin-left: 1rem;">Lihat Riset Kami</button>
</div>
</div>
</div>
</header>
<!-- Tentang Kami Section -->
<section class="section-padding section-about">
<div class="container about-grid">
<div class="about-left">
<h2 class="section-title">
<span class="title-line"></span> Tentang Kami
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
<section class="section-padding section-vision">
<div class="container">
<div class="vm-grid">
<!-- Visi Card -->
<div class="vm-card">
<h2 class="vm-title">
<span class="material-symbols-outlined vm-title-icon">visibility</span>
                    Visi Kami
                </h2>
<p class="vm-text">
                    Menjadi pusat pendidikan vokasi teknologi rekayasa pangan terkemuka di Asia Tenggara yang mengintegrasikan kecerdasan buatan, keberlanjutan hayati, dan kemandirian teknologi untuk mewujudkan kedaulatan pangan global yang tangguh dan bergizi tinggi.
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
<p class="vm-text">Menyelenggarakan pendidikan berbasis praktik industri yang mengutamakan rekayasa presisi dan pengolahan bahan organik secara cerdas.</p>
</li>
<li class="mission-item">
<span class="mission-bullet"></span>
<p class="vm-text">Mengembangkan riset terapan di bidang bioproses dan otomasi pangan untuk menjawab tantangan ketersediaan pangan masa depan.</p>
</li>
<li class="mission-item">
<span class="mission-bullet"></span>
<p class="vm-text">Membangun ekosistem kolaborasi antara akademisi dan industri pangan guna mempercepat komersialisasi inovasi teknologi tepat guna.</p>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Keunggulan Section -->
<section class="section-padding section-features">
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
<h3 class="card-title-lg">Rekayasa Pertanian Presisi</h3>
<p class="card-text" style="max-width: 28rem;">Pemanfaatan data sensor dan otomasi untuk memaksimalkan hasil pangan organik dengan intervensi kimia minimal.</p>
</div>
<div class="learn-more">
                        Pelajari Selengkapnya <span class="material-symbols-outlined">arrow_right_alt</span>
</div>
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
<h3 class="card-title-white" style="color: var(--emerald-900);">Kolaborasi Global Green-Tech</h3>
<p class="card-text" style="font-size: 0.875rem;">Bekerja sama dengan institusi teknologi terkemuka di Belanda dan Jepang untuk riset bio-pangan masa depan.</p>
<div class="learn-more">
                            Program Internasional <span class="material-symbols-outlined">arrow_forward</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Berita Terkini Section -->
<section class="section-padding section-news">
<div class="container">
<div class="news-header">
<div>
<h2 class="news-title">Kanal Berita</h2>
<p class="news-subtitle" style="color: var(--stone-500); margin-top: 0.5rem; font-size: 0.875rem;">Informasi terkini seputar riset dan kegiatan akademik.</p>
</div>
<a class="btn-view-all" href="#">
                Lihat Semua Berita <span class="material-symbols-outlined" style="font-size: 0.875rem;">open_in_new</span>
</a>
</div>
<div class="news-grid">
<!-- News Item 1 Card -->
<article class="news-card">
<div class="news-thumb">
<img alt="Greenhouse tech" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4g681snBZH4iaD9dOyOtF3LJ2tDfTU1nCeMVWX0fW6-QC4DRJjiX3Cyo_eRXYdLJfzZG4k_-F6BlXWcaLSzjEDgqIFOHz10i3PxAX2lshBLidGVTzH6uSXZHWdtRIK2hI00gdO1gYDeFo4eSBRRfgNTNyYVS8GQHr7NaJo3CzA9uI1VP_qKUSfUMKsKRdCL5K0wfVX4MX388SiPpaKh49gXsqnf68Td79XXuQjJ1zDKYS0BM-E-pDuxVlz9uKBapFp0Cq1an9inPW"/>
</div>
<div class="news-info">
<span class="news-meta">Riset • Okt 2024</span>
<h3 class="news-heading">Sistem Vertikal Farming Cerdas Berbasis Machine Learning</h3>
<p class="news-excerpt">Mahasiswa TRP mengembangkan algoritma pengoptimalan nutrisi tanaman secara real-time untuk efisiensi air hingga 90%.</p>
</div>
</article>
<!-- News Item 2 Card -->
<article class="news-card">
<div class="news-thumb">
<img alt="Lab samples" src="https://lh3.googleusercontent.com/aida-public/AB6AXuClhMY7RaYSxnPfwL-yK4F2M2coJeEkFC6LwTMY6L3B7TXGQTD-iCdjjmF9kntUgNdW07WzFL0VC3isWTjLNJ0dLiLTeRlRl0Z3hxiUfgmmkpLLP5Jc-4NrpgahVfxV8h5BSxO8kyjJGV4Lz1z5TKFWOUBgzXYWfjICtypWbTUcRQ8Qp7YrL3_dsMaAm9YOfKqZxqLr5P_XFehhL37-W6BiOrFVqhGgdfKYlXX3e9GiDfq4yOCTOp5_HdHG4lmYgR9Rs1AofpABituw"/>
</div>
<div class="news-info">
<span class="news-meta">Prestasi • Sep 2024</span>
<h3 class="news-heading">Hibah Kompetitif Nasional untuk Pengembangan Probiotik Organik</h3>
<p class="news-excerpt">Tim Dosen TRP berhasil memenangkan pendanaan riset untuk komersialisasi produk minuman kesehatan berbasis fermentasi lokal.</p>
</div>
</article>
<!-- News Item 3 Card -->
<article class="news-card">
<div class="news-thumb">
<img alt="Industry expo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqSNeb5ysXmD_teFmnGIX6bCuGFLNpp-ygL-zo3G1zEnDw865h74FKSzb7LpW0CSkKhs9LnJsFjWb_-QrE-LYYfD-jqzk0FpdMJuidrpGznYv_CEoGexwAomdyo8G218Qk55H_MRNXociECBLwXUb1chHwCRnVCaTeJJ5TI23ilTAarnQuabDTsoMT4Ov5WXFIa7EiJ7UhZ9i_b2QYzGcNRqZtcQVMWzJu4HPFIUCce7xkHvSHtTZI6xQ6MrCNEu-QkJgpyNiU-2zm"/>
</div>
<div class="news-info">
<span class="news-meta">Event • Agu 2024</span>
<h3 class="news-heading">Agri-Food Tech Expo: Menampilkan 20 Prototipe Mahasiswa</h3>
<p class="news-excerpt">Pameran tahunan TRP tahun ini fokus pada automasi pasca panen dan pengolahan limbah organik menjadi kemasan biodegradable.</p>
</div>
</article>
</div>
</div>
</section>
<!-- Footer -->
<footer>
<div class="container footer-main">
<div class="footer-brand">
<div class="footer-brand-title">Polytechnic Dept of Food Engineering</div>
<p class="footer-brand-desc">
                Menjunjung tinggi presisi rekayasa dan kearifan sumber daya organik untuk kedaulatan pangan masa depan.
            </p>
</div>
<div class="footer-links">
<a href="#">Privacy Policy</a>
<a href="#">Research Ethics</a>
<a href="#">Campus Safety</a>
<a href="#">Contact Us</a>
<a href="#">Alumni Portal</a>
</div>
<div class="footer-social" style="display: flex; gap: 1rem;">
<span class="material-symbols-outlined" style="color: var(--emerald-800); cursor: pointer;">language</span>
<span class="material-symbols-outlined" style="color: var(--emerald-800); cursor: pointer;">public</span>
<span class="material-symbols-outlined" style="color: var(--emerald-800); cursor: pointer;">workspace_premium</span>
</div>
</div>
<div class="footer-bottom">
<div class="container footer-bottom-content">
<p class="copyright">
                © 2024 Polytechnic Department of Food Engineering. Precision in Agriculture.
            </p>
<div class="footer-meta-links">
<a href="#" style="text-decoration: none; color: inherit;">Accreditation A</a>
<span class="separator" style="color: var(--stone-300);">|</span>
<a href="#" style="text-decoration: none; color: inherit;">English Version</a>
</div>
</div>
</div>
</footer>
<script>
    const nav = document.getElementById('mainNav');
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    const navTriggers = document.querySelectorAll('.nav-trigger');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        const isOpened = navLinks.classList.contains('active');
        menuToggle.querySelector('.material-symbols-outlined').textContent = isOpened ? 'close' : 'menu';
        
        // Prevent body scroll when menu is open
        document.body.style.overflow = isOpened ? 'hidden' : '';
    });

    // Handle Mobile/Tablet Dropdowns on click
    navTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                const dropdown = trigger.nextElementSibling;
                const icon = trigger.querySelector('.dropdown-icon');
                
                // Toggle current dropdown
                const isShown = dropdown.classList.contains('show');
                
                // Close others
                document.querySelectorAll('.dropdown-menu').forEach(d => d.classList.remove('show'));
                document.querySelectorAll('.dropdown-icon').forEach(i => i.style.transform = 'rotate(0deg)');
                
                if (!isShown) {
                    dropdown.classList.add('show');
                    icon.style.transform = 'rotate(180deg)';
                }
            }
        });
    });

    // Reset styles on window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            navLinks.classList.remove('active');
            document.body.style.overflow = '';
            menuToggle.querySelector('.material-symbols-outlined').textContent = 'menu';
            document.querySelectorAll('.dropdown-menu').forEach(d => d.classList.remove('show'));
            document.querySelectorAll('.dropdown-icon').forEach(i => i.style.transform = '');
        }
    });

    // Close menu when clicking outside (mobile only)
    document.addEventListener('click', (e) => {
        if (window.innerWidth < 1024 && !nav.contains(e.target) && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
            document.body.style.overflow = '';
            menuToggle.querySelector('.material-symbols-outlined').textContent = 'menu';
        }
    });
</script></body></html>