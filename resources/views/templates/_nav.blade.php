<div id="mainMenu">
    <div class="container">
        <nav>
            <ul>
                <li><a href="{{ route('index') }}">Beranda</a></li>
                <li class="dropdown"><a href="#">Paguyuban</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('pengurus') }}">Kepengurusan</a></li>
                        <li><a href="{{ route('adart') }}">AD ART</a></li>
                        <li><a href="{{ route('programKerja') }}">Program Kerja</a></li>
                        <li><a href="{{ route('dokumentasi') }}">Dokumentasi</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('galeri') }}">Gallery</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('kontak') }}">Hubungi Kami</a></li>
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
