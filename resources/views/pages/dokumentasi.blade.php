@section('title')
Dokumentasi Warga
@endsection
@extends('templates.app')
@section('content')
<section class="background-colored">
    <div id="particles-dots" class="particles"></div>
    <div class="container">
        <div class="heading-text text-light text-center">

        </div>
    </div>
</section>
<!-- end: Particle 1 -->
<div class="container">
    <h2 class="text-center mt-3">Dokumentasi</h2>
    <div class="row">
        <div class="content col-lg-12">
            <div data-lightbox="gallery" class="row">
                <div class="col-lg-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_B_CuufkR5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0AYorfl_6bI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/t58LQYZKxHY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <section id="page-content">
    <div class="container">
        <h2 class="text-center">Dokumentasi</h2>
    </div>
</section> -->
@endsection
