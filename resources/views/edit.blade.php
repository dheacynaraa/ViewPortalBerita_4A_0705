@extends('master-portal')

@section('title', 'Edit Berita')

@section('body')

<div class="container mt-5">
    <h2 class="fw-bold mb-4">
        Edit Berita
    </h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ url('/posts/'.$post->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Judul Berita</label>
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ $post->title }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Isi Berita</label>
                    <textarea name="content"
                              rows="6"
                              class="form-control"
                              required>{{ $post->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Publisher</label>
                    <input type="text"
                           name="publisher"
                           class="form-control"
                           value="{{ $post->publisher }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Berita</label>
                    <input type="date"
                           name="date"
                           class="form-control"
                           value="{{ $post->date }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="published" class="form-select">

                        <option value="yes"
                            {{ $post->published == 'yes' ? 'selected' : '' }}>
                            Yes
                        </option>

                        <option value="no"
                            {{ $post->published == 'no' ? 'selected' : '' }}>
                            No
                        </option>

                    </select>

                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label><br>

                    <img src="{{ asset('img/'.$post->image) }}"
                         width="250"
                         class="rounded mb-3">
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Ganti Gambar (Opsional)
                    </label>

                    <input type="file"
                           name="image"
                           class="form-control">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ url('/posts') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop