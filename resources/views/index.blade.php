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

    .card h3{
        transition:.3s;
    }

    .card h3:hover{
        transition:.3s;
    }

    .card{
        transition:.3s;
    }

    .card:hover{
        transform:translateY(-3px);
        box-shadow:0 .5rem 1rem rgba(0,0,0,.12)!important;
    }

    .card:hover h3 {
        color: #0d6efd;
    }
</style>

<div class="col-12 mt-4">

    <!-- Welcome User -->
    <div class="col-md-8 mt-5 mb-3">
        <h3>
            Selamat datang,
            <span class="accent">{{ Auth::user()->name }}!</span>
        </h3>
    </div>

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h1 class="fw-bold">
                Berita Terbaru
            </h1>

            <p class="text-muted mb-0">
                Informasi terbaru dan terpercaya.
            </p>
        </div>

        <!-- Tambah Berita -->
        <a href="{{ url('/posts/create') }}" class="btn btn-primary">
            + Tambah Berita
        </a>
    </div>

    @forelse($posts as $post)

    <!-- Berita Card -->
    <div class="card shadow-sm mb-4">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('img/'.$post->image) }}"
                     class="w-100 h-100 rounded-start"
                     style="object-fit:cover;">
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

                    <a href="{{ url('/posts/'.$post->id) }}"
                    class="read-more mt-auto">
                        Baca selengkapnya →
                    </a>

                    <!-- CRUD -->
                    <div class="mt-3">

                        <a href="{{ url('/posts/'.$post->id.'/edit') }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ url('/posts/'.$post->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus berita ini?')">
                                Hapus
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @empty

    <!-- Jika tidak ada berita -->
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