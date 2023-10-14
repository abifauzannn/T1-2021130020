@extends('layouts.template')

@section('title', 'Tambah Buku')

@section('content')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Tambah Buku Baru</h1>
                <blockquote>"Setiap buku yang kita tambahkan ke perpustakaan hidup kita adalah langkah kecil <br> menuju
                    pengetahuan yang lebih dalam dan pertumbuhan pribadi yang tak terhingga."</blockquote>
            </div>
        </div>
    </header>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST" class="mb-5">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" name="isbn" id="isbn" maxlength="14" value=" {{ old('isbn') }}" required>
        </div>
        <div class="form-group mt-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" value="{{ old('judul') }}" required>
        </div>
        <div class="form-group mt-3">
            <label for="halaman">Halaman</label>
            <input type="number" class="form-control" name="halaman" id="halaman" value="{{ old('halaman') }}" required>
        </div>
        <div class="form-group mt-3">
            <label for="kategori">Kategori</label>
            <select class="form-control" name="kategori" id="kategori">
                <option value="uncategorized">Uncategorized</option>
                <option value="sci-fi">Science Fiction</option>
                <option value="novel">Novel</option>
                <option value="history">History</option>
                <option value="biography">Biography</option>
                <option value="romance">Romance</option>
                <option value="education">Education</option>
                <option value="culinary">Culinary</option>
                <option value="comic">Comic</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" value="{{old('penerbit')}}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
    </form>
@endsection
