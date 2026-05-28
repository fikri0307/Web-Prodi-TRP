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
        max-width: 1120px;
        margin: 0 auto;
        margin-left: 170px;
        margin-top: 3%;
        padding: 0 2rem;
    }

    main {
        padding: 5rem 0 4rem;
    }

    .detail-header {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .detail-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 2.4rem;
        font-weight: 800;
        letter-spacing: -0.03em;
        margin: 0;
    }

    .detail-subtitle {
        color: var(--on-surface-variant);
        font-size: 0.95rem;
        max-width: 760px;
        margin: 0.5rem 0 0;
    }

    .back-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.8rem 1.2rem;
        border-radius: 999px;
        border: 1px solid rgba(22, 106, 31, 0.18);
        background-color: rgba(22, 106, 31, 0.08);
        color: var(--primary);
        font-weight: 700;
        text-decoration: none;
        transition: background-color 0.25s ease, transform 0.2s ease;
    }

    .back-button:hover {
        background-color: rgba(22, 106, 31, 0.16);
        transform: translateY(-1px);
    }

    .profile-grid {
        display: grid;
        grid-template-columns: minmax(260px, 340px) 1fr;
        gap: 2.5rem;
        align-items: start;
    }

    .photo-wrapper {
        width: 100%;
    }

    .photo-container {
        width: 100%;
        aspect-ratio: 4 / 5;
        border-radius: 1.25rem;
        overflow: hidden;
        background-color: var(--surface-container-low);
        box-shadow: 0 24px 60px rgba(27, 27, 27, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.06);
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

    .profile-info {
        padding: 2rem;
        background-color: var(--surface-container-high);
        border-radius: 1.25rem;
        box-shadow: 0 26px 80px rgba(27, 27, 27, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .profile-info h1 {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 3rem;
        font-weight: 800;
        line-height: 1.05;
        margin: 0;
        letter-spacing: -0.03em;
    }

    .job-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 1.35rem;
        color: var(--primary);
        font-weight: 700;
        margin: 0.75rem 0 1.5rem;
    }

    .badge-group {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.65rem 1rem;
        border-radius: 999px;
        background-color: rgba(22, 106, 31, 0.12);
        color: var(--primary);
        font-size: 0.82rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .meta-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .meta-item {
        padding: 1.5rem 1rem;
        border-radius: 0.95rem;
        background-color: var(--surface);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .metadata-label {
        display: block;
        font-size: 1.5rem;
        color: var(--outline);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 0.35rem;
    }

    .metadata-value {
        font-size: 1.05rem;
        font-weight: 600;
        color: var(--on-surface);
    }

    .academic-section {
        margin-top: 0;
        padding: 1.4rem 1.4rem 1rem;
        background-color: var(--surface);
        border-radius: 1rem;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .academic-section .section-title {
        margin-bottom: 1.25rem;
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin: 0 0 1.5rem;
    }

    .academic-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        gap: 0.5rem;
    }

    .academic-item {
        padding: 0rem 2rem;
        border-radius: 0.95rem;
        background-color: var(--surface);
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .degree {
        display: block;
        font-weight: 700;
        color: var(--on-surface);
        font-size: 1rem;
        margin-bottom: 0.35rem;
    }

    .institution {
        display: block;
        color: var(--on-surface-variant);
        font-size: 0.95rem;
    }

    .no-data {
        color: var(--on-surface-variant);
        font-size: 0.95rem;
    }

    @media (max-width: 900px) {
        .page-container {
            margin-left: 0;
            padding: 0 1.25rem;
        }

        .profile-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
<main class="page-body">
    <div class="page-container">
        <header class="detail-header">
            <div>
                <h1 class="detail-title">Detail Dosen</h1>
                
            </div>
            <a href="{{ route('dosen') }}" class="back-button">Kembali ke Daftar Dosen</a>
        </header>

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

                <div class="meta-grid">
                    <div class="meta-item">
                        <span class="metadata-label">NIP</span>
                        <span class="metadata-value">{{ $dosen->nip ?? '—' }}</span>
                    </div>

                    <section class="academic-section">
                        <div class="section-title">
                            <span class="material-symbols-outlined">school</span>
                            Riwayat Akademik
                        </div>

                        <ul class="academic-list">
                            @forelse($dosen->academicBackgrounds as $background)
                                <li class="academic-item">
                                    <span class="degree">{{ $background->degree }}</span>
                                    <span class="institution">{{ $background->institution }}</span>
                                </li>
                            @empty
                                <li class="academic-item no-data">
                                    Belum ada data riwayat akademik untuk dosen ini.
                                </li>
                            @endforelse
                        </ul>
                    </section>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection