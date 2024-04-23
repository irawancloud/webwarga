<div id="mainMenu">
    <div class="container">
        <nav>
            <ul>
                <li><a href="{{ route('index') }}">Beranda</a></li>
                <li class="dropdown"><a href="#">Organisasi</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('pengurus') }}">Pengurus Paguyuban</a></li>
                        <li><a href="{{ route('dkm') }}">Pengurus DKM</a></li>
                        <li><a href="{{ route('oikumene') }}">Pengurus Oikumene</a></li>
                        <li><a href="{{ route('laporan') }}">Laporan Keuangan Paguyuban</a></li>
                        <!-- <li><a href="#">Program Kerja</a></li> -->
                    </ul>
                </li>
                <li><a href="{{ route('dokumentasi') }}">Dokumentasi</a></li>
                <li><a href="{{ route('galeri') }}">Gallery</a></li>
                <li><a href="{{ route('umkm') }}">UMKM</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('kontak') }}">Kontak</a></li>
                <li>
                    <a href="{{ route('login') }}">
                        <button class="btn btn-primary">Login</button>
                    </a>
                </li>
                {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
            </ul>
        </nav>
    </div>
</div>
