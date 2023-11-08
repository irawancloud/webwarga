@section('title')
Susunan Pengurus Okumene
@endsection
@extends('templates.app')
@section('content')
<!-- Particle 1 -->
<section class="background-colored">
    <div id="particles-dots" class="particles"></div>
    <div class="container">
        <div class="heading-text text-light text-center">
            <h4 class="fw-600" style="text-shadow: 2px 2px black;">Okumene</h4>
        </div>
    </div>
</section>
<!-- end: Particle 1 -->
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img class="img-fluid" src="{{ asset('assets/images/pages/struktur paguyuban.png') }}" alt="struktur-organisasi" width="750px">
            </div>
        </div>
    </div>
</section>
@endsection