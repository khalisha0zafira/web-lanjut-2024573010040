@props([
    'theme' => 'light',
    'name' => 'Nama Tidak Dikenal',
    'role' => 'Peran Tidak Diketahui',
    'avatar' => '👤',
    'description' => ''
])

<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>

<div class="col-md-4 mb-4">
    <div class="card {{ $theme === 'dark' ? 'bg-dark border-light' : '' }} h-100">
        <div class="card-body text-center">
            <div class="mb-3">
                <span class="fs-1">{{ $avatar }}</span>
            </div>
            <h5 class="card-title">{{ $name }}</h5>
            <p class="card-text text-muted">{{ $role }}</p>
            <p class="card-text">{{ $description }}</p>
        </div>
    </div>
</div>
