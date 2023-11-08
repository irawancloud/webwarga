<!-- Footer -->
<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row gap-y">
                <div class="col-md-6 col-xl-6">
                    <p>
                        <a href="#"><img src="{{ asset('assets/images/logos/logo_paguyuban.png') }}" alt="logo" width="150"></a>
                    </p>
                    <address>
                        <strong>Tenjo City Residence Tahap 3</strong>
                        <br> Jl. Raya Cileles, Singabangsa,
                        <br> Kec. Tenjo, Kabupaten Bogor,
                        <br> Jawa Barat 16370 <br>
                    </address>
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <!-- Footer widget area 2 -->
                    <div class="widget">
                        <h4>Navigasi</h4>
                        <ul class="list">
                            <li><a href="{{ route('index') }}">Beranda</a></li>
                            <li><a href="{{ route('pengurus') }}">Pengurus</a></li>
                            <li><a href="{{ route('adart') }}">AD ART</a></li>
                            <li><a href="{{ route('programKerja') }}">Program Kerja</a></li>
                            <li><a href="{{ route('dokumentasi') }}">Dokumentasi</a></li>
                        </ul>
                    </div>
                    <!-- end: Footer widget area 2 -->
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <div class="widget">
                        <h4>Navigasi</h4>
                        <ul class="list">
                            <li><a href="{{ route('galeri') }}">Gallery</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('kontak') }}">Kontak</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <p><a class="btn btn-primary btn-block" href="{{ route('kontak') }}">Hubungi Kami</a></p>
                    <br>
                    <!-- Social icons -->
                    <h5>FOLLOW US</h5>
                    <div class="social-icons social-icons-colored social-icons-rounded float-left">
                        <ul>
                            <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- end: Social icons -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy; <?= date('Y') ?>. All Rights Reserved.<a href="#" target="_blank" rel="noopener">Paguyuban TC3</a> </div>
        </div>
    </div>
</footer>
<!-- end: Footer -->
</div>
<!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!--Template functions-->
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="{{ asset('assets/plugins/particles/particles.js') }}" type="text/javascript"></script>
<!-- Partical js base file  -->
<script src="{{ asset('assets/plugins/particles/particles.js') }}" type="text/javascript"></script>
<!--Particles-->
<script src="{{ asset('assets/plugins/particles/particles-dots.js') }}" type="text/javascript"></script>
<!--Particles stars-->
<script src="{{ asset('assets/plugins/particles/particles-stars.js') }}" type="text/javascript"></script>
<!--Particles bubbles-->
<script src="{{ asset('assets/plugins/particles/particles-bubble.js') }}" type="text/javascript"></script>
</body>

</html>