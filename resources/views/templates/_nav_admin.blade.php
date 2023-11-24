<div id="mainMenu" class="menu-right">
    <div class="container">
        <nav>
            <ul>
                <li><i class="icon-user-plus x3 text-light"> {{ Auth::user()->name }}</i></li>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('post.index') }}">Blog</a></li>
                <li><a href="{{ route('imageGallery.index') }}">Gallery</a></li>
                <li><a href="{{ route('seller.index') }}">Seller</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="icon-log-out"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>
