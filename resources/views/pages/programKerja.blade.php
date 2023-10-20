@section('title')
Program Kerja
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
<section id="page-content">
    <div class="container">
        <h2 class="text-center">Program Kerja</h2>
        <!-- Accordion -->
        <div class="toggle accordion accordion-shadow">
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-user"></i>Program Kerja Divisi Humas</h5>
                <div class="ac-content">
                    <p>Berikut adalah program kerja Divisi Humas</p>
                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-heart"></i>Program Kerja Divisi Sosial & Keagamaan</h5>
                <div class="ac-content">
                    <p>Program Kerja Sosial</p>
                    <ul>
                        <li>Membantu penggalangan dana sosial </li>
                        <li>Mengadakan penyuluhan kepada Masyarakat </li>
                        <li>Mengkoordinir Acara Kebangsaan </li>
                        <li>Membantu penggalangan dana sosial </li>
                        <li>Membantu penggalangan dana sosial </li>
                    </ul>
                    <p>Program Kerja Keagamaan</p>
                    <ul>
                        <li>Melaksanakan peribadatan sesuai agama
                            masing masing
                        </li>
                        <li>Mengkordinir Acara /Mempringati hari
                            besar Agama</li>
                        <li>Meningkatkan kesadaran beragama
                            mengajak seluruh warga untuk berbuat
                            kebaikan, rukun sesama warga</li>
                        <li>Membantu Prosesi Kematian Warga
                            berkordinasi dengan DKM/Institusi yang
                            ada</li>
                    </ul>
                    <a href="{{ asset('document/proker-sosial.pdf') }}" target="_blank">
                        <i class="fa fa-file">
                        </i>
                        Download program kerja
                    </a>

                </div>
            </div>
            <div class="ac-item">
                <h5 class="ac-title"><i class="fa fa-cloud"></i>Program Kerja Divisi IT
                </h5>
                <div class="ac-content">
                    <p>Pembuatan Website Paguyuban TCR 3</p>
                    <p>Pembuatan Aplikasi Warga berbasis Web</p>
                </div>
            </div>
        </div>
        <!-- end: Accordion -->
    </div>
</section>
@endsection
