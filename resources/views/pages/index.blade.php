@section('title')
Beranda
@endsection
@extends('templates.app')
@section('content')
<style>
    @media (max-width: 400px) {
        .slider-image {
            background-size: cover;
            /* atau 'contain' */
            background-repeat: no-repeat;
            background-position: center;
        }
    }
</style>
<!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360" style="background-repeat: no-repeat">
    <!-- Slide 1 -->
    <div class="slide kenburns " data-bg-parallax="{{ asset('assets/images/slider/unsplash_home.jpg') }}">

    </div>
    <!-- end: Slide 1 -->
</div>
<!--end: Inspiro Slider -->
<!-- Inspiro Slider -->
<!-- <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true"> -->
<!-- Slide 2 -->
<!-- <div class="slide" data-bg-video="{{ url('assets/images/slider/tc3-all.mp4') }}">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-start text-light"> -->
<!-- Captions -->
<!-- <h1 style="text-shadow: 2px 2px black;">Tenjo City Residence 3</h1>
                <p class="text-small" style="text-shadow: 2px 2px black;">Where Dreams Do Come True</p> -->
<!-- end: Captions -->
<!-- </div>
        </div>
    </div> -->
<!-- end: Slide 2 -->
<!-- </div> -->
<!--end: Inspiro Slider -->
<!-- About Us -->
<section class="fullscreen" data-bg-parallax="">
    <div class="bg-overlay" data-style="5"></div>
    <div class="shape-divider" data-style="4"></div>
    <div class="shape-divider" data-style="4" data-position="top" data-flip-vertical="true"></div>
    <div class="container-wide">
        <div class="container-fullscreen">
            <div data-animate="fadeInLeft" data-animate-delay="50">
                <div class="text-middle text-left">
                    <div class="heading-text text-light col-lg-6 left">
                        <h4 class="fw-800"><strong>Paguyuban TCR3</strong></h4>
                        <p style="text-align:justify">Untuk mewujudkan kerukunan dan kekompakan serta mengukuhkan tali
                            persaudaraan dan
                            silaturahmi antara warga Tenjo City Residence 3 dengan lingkungan sekitarnya dan dengan
                            harapan agar
                            terbentuknya Paguyuban ini dapat menjembatani komunikasi yang baik serta terjalinnya
                            harmonisasi dan
                            menghilangkan kesenjangan khususnya dilingkungan perumahan Tenjo City Residence 3
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: About Us -->

<!-- Visi Misi -->
<section>
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>Visi Misi</h2>
        </div>
        <div class="row">
            <div class="col-lg-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="icon-box effect medium border small">
                    <h3>Visi</h3>
                    <p>Membangun kekompakan khususnya antara Warga Tenjo City Residence 3
                        dan umumnya dengan wilayah sekitar perumahan agar terjalin silaturahmi dan persaudaraan.
                    </p>
                </div>
            </div>

            <div class="col-lg-6" data-animate="fadeInUp" data-animate-delay="0">
                <div class="icon-box effect medium border small">
                    <h3>Misi</h3>
                    <p>Berpartisipasi aktif sebagai warga Tenjo City Residence 3 untuk mewujudkan perumahan yang Aman,
                        Nyaman, Bersih dan Tentram.
                    </p>
                    <p>Bertoleransi antara seluruh warga Tenjo City Residence 3 karena keberagaman Suku, Sosial, Agama
                        agar terciptanya kerukunan di Perumahan Tenjo City Residence 3
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Visi Misi -->
<hr style="border-width: 1px;">
<!-- TEAM -->
<section>
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h4 class="text-decoration-underline">Paguyuban Periode 2023 - 2025</h4>
        </div>
        <div class="row team-members">
            <div class="col-lg-4">
                <div data-animate="fadeInLeft" data-animate-delay="25">
                    <div class="team-member">
                        <div class="team-desc">
                            <h3>Andi Hakim, ST.,MT.</h3>
                            <span>Ketua <br> Tenjo City Residence 3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInLeft" data-animate-delay="25">
                    <div class="team-member">
                        <div class="team-desc">
                            <h3>Agung Wicaksono, S.Kom</h3>
                            <span>Sekretaris <br> Tenjo City Residence 3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div data-animate="fadeInLeft" data-animate-delay="25">
                    <div class="team-member">
                        <div class="team-desc">
                            <h3>David Prakoso Matindas, S.Ak</h3>
                            <span>Bendahara 1 <br> Tenjo City Residence 3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row team-members">
            <div class="col-lg-3">
                <div data-animate="fadeInLeft" data-animate-delay="75">
                    <div class="team-member">
                        <div class="team-desc">
                            <h3>Winarno</h3>
                            <span>Bendahara 2 <br> Tenjo City Residence 3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div data-animate="fadeInLeft" data-animate-delay="75">
                    <div class="team-member">
                        <div class="team-desc">
                            <h3>Irawan</h3>
                            <span>Pusat Informasi <br> Tenjo City Residence 3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div data-animate="fadeInLeft" data-animate-delay="75">
                    <div class="team-member">
                        <div class="team-desc">
                            <h3>Galang Rindu Alam, S.H</h3>
                            <span>Manajemen Asset & Prasarana<br> Tenjo City Residence 3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div data-animate="fadeInLeft" data-animate-delay="75">
                    <div class="team-member">
                        <div class="team-desc">
                            <h3>Rifan</h3>
                            <span>Kepemudaan dan Olah Raga <br> Tenjo City Residence 3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: TEAM -->
@endsection
