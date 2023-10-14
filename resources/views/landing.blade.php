@extends('layouts.template')

@section('title', 'Landing Page')

@section('content')
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Perpustakaan Ciwastra</h1>
                <p class="lead mb-0">Selamat datang di perpustakaan kami, tempat di mana petualangan literatur dimulai.
                    Jelajahi dunia kata-kata dan pengetahuan yang tak terbatas bersama kami</p>
            </div>
        </div>
    </header>

    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->

            @if ($featured)
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://picsum.photos/seed/picsum/850/350"
                            alt="..."></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $featured->created_at }}</div>
                        <p>{{ $featured->isbn }}</p>
                        <h2 class="card-title h4 text-bold">{{ $featured->judul }}</h2>
                        <p class="">{{ $featured->kategori }} <br>
                            Diterbitkan oleh {{ $featured->penerbit }} <br>
                            Berjumlah {{ $featured->halaman }} halaman
                        </p>
                        <a class="btn btn-primary" href="{{ route('books.show', $featured) }}">Read more →</a>
                    </div>
                </div>
            @endif

            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @forelse ($books as $book)
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://picsum.photos/seed/picsum/700/350"
                                    alt="..."></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $book->created_at }}</div>
                                <p>{{ $book->isbn }}</p>
                                <h2 class="card-title h4 text-bold">{{ $book->judul }}</h2>
                                <p class="">{{ $book->kategori }} <br>
                                    Diterbitkan oleh {{ $book->penerbit }} <br>
                                    Berjumlah {{ $book->halaman }} halaman
                                </p>
                                <a class="btn btn-primary" href="{{ route('books.show', $book) }}">Read more →</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h2 class="card-text mb-auto">No articles found.</h2>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..."
                            aria-label="Enter search term..." aria-describedby="button-search">
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Sci-fi</a></li>
                                <li><a href="#!">Novel</a></li>
                                <li><a href="#!">History</a></li>
                                <li><a href="#!">Biography</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Romance</a></li>
                                <li><a href="#!">Education</a></li>
                                <li><a href="#!">Culinary</a></li>
                                <li><a href="#!">Comic</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam aliquid cumque
                    labore nam! Vel consequatur quod autem voluptatem aliquam doloribus, qui deserunt iste obcaecati facilis
                    optio laudantium! Amet, iste quasi.</div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $books->links() !!}
    </div>
@endsection
