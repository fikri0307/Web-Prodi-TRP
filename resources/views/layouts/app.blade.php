<!DOCTYPE html>

<html class="scroll-smooth" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>@yield('title', 'TRP NEWS | Agricultural Food Engineering')</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-dim": "#dcd9d9",
                      "primary": "#166a1f",
                      "secondary-container": "#c4e8d1",
                      "inverse-surface": "#313030",
                      "on-tertiary-fixed-variant": "#3c4d00",
                      "on-secondary-fixed-variant": "#2d4d3c",
                      "surface": "#fcf9f8",
                      "on-tertiary": "#ffffff",
                      "outline-variant": "#bfcab9",
                      "inverse-primary": "#87da7f",
                      "on-background": "#1b1b1b",
                      "on-surface": "#1b1b1b",
                      "on-secondary": "#ffffff",
                      "tertiary-fixed-dim": "#b1d446",
                      "on-primary": "#ffffff",
                      "tertiary": "#4e6400",
                      "surface-bright": "#fcf9f8",
                      "primary-container": "#348435",
                      "secondary-fixed": "#c7ebd4",
                      "on-surface-variant": "#40493d",
                      "surface-container-lowest": "#ffffff",
                      "on-secondary-fixed": "#002113",
                      "surface-container-high": "#eae7e7",
                      "inverse-on-surface": "#f3f0ef",
                      "tertiary-container": "#647e00",
                      "surface-container": "#f0eded",
                      "error": "#ba1a1a",
                      "on-tertiary-container": "#fbffe4",
                      "surface-container-highest": "#e5e2e1",
                      "outline": "#707a6c",
                      "on-error": "#ffffff",
                      "on-error-container": "#93000a",
                      "background": "#fcf9f8",
                      "on-secondary-container": "#496a57",
                      "tertiary-fixed": "#ccf05f",
                      "secondary": "#456553",
                      "primary-fixed-dim": "#87da7f",
                      "primary-fixed": "#a2f799",
                      "on-tertiary-fixed": "#161e00",
                      "error-container": "#ffdad6",
                      "on-primary-container": "#f7fff0",
                      "secondary-fixed-dim": "#abcfb8",
                      "surface-variant": "#e5e2e1",
                      "surface-tint": "#1a6d21",
                      "on-primary-fixed": "#002203",
                      "surface-container-low": "#f6f3f2",
                      "on-primary-fixed-variant": "#005310"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "fontFamily": {
                      "headline": ["Plus Jakarta Sans"],
                      "display": ["Plus Jakarta Sans"],
                      "body": ["Inter"],
                      "label": ["Inter"]
              }
            },
          },
        }
    </script>
<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    .scale-102-hover-lift:hover {
        transform: scale(1.02) translateY(-4px);
    }
    .hero-gradient-overlay {
        background: linear-gradient(135deg, rgba(22, 106, 31, 0.9) 0%, rgba(52, 132, 53, 0.6) 100%);
    }

    #mainNav {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        background-color: transparent;
        height: 80px;
        display: flex;
        align-items: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    #mainNav.scrolled {
        background-color: #2E7D32;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        height: 70px;
    }

    .nav-container {
        max-width: 1536px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .nav-logo {
        font-size: 1.25rem;
        font-weight: 800;
        letter-spacing: -0.05em;
        color: white;
        text-decoration: none;
    }

    .nav-links-wrap {
        display: flex;
        gap: 1rem;
        align-items: center;
        height: 100%;
    }

    .nav-item-wrap {
        position: relative;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .nav-item-link {
        text-decoration: none;
        font-size: 0.875rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.95);
        transition: all 0.2s;
        padding: 0.5rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.25rem;
        cursor: pointer;
    }

    .nav-item-link:hover {
        color: white;
        background-color: rgba(255, 255, 255, 0.15);
        border-radius: 0.25rem;
    }

    .nav-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        min-width: 200px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        border-radius: 0 0 0.5rem 0.5rem;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
        z-index: 110;
        padding: 0.5rem 0;
    }

    .nav-dropdown a {
        color: #44403c !important;
        padding: 0.75rem 1.5rem !important;
        display: block !important;
        font-weight: 500 !important;
        text-decoration: none !important;
        font-size: 0.875rem;
    }

    .nav-dropdown a:hover {
        background-color: #f0fdf4 !important;
        color: #15803d !important;
    }

    .nav-mobile-toggle {
        display: none;
        color: white;
        cursor: pointer;
        background: none;
        border: none;
        padding: 0.5rem;
        z-index: 1001;
    }

    @media (min-width: 1025px) {
        .nav-item-wrap:hover .nav-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    }

    @media (max-width: 1024px) {
        .nav-mobile-toggle {
            display: flex;
            align-items: center;
        }

        .nav-links-wrap {
            position: fixed;
            top: 0;
            right: -100%;
            width: 300px;
            height: 100vh;
            background-color: #2E7D32;
            flex-direction: column;
            gap: 0;
            padding-top: 80px;
            transition: right 0.3s ease-in-out;
            z-index: 999;
            box-shadow: -4px 0 15px rgba(0,0,0,0.2);
            overflow-y: auto;
            align-items: stretch;
        }

        .nav-links-wrap.active {
            right: 0;
        }

        .nav-item-wrap {
            width: 100%;
            flex-direction: column;
            align-items: flex-start;
            height: auto;
        }

        .nav-item-link {
            width: 100%;
            padding: 1rem 2rem;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .nav-dropdown {
            position: static;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.15);
            box-shadow: none;
            opacity: 1;
            visibility: visible;
            transform: none;
            display: none;
            padding: 0;
            border-radius: 0;
        }

        .nav-dropdown.show {
            display: block;
        }

        .nav-dropdown a {
            color: rgba(255,255,255,0.9) !important;
            padding: 0.75rem 3rem !important;
        }

        .nav-dropdown a:hover {
            background-color: rgba(255,255,255,0.1) !important;
            color: white !important;
        }
    }

    /* ===== Footer ===== */
    :root {
        --stone-100: #f5f5f4;
        --stone-200: #e7e5e4;
        --stone-300: #d6d3d1;
        --stone-500: #78716c;
        --stone-900: #1c1917;
        --emerald-800: #166534;
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
        padding: 4rem 1rem;
        gap: 2rem;
        max-width: 1536px;  /* tambahkan ini */
        margin: 0 auto;  
    }
    @media (min-width: 768px) {
        .footer-main { flex-direction: row; text-align: left; align-items: flex-start;}
        
    }
    .footer-brand {
    max-width: 20rem;    /* tambahkan ini */
    flex-shrink: 0;      /* tambahkan ini */
}
    .footer-brand-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: var(--stone-900);
        margin-bottom: 0.5rem;
        white-space: nowrap;
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
         /* ubah wrap → nowrap */
        justify-content: center;
         align-items: center; /* tambahkan ini */
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
        padding: 2rem 1rem;
    }
    .footer-bottom-content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
    }
    @media (min-width: 768px) {
        .footer-bottom-content { flex-direction: row; }
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
</style>
@stack('styles')
</head>
<body class="bg-surface text-on-surface font-body selection:bg-secondary-container selection:text-on-secondary-container">

@include('components.navbar')

@yield('content')

@include('components.footer')

<script>
    const nav = document.getElementById('mainNav');
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');

    // Scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        const icon = menuToggle.querySelector('.material-symbols-outlined');
        icon.textContent = navLinks.classList.contains('active') ? 'close' : 'menu';
    });

    // Mobile dropdown toggle (click-based for 1024px and below)
    document.querySelectorAll('.dropdown-trigger').forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                const dropdown = trigger.nextElementSibling;
                
                // Toggle current
                const isOpen = dropdown.classList.contains('show');
                
                // Close other open dropdowns
                document.querySelectorAll('.nav-dropdown').forEach(d => d.classList.remove('show'));
                
                if (!isOpen) {
                    dropdown.classList.add('show');
                }
            }
        });
    });

    // Close menu on link click (non-dropdown links)
    document.querySelectorAll('.nav-item-link:not(.dropdown-trigger), .nav-dropdown a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            menuToggle.querySelector('.material-symbols-outlined').textContent = 'menu';
        });
    });
</script>
@stack('scripts')
</body>
</html>