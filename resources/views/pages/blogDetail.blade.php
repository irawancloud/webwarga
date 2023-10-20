@section('title')
    Detail Blog
@endsection
@extends('templates.app')
@section('content')
    <!-- Particle 1 -->
    <section class="background-colored">
        <div id="particles-dots" class="particles"></div>
        <div class="container">
            <div class="heading-text text-light text-center">

            </div>
        </div>
    </section>
    <!-- end: Particle 1 -->

    <!-- content -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="content col-lg-9">
                    <!-- Blog -->
                    @foreach ($data as $item)
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="/upload/{{ $item->blog_image }}">
                                            <img alt="Image blog" src="/upload/{{ $item->blog_image }}">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>{{ $item->blog_title }}</h2>
                                        <div class="post-meta">
                                            <span class="post-meta-date"><i
                                                    class="fa fa-calendar-o"></i>{{ $item->created_at }}</span>
                                            <span class="post-meta-comments"><a href=""><i
                                                        class="fa fa-comments-o"></i>0 Comments</a></span>
                                            {{-- <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle, Magazine</a></span> --}}
                                            <div class="post-meta-share">
                                                <a class="btn btn-xs btn-slide btn-facebook" href="#" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span>Facebook</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-instagram" href="#" target="_blank"
                                                    data-width="118">
                                                    <i class="fab fa-instagram"></i>
                                                    <span>Instagram</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-googleplus"
                                                    href="mailto:info@ongkir-express.com" data-width="80">
                                                    <i class="icon-mail"></i>
                                                    <span>Mail</span>
                                                </a>
                                            </div>
                                        </div>
                                        <p>{!! $item->article !!}</p>
                                    </div>
                                    <div class="post-tags">
                                        <a href="#">{{ $item->category }}</a>
                                    </div>
                    @endforeach

                    <div class="post-navigation">
                        @foreach ($prev as $prev)
                            <a href="{{ route('blogDetail', $prev->slug) }}" class="post-prev">
                                <div class="post-prev-title"><span>Previous Post</span>{{ $prev->blog_title }}</div>
                            </a>
                        @endforeach
                        <a href="{{ route('blog') }}" class="post-all">
                            <i class="icon-grid"> </i>
                        </a>
                        @foreach ($next as $next)
                            <a href="{{ route('blogDetail', $next->slug) }}" class="post-next">
                                <div class="post-next-title"><span>Next Post</span>{{ $next->blog_title }}</div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
            <!-- end: Post single item-->
        </div>
        </div>
        <!-- end: content -->
        <!-- Sidebar-->
        <div class="sidebar sticky-sidebar col-lg-3">
            <!--widget newsletter-->
            <div class="widget widget-newsletter">
                <form id="widget-search-form-sidebar" action="search-results-page.html" method="get">
                    <div class="input-group">
                        <input type="text" aria-required="true" name="q" class="form-control widget-search-form"
                            placeholder="Search for pages...">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>

            <!--End: Tabs with Posts-->
            <!-- Sidebar Post -->
            <div class="widget">
                <h4 class="widget-title">Berita Terkini</h4>
                @foreach ($recent as $thumb)
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            {{-- <img alt="" src="/upload/{{ $thumb->blog_image }}"> --}}
                            <div class="post-thumbnail-content">
                                <a href="{{ route('blogDetail', $thumb->slug) }}">{{ $thumb->blog_title }}</a>
                                <span class="post-date"><i class="icon-clock"></i> {{ $thumb->created_at }}</span>
                                {{-- <span class="post-date"><i class="icon-clock"></i>selisih {{ $selisih }}</span> --}}
                                <span class="post-category"><i class="fa fa-tag"></i> {{ $thumb->category }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Sidebar -->
            </div>
            <!-- end: Sidebar-->
        </div>
        </div>
    </section>
@endsection
