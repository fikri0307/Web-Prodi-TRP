@extends('layouts.app')

@section('title', 'Detail Dosen | Agricultural Food Engineering')

@push('styles')
<style>
     #mainNav {
        background-color: #166a1f;
    }
    .page-body {
        background-color: var(--surface);
        color: var(--on-surface);
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        -webkit-font-smoothing: antialiased;
    }

    .page-container {
        max-width: 1100px;
        margin: 0 auto;
        margin-left: 170px;  /* ← Tambahkan ini, ubah nilai sesuai keinginan */
        margin-top: 3%;
        padding: 0 2rem;
    }

    main {
        padding: 6rem 0 4rem;
    }

    .breadcrumb {
        margin-bottom: 2rem;
        color: var(--on-surface-variant);
        font-size: 0.95rem;
    }

    .breadcrumb a {
        color: inherit;
        text-decoration: none;
    }

    .profile-grid {
        display: grid;
        grid-template-columns: 300px 1fr;
        gap: 3rem;
        align-items: start;
    }

    @media (max-width: 768px) {
        .profile-grid {
            grid-template-columns: 1fr;
            justify-items: center;
            text-align: center;
        }

        .photo-wrapper {
            width: 300px;
        }
    }

    .photo-wrapper {
        width: 300px;
    }

    .photo-container {
        width: 100%;
        aspect-ratio: 4 / 5;
        border-radius: 0.75rem;
        overflow: hidden;
        background-color: var(--surface-container-low);
        box-shadow: 0 4px 30px rgba(27, 27, 27, 0.04);
    }

    .photo-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: grayscale(100%);
        transition: filter 0.5s ease;
    }

    .photo-container:hover img {
        filter: grayscale(0%);
    }

    .profile-info h1 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 3rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 0.5rem;
        letter-spacing: -0.02em;
    }

    .job-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 1.5rem;
        color: var(--primary);
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .metadata-label {
        font-size: 0.75rem;
        color: var(--outline);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        display: block;
        margin-bottom: 0.25rem;
    }

    .metadata-value {
        font-size: 1.125rem;
        font-weight: 500;
    }


    .academic-section {
        margin-top: 1rem;
        border-top: 1px solid var(--outline-variant);
        padding-top: 0.1rem;
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    .academic-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .academic-item {
        margin-bottom: 1.25rem;
    }

    .degree {
        display: block;
        font-weight: 700;
        color: var(--on-surface);
    }

    .institution {
        display: block;
        color: var(--on-surface-variant);
        font-size: 0.9rem;
    }
</style>
@endpush

@section('content')
<main class="page-body">
    <div class="page-container">
        

        <section class="profile-grid">
            <div class="photo-wrapper">
                <div class="photo-container">
                    <img
                        alt="{{ $dosen->nama }}"
                        src="{{ asset('storage/' . $dosen->foto) }}"
                    />
                </div>
            </div>

            <div class="profile-info">
                <h1>{{ $dosen->nama }}</h1>
                <p class="job-title">{{ $dosen->jabatan }}</p>

                

                <section class="academic-section">
                    <h3 class="section-title">
                        <span class="material-symbols-outlined">school</span>
                        Academic Background
                    </h3>
                    <ul class="academic-list">
                        <li class="academic-item">
                            <span class="degree">Ph.D in Food Science</span>
                            <span class="institution">University of Wageningen, Netherlands</span>
                        </li>
                        <li class="academic-item">
                            <span class="degree">M.Sc in Biotechnology</span>
                            <span class="institution">Institut Teknologi Bandung</span>
                        </li>
                    </ul>
                </section>
            </div>
        </section>
    </div>
</main>
@endsection