@extends('master-portal')

@section('title', $post->title)

@section('body')

<div class="container mt-5">
    <a href="{{ url('/posts') }}"
       class="btn btn-secondary mb-4">
        ← Kembali
    </a>

    <div class="card shadow-sm">
        <div class="text-center mb-4">
            <img src="{{ asset('img/'.$post->image) }}"
                class="img-fluid rounded shadow"
                style="max-height:380px; object-fit:cover;">
        </div>

        <div class="card-body">
            <h2 class="fw-bold">
                {{ $post->title }}
            </h2>

            <p class="text-muted">
                {{ $post->publisher }}
                |
                {{ \Carbon\Carbon::parse($post->date)->format('d M Y') }}
            </p>

            <hr>
            <p style="text-align:justify; line-height:1.8;">
                {{ $post->content }}
            </p>
        </div>
    </div>
</div>

@stop