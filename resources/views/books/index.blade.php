@extends('layouts.template')

@section('content')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Data Buku Perpustakaan Ciwastra</h1>
            </div>
        </div>
    </header>

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
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->halaman }}</td>
                <td>{{ $book->kategori }}</td>
                <td>{{ $book->penerbit }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->isbn) }}" class="btn btn-primary btn-sm">
                        Edit
                    </a>
                    <form action="{{ route('books.destroy', $book->isbn) }}" method="POST" class="d-inline-block">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"
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
@endsection
