@extends('client.front.layouts.default')

@section('body-class','page-template page-template-tpl-default-elementor page-template-tpl-default-elementor-php page page-id-1031 theme-unico woocommerce-js menu-layer elementor-default elementor-kit-21 elementor-page elementor-page-1031 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit')

@section('facebook')
<!-- facebook plugin -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=732030853805224&autoLogAppEvents=1" nonce="2ecEaPGi"></script>
@endsection


@section('htmlmeta')
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:title" content="BLOG">
<meta property="og:url" content="">

<meta name="twitter:site" content="{{ config('app.name') }}">
<meta name="twitter:title" content="BLOG">

@endsection

@section('content')
<div class="clearfix"></div>

<div class="page-title-wrap pt-img-wrap" style="background:url({{ asset('images/banne.jpg')}}) no-repeat;">
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <div class="pt-caption text-center mt-5">
                <h1>Blog</h1>
                <ul class="bread-crumb clearfix">
                    <li class="breadcrumb-item">
                        <a title="Contact" href="">Home</a>
                    </li>
                    &nbsp;&nbsp;&nbsp; >

                    <li class="breadcrumb-item">Blog</li>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<!--Start blog area-->
<!-- ============================ Blog Grid Start ================================== -->
<section>
    <div class="container">
        <div class="row clearfix">

            <!--Sidebar Start-->

            <div class="content-side col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="blog-news big-detail-wrap">
                    <div class="thm-unit-test">

                        @forelse($posts as $post)
                        <div class="post-1272 post type-post status-publish format-standard has-post-thumbnail hentry category-latest-news category-our-blog tag-lenses tag-technology">

                            <div class="blog-detail-wrap pt-bottom">
                                <!-- Featured Image -->
                                <figure class="img-holder">
                                    <a href="{{ $post->getRoute() }}">
                                        <img width="960" height="450" alt="" decoding="async" data-srcset="{{ asset('images/banne.jpg') }} 1920w, {{ asset('images/banne.jpg') }} 600w, {{ asset('images/banne.jpg') }} 300w, {{ asset('images/banne.jpg') }} 1024w, {{ asset('images/banne.jpg') }} 768w, {{ asset('images/banne.jpg') }} 1536w" data-src="{{ asset('images/banne.jpg') }}" data-sizes="(max-width: 960px) 100vw, 960px" class="img-responsive wp-post-image lazyload" src="{{ asset('images/banne.jpg') }}" />
                                        <noscript>
                                            <img width="960" height="450" src="{{ asset('images/banne.jpg') }}" class="img-responsive wp-post-image" alt="" decoding="async" srcset="{{ asset('images/banne.jpg') }} 1920w, {{ asset('images/banne.jpg') }} 600w, {{ asset('images/banne.jpg') }} 300w, {{ asset('images/banne.jpg') }} 1024w, {{ asset('images/banne.jpg') }} 768w, {{ asset('images/banne.jpg') }} 1536w" sizes="(max-width: 960px) 100vw, 960px" />
                                        </noscript>
                                    </a>
                                    <div class="blog-post-date theme-bg">
                                        {{ $post->created_at->format('M d, Y') }}
                                        <!-- January 5, 2021  -->
                                    </div>
                                </figure>
                                <!-- Blog Content -->
                                <div class="full blog-content">
                                    <div class="post-meta">Par: <a href="" class="author theme-cl">{{ $post->authorId?->name }}</a> </div>

                                    <a href="{{ $post->getRoute() }}">
                                        <h3>{{ $post->title }}</h3>
                                    </a>

                                    <div class="blog-text">
                                        <p>{{ $post->excerpt }}</p>
                                    </div>

                                    <a href="{{ $post->getRoute() }}" class="btn btn-cta">Lire plus</a>
                                </div>

                            </div>

                        </div>
                        @empty
                        <span>Aucun news pour l'instant</span>
                        @endforelse
                    </div>
                    <!--Pagination-->
                    <div class="pagination-wrapper bs-example text-center">
                        {{ $posts->links() }}
                        <!-- <ul class="pagination">
                            <li><span class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="page/2/index.html">2</a></li>
                            <li><a class="next page-numbers" href="page/2/index.html"><i class="fa fa-angle-right"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>

            <!--Sidebar Start-->
            @include('client.front.pages.blog.sidebar', $categories)

        </div>
    </div>
</section>
<!--End blog area-->

@endsection
