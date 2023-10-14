@extends('layouts.template')

@section('content')
<article class="blog-post my-4">
    <h1 class="display-5 fw-bold">{{ $book->judul }}</h1>
    <p class="blog-post-meta">{{ $book->created_at }}</p>
        <img src="https://picsum.photos/seed/picsum/700/350" class="rounded mx-auto d-block my-3">
        <p class="">{{ $book->kategori}} <br>
            Diterbitkan oleh {{ $book->penerbit}} <br>
            Berjumlah {{ $book->halaman}} halaman
        </p>
</article>
@endsection
