@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="row">
    <div class="col-12">
        {{-- pindahkan posisi mb-4 ke depan agar Blade tidak salah parsing --}}
        <div class="theme-demo mb-4 {{ $theme === 'dark' ? 'bg-dark border-light' : 'bg-white border' }}">
            <h1 class="mb-4">About - Partial Views</h1>
            <p class="lead">
                Halaman ini mendemonstrasikan penggunaan 
                <strong>Partial Views</strong> dengan 
                <code>@@include</code> directive.
            </p>
        </div>

        <h3 class="mb-4">Tim Kami</h3>

        @php
            $avatars = ['&#128187;', '&#127912;', '&#128188;'];
        @endphp

        <div class="row">
            @foreach($team as $member)
                <x-team-member 
                    :name="$member['name']"
                    :role="$member['role']"
                    :theme="$theme"
                    :avatar="$avatars[$loop->index]"
                    :description="'Bergabung sejak 2024 dan berkontribusi dalam pengembangan.'"
                />
            @endforeach
        </div>
    </div>
</div>
@endsection
