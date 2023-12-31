@extends('layouts.template')

@section('title', 'Data Buku')

@section('content')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Data Buku Perpustakaan Ciwastra</h1>
            </div>
        </div>
    </header>

    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <a href="{{ route('books.create') }}" class="btn btn-dark btn-md">
        Tambah Buku
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Judul</th>
                <th>Halaman</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ str_pad($book->isbn, 13, '0', STR_PAD_LEFT) }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->halaman }}</td>
                    <td>{{ $book->kategori }}</td>
                    <td>{{ $book->penerbit }}</td>
                    <td>{{ $book->created_at }}</td>
                    <td>{{ $book->updated_at }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-primary btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm mt-2"
                                onclick="return confirm('Are you sure?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No articles found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $books->links() !!}
    </div>
@endsection
