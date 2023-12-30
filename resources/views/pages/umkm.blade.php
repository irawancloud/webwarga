@section('title')
UMKM Warga
@endsection
@extends('templates.app')
@section('content')
<section style="background-color:#1B9CFC;">
    <div id="particles-bubble" class="particles"></div>
    <div class="container">
        <div class="heading-text text-light text-center">
            <h4 class="fw-600" style="text-shadow: 2px 2px black;">UMKM Warga Tenjo City Residence 3</h4>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row m-b-20">
            <div class="col-lg-12 p-t-10 m-b-20">
                <h3 class="m-b-20">Produk lokal dari Warga Tenjo City Residence 3</h3>
                <p>Merayakan keragaman produk lokal dan mendukung pertumbuhan ekonomi Warga Tenjo City Residence 3 dan Warga sekitar.</p>
            </div>
        </div>
        <!--Product list-->
        <div class="shop">
            <div class="grid-layout grid-3-columns" data-item="grid-item">
                @if ($data->count())
                @foreach ($data as $item)
                <div class="grid-item">
                    <div class="card" style="height: max-content;">
                        <div class="card-body">
                            <div class="product">
                                <div class="product-image">
                                    <a href="/upload/{{ $item->seller_image }}" target="_blank">
                                        <img alt="tcr3" src="/upload/{{ $item->seller_image }}">
                                    </a>
                                    <!-- <div class="product-overlay">
                                        <a href="{{ route('umkmDetail', $item->slug) }}" data-lightbox="ajax">Lihat lebih dekat</a>
                                    </div> -->
                                </div>
                                <div class="product-description">
                                    <div class="product-category">{{ $item->seller_tag }}</div>
                                    <div class="product-title">
                                        <h3>{{ $item->seller_name }}</h3>
                                        <!-- <p>{!! Str::substr($item->description, 0, 20) !!}</p> -->
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('umkmDetail', $item->slug) }}" data-lightbox="ajax"><button class="btn btn-success">Lihat lebih dekat</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div role="alert" class="alert alert-warning alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                    <strong><i class="fa fa-warning"></i> Belum ada seller
                </div>
                @endif
                <!-- end: Blog -->

            </div>
            <hr class="space">
            <!-- Pagination -->
            <ul class="pagination">
                {{ $data->links() }}
            </ul>
            <!-- end: Pagination -->
        </div>
        <!--End: Product list-->
    </div>
</section>
@endsection
