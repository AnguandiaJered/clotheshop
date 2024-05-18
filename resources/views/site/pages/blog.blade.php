@extends('site.layouts.default')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Blog</h2>

                <ul class="breadcrumb">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Blog Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Blog Wrapper Start -->
            <div class="blog-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <a href="{{ route('blog.show')}}"><img src="{{ asset('assets/assets/images/blog/blog-01.jpg')}}" alt="Blog" /></a>

                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="pe-7s-user"></i>
                                                <span> BY:<a href="#">ADMIN</a></span>
                                            </li>
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{ route('blog.show')}}">Unique products that will impress your home.</a>
                                        </h4>
                                        <a href="{{ route('blog.show')}}" class="btn btn-dark btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="gallery-active">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="blog-image swiper-slide">
                                                    <a href="{{ route('blog.show')}}">
                                                        <img src="{{ asset('assets/assets/images/blog/blog-03.jpg')}}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="blog-image swiper-slide">
                                                    <a href="{{ route('blog.show')}}">
                                                        <img src="{{ asset('assets/assets/images/blog/blog-09.jpg')}}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="blog-image swiper-slide">
                                                    <a href="{{ route('blog.show')}}">
                                                        <img src="{{ asset('assets/assets/images/blog/blog-07.jpg')}}" alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-prev">
                                                <i class="pe-7s-angle-left"></i>
                                            </div>
                                            <div class="swiper-button-next">
                                                <i class="pe-7s-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="pe-7s-user"></i>
                                                <span> BY:<a href="#">ADMIN</a></span>
                                            </li>
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{ route('blog.show')}}">Interior designer Nancy, the witch of the unique
                                                space.</a>
                                        </h4>
                                        <a href="{{ route('blog.show')}}" class="btn btn-dark btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="blog-embed">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/EcK4cYmbE0s" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="pe-7s-user"></i>
                                                <span> BY:<a href="#">ADMIN</a></span>
                                            </li>
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{ route('blog.show')}}">Decorate your home with the most modern furnishings.</a>
                                        </h4>
                                        <a href="{{ route('blog.show')}}" class="btn btn-dark btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <a href="{{ route('blog.show')}}"><img src="{{ asset('assets/assets/images/blog/blog-04.jpg')}}" alt="Blog" /></a>

                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="pe-7s-user"></i>
                                                <span> BY:<a href="#">ADMIN</a></span>
                                            </li>
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{ route('blog.show')}}">Spatialize with decorations of the Furns store.</a>
                                        </h4>
                                        <a href="{{ route('blog.show')}}" class="btn btn-dark btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <a href="{{ route('blog.show')}}"><img src="{{ asset('assets/assets/images/blog/blog-06.jpg')}}" alt="Blog" /></a>

                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="pe-7s-user"></i>
                                                <span> BY:<a href="#">ADMIN</a></span>
                                            </li>
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{ route('blog.show')}}">Interior designer Nancy, the witch of the unique
                                                space.</a>
                                        </h4>
                                        <a href="{{ route('blog.show')}}" class="btn btn-dark btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="blog-embed">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="pe-7s-user"></i>
                                                <span> BY:<a href="#">ADMIN</a></span>
                                            </li>
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{ route('blog.show')}}">Best desks that are stylish and functional with storage
                                                space.</a>
                                        </h4>
                                        <a href="{{ route('blog.show')}}" class="btn btn-dark btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <a href="{{ route('blog.show')}}"><img src="{{ asset('assets/assets/images/blog/blog-09.jpg')}}" alt="Blog" /></a>

                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="pe-7s-user"></i>
                                                <span> BY:<a href="#">ADMIN</a></span>
                                            </li>
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{ route('blog.show')}}">10 best extendable dining tables to suit your dinner
                                                party needs.</a>
                                        </h4>
                                        <a href="{{ route('blog.show')}}" class="btn btn-dark btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <a href="{{ route('blog.show')}}"><img src="{{ asset('assets/assets/images/blog/blog-02.jpg')}}" alt="Blog" /></a>

                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="pe-7s-user"></i>
                                                <span> BY:<a href="#">ADMIN</a></span>
                                            </li>
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h4 class="title">
                                            <a href="{{ route('blog.show')}}">Digital technologies are improving and growing the
                                                design industry.</a>
                                        </h4>
                                        <a href="{{ route('blog.show')}}" class="btn btn-dark btn-hover-primary">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                        </div>

                        <!-- Page pagination Start -->
                        <div class="page-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Page pagination End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Sidebar Start -->
                        <div class="sidebar">
                            <!-- Sidebar Widget Start -->
                            <div class="sidebar-widget-02">
                                <div class="widget-search-02">
                                    <form action="#">
                                        <input type="text" placeholder="Search Your Article">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Sidebar Widget End -->
                            <!-- Sidebar Widget Start -->
                            <div class="sidebar-widget-02">

                                <h4 class="widget-title-02">Categories</h4>

                                <div class="widget-archives">
                                    <ul class="widget-link">
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">eCommerce </a></li>
                                        <li><a href="#">Store Furniture</a></li>
                                        <li><a href="#">Offer Products</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Sidebar Widget Start -->
                            <div class="sidebar-widget-02">

                                <h4 class="widget-title-02">Subscribe</h4>

                                <div class="widget-subscribe">
                                    <form action="#">
                                        <input type="text" placeholder="Enter Your Email">
                                        <button class="btn btn-primary btn-hover-dark">Subscribe Now</button>
                                    </form>
                                </div>
                            </div>
                            <!-- Sidebar Widget End -->

                            <!-- Sidebar Widget Start -->
                            <div class="sidebar-widget-02">
                                <h4 class="widget-title-02">Recent Post</h4>

                                <div class="widget-recent-post">
                                    <div class="single-recent-post">
                                        <ul class="blog-meta">
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h5 class="title">
                                            <a href="{{ route('blog.show')}}">Digital technologies are improving and growing the design
                                                industry.</a>
                                        </h5>
                                    </div>
                                    <div class="single-recent-post">
                                        <ul class="blog-meta">
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h5 class="title">
                                            <a href="{{ route('blog.show')}}">Interior designer Nancy, the witch of the unique space.</a>
                                        </h5>
                                    </div>
                                    <div class="single-recent-post">
                                        <ul class="blog-meta">
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h5 class="title">
                                            <a href="{{ route('blog.show')}}">Decorate your home with the most modern furnishings.</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Widget End -->

                        </div>
                        <!-- Sidebar End -->
                    </div>
                </div>
            </div>
            <!-- Blog Wrapper End -->
        </div>
    </div>
    <!-- Blog Section End -->

@endsection
