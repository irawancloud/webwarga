@section('title')
Blog Warga
@endsection
@extends('templates.app')
@section('content')
<section id="page-content">
    <div class="container">
        <!-- post content -->
        <!-- Page title -->
        <div class="page-title">
            <h1>Blog - Warga Tenjo City Tahap 3</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="{{ url('blog') }}">Home</a>
                    </li>
                    <li><a href="{{ url('blogDetail') }}">Blog Detail</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: Page title -->
        <!-- Blog -->
        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            @if ($artikel->count())
            <!-- Post item-->
            @foreach ($artikel as $item)
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image">
                        <a href="#">
                            <img alt="tcr3" src="/upload/{{ $item->blog_image }}">
                        </a>
                        <span class="post-meta-category"><a href="">{{ $item->category }}</a></span>
                    </div>
                    <div class="post-item-description">
                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{ $item->created_at }}</span>
                        <span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>0
                                Comments</a></span>
                        {{-- <h2><a href="{{ route('portfolio.blogdetail', $item->slug) }}">{{ $item->blog_title }} --}}
                        </a></h2>
                        <p>{!! Str::substr($item->article, 0, 100) !!} [.....]</p>
                        <a href="{{ route('blogDetail', $item->slug) }}" class="item-link">Read More
                            <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end: Post item-->
        </div>
        @else
        <div role="alert" class="alert alert-warning alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
            <strong><i class="fa fa-warning"></i> Belum ada Artikel
        </div>
        @endif
        <!-- end: Blog -->
        <!-- Pagination -->
        <ul class="pagination">
            {{ $artikel->links() }}
        </ul>
        <!-- end: Pagination -->
    </div>
    <!-- end: post content -->
</section>
<!-- end: BLOG -->
@endsection
