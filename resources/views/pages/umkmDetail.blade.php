<section id="product-page" class="product-page p-b-0">
    <div class="container">
        @foreach ($data as $item)
        <div class="product">
            <div class="row m-b-40">
                <div class="col-lg-5">
                    <div class="product-image">
                        <!-- Carousel slider -->
                        <div class="gallery" data-items="1" data-loop="false" data-autoplay="false" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="2500" data-lightbox="gallery">
                            <a href="/upload/{{ $item->seller_image }}" data-lightbox="image" title="Shop product image!">
                                <img alt="Shop product image!" src="/upload/{{ $item->seller_image }}">
                            </a>
                        </div>
                        <!-- Carousel slider -->
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-description">
                        <div class="product-category">{{ $item->seller_tag }}</div>
                        <div class="product-title">
                            <h3><a href="#">{{ $item->seller_name }}</a></h3>
                        </div>
                        <p>{!! $item->description !!}</p>
                        <div class="seperator m-t-10 m-b-5"></div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-6 text-start">
                            <h6>Hubungi Seller</h6>
                            <a href="#" class="btn btn-success"><i class="bi bi-whatsapp"></i></i> WhatsApp</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
