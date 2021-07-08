@extends('page.layout')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="mainNav">
        <div class="container">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="d-none d-md-block">H2H <span class="united">UNITED</span><span class="tronik">TRONIK</span></span>
                <span class="d-md-none">H2H UNITEDTRONIK</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Profil</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#advantage">Keunggulan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger logging" data-activity="harga" href="#price">Harga</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#guide">Panduan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#testimoni">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Kontak</a></li>
                    <li class="nav-item d-md-none"><a class="nav-link" href="https://webreport.h2h.unitedtronik.co.id">Webreport</a></li>
                    <li class="nav-item d-md-none"><a class="nav-link" href="https://cetak.webreports.web.id">Cetak struk</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="btn btn-outline-danger btn-block rounded-0 js-scroll-trigger" href="#register">Pendaftaran & Penawaran</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @include('page.profile')
    @include('page.advantage')
    @include('page.price')
    @include('page.guide')
    @include('page.testimoni')
    @include('page.register')
    @include('page.contact')
@endsection
