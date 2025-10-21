@php
    // Default nilai agar tidak error jika tidak dikirim dari parent view
    $theme = $theme ?? 'light';
    $title = $title ?? 'Default Title';
    $description = $description ?? 'Deskripsi belum ditentukan.';
    $icon = $icon ?? '⭐';
    $badge = $badge ?? null;
@endphp

<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>

<div class="card feature-card h-100 {{ $theme === 'dark' ? 'bg-secondary text-white' : '' }}">
    <div class="card-body">
        <div class="d-flex align-items-center mb-3">
            <span class="fs-2 me-3">{{ $icon }}</span>
            <h5 class="card-title mb-0">{{ $title }}</h5>
        </div>
        <p class="card-text">{{ $description }}</p>

        @if($badge)
            <span class="badge {{ $theme === 'dark' ? 'bg-light text-dark' : 'bg-dark' }}">
                {{ $badge }}
            </span>
        @endif
    </div>
</div>
