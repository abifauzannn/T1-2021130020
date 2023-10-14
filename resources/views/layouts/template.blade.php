<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--  -->
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <!-- fungsi config ini dari laravel tujuannya untuk mengeluarkan mengambil valur dari konfigurasi laravel -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <!-- simbol vite -> isikan sebuah array 2 value yang mana isinya adalah alamat yang baru di generate -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing')}}">Perpustakaan</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('landing')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.index')}}">Data Buku</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container">
        @yield('content')
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright © Your Website 2023</p></div>
    </footer>
</body>
</html>
