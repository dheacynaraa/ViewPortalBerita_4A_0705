@extends('master-portal')

@section('title', 'Portal - Kabar Burung')

@section('body')

<style>
    .accent {
        color: #0d6efd;
    }

    .read-more{
        color:#0d6efd;
        font-weight:600;
        text-decoration:none;
    }

    .read-more:hover{
        text-decoration:underline;
    }
    
    .card h3:hover{
        color: #0d6efd;
    }
</style>

<div class="col-12 mt-4">

    <!-- Welcome User -->
    <div class="col-md-8 mt-5 mb-3">
    <h3>Selamat datang, <span class="accent">{{ Auth::user()->name }}!</span></h3>
    <form method="POST" action="{{ url('/logout') }}">
    @csrf
    </form>
    </div>

    <h1 class="fw-bold">
        Berita Terbaru
    </h1>

    <p class="text-muted mb-4">
        Informasi terbaru dan terpercaya.
    </p>

    @forelse($posts as $post)

    <!-- Berita Card -->
    <div class="card shadow-sm mb-4">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('img/'.$post->image) }}"
                    class="w-100 h-100 rounded-start"
                    style="object-fit: cover;">
            </div>

            <div class="col-md-8 d-flex">
                <div class="card-body d-flex flex-column">

                    <h3 class="fw-bold">
                        {{ $post->title }}
                    </h3>

                    <small class="text-muted">
                        {{ $post->publisher }}
                        |
                        {{ \Carbon\Carbon::parse($post->date)->format('d M Y') }}
                    </small>

                    <p class="mt-4">
                        {{ \Illuminate\Support\Str::limit($post->content,170) }}
                    </p>

                    <a href="#"
                    class="text-decoration-none fw-semibold mt-auto">
                        Baca selengkapnya →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Misal tidak ada berita -->
    @empty
        <div class="alert alert-warning text-center p-5">
            Belum ada berita.
        </div>
    @endforelse

    <!-- Tombol Logout -->
    <div class="d-flex justify-content-end mt-4 mb-5">
        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger">
                Logout
            </button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="text-center py-1 border-top">
        <small class="text-muted">
            ©2026 Portal - Kabar Burung. All rights reserved.
        </small>
    </footer>
</div>

@stop