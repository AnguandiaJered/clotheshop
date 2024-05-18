@extends('client.front.layouts.default')

@section('body-class','page-template page-template-tpl-default-elementor page-template-tpl-default-elementor-php page page-id-1031 theme-unico woocommerce-js menu-layer elementor-default elementor-kit-21 elementor-page elementor-page-1031 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit')

@section('facebook')
<!-- facebook plugin -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=732030853805224&autoLogAppEvents=1" nonce="5f53XpB0"></script>@endsection

@section('htmlmeta')
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:title" content="{{ $post->title }}">
<meta property="og:url" content="{{ $post->getRoute() }}">
<meta property="og:description" content="{{ $post->excerpt }}">

<meta name="twitter:site" content="{{ config('app.name') }}">
<meta name="twitter:title" content="{{ $post->title }}">
<meta name="twitter:description" content="{{ $post->excerpt }}">
<meta name="twitter:card" content="{{ $post->excerpt }}">
<meta name="twitter:card" content="summary_large_image" />
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

                    <li class="breadcrumb-item">News</li>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<section>
    <div class="container">
        <div class="row clearfix">


            <div class="content-side col-xs-12 col-sm-12 col-md-12 col-lg-8">


                <div class="thm-unit-test">

                    <article class="blog-news big-detail-wrap">
                        <div class="blog-detail-wrap">

                            <!-- Featured Image -->
                            <figure class="img-holder">
                                <img width="800" height="450" alt="" decoding="async" data-srcset="{{ asset('images/banne.jpg') }} 1920w, {{ asset('images/banne.jpg') }} 600w, {{ asset('images/banne.jpg') }} 300w, {{ asset('images/banne.jpg') }} 1024w, {{ asset('images/banne.jpg') }} 768w, {{ asset('images/banne.jpg') }} 1536w" data-src="{{ asset('images/banne.jpg') }}" data-sizes="(max-width: 800px) 100vw, 800px" class="img-responsive wp-post-image lazyload" src="{{ asset('images/banne.jpg') }}" /><noscript><img width="800" height="450" src="{{ asset('images/banne.jpg') }}" class="img-responsive wp-post-image" alt="" decoding="async" srcset="{{ asset('images/banne.jpg') }} 1920w, {{ asset('images/banne.jpg') }} 600w, {{ asset('images/banne.jpg') }} 300w, {{ asset('images/banne.jpg') }} 1024w, {{ asset('images/banne.jpg') }} 768w, {{ asset('images/banne.jpg') }} 1536w" sizes="(max-width: 800px) 100vw, 800px" /></noscript>
                                <div class="blog-post-date theme-bg">
                                {{ $post->created_at->format('M d, Y') }} </div>
                            </figure>

                            <!-- Blog Content -->
                            <div class="full blog-content">
                                <div class="post-meta">By: <a href="" class="author theme-cl">{{ $post->authorId->name }}</a> </div>

                                <div class="blog-text">

                                    <div class="text m-b0">
                                        <p>{{ $post->excerpt }}</p>
                                        <p>{!! $post->body !!}</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- <div class="post-meta"><span class="category pot-tags"><a href="" rel="tag">Technology</a> <a href="" rel="tag">Vision</a></span></div> -->
                                </div>
                                <!-- Blog Share Option -->
                                <div class="no-mrg">
                                    <div class="blog-footer-social">
                                        <span>Partager <i class="fa fa-share-alt"></i></span>

                                        <ul class="list-inline social">
                                            <li><a href="http://www.facebook.com/sharer.php?u={{ $post->getRoute() }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>

                                            <li><a href="https://twitter.com/share?url={{ $post->getRoute() }}&amp;text=everything-about-performance-appraisals" target="_blank"><i class="fa fa-twitter"></i></a></li>

                                            <li><a href="http://www.linkedin.com/shareArticle?url={{ $post->getRoute() }}&amp;title=everything-about-performance-appraisals"><i class="fa fa-linkedin"></i></a></li>

                                            <li><a href="https://pinterest.com/pin/create/bookmarklet/?url={{ $post->getRoute() }}&amp;description=everything-about-performance-appraisals"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- Blog Content -->

                        </div>
                    </article>

                    <!--End Single blog Post-->


                    <div class="comment-wrap comments-area post-comments" id="comments">
                        <div class="comment-detail">
                            <!-- <div class="comment-detail-title">
                                <h4>
                                    3 Replies to &ldquo;Everything About Performance Appraisals&rdquo; </h4>
                            </div> -->

                            <div id="singlecomment-detail" class="comment-detail-list">
                            <div class="fb-comments" data-href="https://www.facebook.com/CongoPeaceNetwork" data-width="" data-numposts="5"></div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>

            @include('client.front.pages.blog.sidebar', $categories)

        </div>
    </div>
</section>
<!--End blog area-->


<div class="clearfix"></div>

@endsection
