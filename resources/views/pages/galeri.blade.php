@section('title')
Galeri Warga
@endsection
@extends('templates.app')
@section('content')
<section class="background-colored">
    <div id="particles-dots" class="particles"></div>
    <div class="heading-text text-light text-center">
        <h4 class="fw-600" style="text-shadow: 2px 2px black;">Gallery Warga</h4>
    </div>
</section>
<!-- end: Particle 1 -->
<div class="container">
    <div class="mb-5"></div>
    <div class="row">
        <div class="content col-lg-12">
            <div data-animate="fadeInRight" data-animate-delay="50">
                <!--Single image lightbox -->
                @if ($gallery->count())
                <div class=" row">
                    @foreach ($gallery as $item)
                    <div class="col-lg-4">
                        <div class="grid-item">
                            <div class="grid-item-wrap">
                                <div class="grid-image" style="max-height: 200px !important; overflow:auto"> <img alt="Image Lightbox" class="rounded" src="/upload/{{ $item->image_name }}" />
                                </div>
                                <div class="grid-description">
                                    <a data-lightbox="image" href="/upload/{{ $item->image_name }}" class="btn btn-light btn-roundeded">Zoom</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div role="alert" class="alert alert-warning alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                    <strong><i class="fa fa-warning"></i> Belum ada image
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection