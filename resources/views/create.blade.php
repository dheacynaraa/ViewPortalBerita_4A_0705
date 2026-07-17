@extends('master-portal')

@section('title', 'Tambah Berita')

@section('body')

<div class="container mt-5">
    <h2 class="fw-bold mb-4">
        Tambah Berita
    </h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ url('/posts') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul Berita</label>
                    <input type="text"
                           name="title"
                           class="form-control"
                           value="{{ old('title') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Isi Berita</label>
                    <textarea name="content"
                              rows="6"
                              class="form-control"
                              required>{{ old('content') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Publisher</label>
                    <input type="text"
                           name="publisher"
                           class="form-control"
                           value="{{ old('publisher') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Berita</label>
                    <input type="date"
                           name="date"
                           class="form-control"
                           value="{{ old('date') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="published" class="form-select">
                        <option value="yes"
                            {{ old('published') == 'yes' ? 'selected' : '' }}>
                            Yes
                        </option>

                        <option value="no"
                            {{ old('published') == 'no' ? 'selected' : '' }}>
                            No
                        </option>
                    </select>
                    
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Gambar Berita
                    </label>

                    <input type="file"
                           name="image"
                           class="form-control"
                           required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ url('/posts') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan Berita
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop