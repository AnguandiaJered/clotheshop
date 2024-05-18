@extends('site.layouts.default')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Blog Details</h2>

                <ul class="breadcrumb">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li class="active">Blog Details</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Blog Details Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Blog Wrapper Start -->
            <div class="blog-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Blog Details Wrapper Start -->
                        <div class="blog-details-wrapper">
                            <img src="{{ asset('assets/assets/images/blog/blog-details.jpg')}}" width="770" height="479" alt="Blog Details" />

                            <ul class="blog-meta">
                                <li>
                                    <i class="pe-7s-user"></i>
                                    <span> BY:<a href="#">ADMIN</a></span>
                                </li>
                                <li>
                                    <i class="pe-7s-date"></i>
                                    <span>27 FEB 2023</span>
                                </li>
                            </ul>

                            <h3 class="title">
                                Unique products that will impress your home
                            </h3>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore etholk dolore magna
                                aliqua. Ut enimlo ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut
                                aliquipsn ex ea commodo consequat. Duis aute
                                irure dolor in reprehen
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dol magna aliqua. Ut
                                enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                exea coml consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatu
                                Excepteur sint occaecat cupidatat non
                                proident,
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dol magna aliqua. Ut
                                enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                ex ea com consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatu
                                Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt
                                mollit anim id est laboru Sed ut
                                perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa
                                quae ab illo inventore
                            </p>
                        </div>
                        <!-- Blog Details Wrapper End -->

                        <!-- Blog Comment & Form Start -->
                        <div class="blog-comment-form">
                            <!-- Blog Comment Form Start -->
                            <div class="blog-comment-form section-padding-02">
                                <h3 class="comment-title">
                                    Leave a comment
                                </h3>

                                <div class="comment-form-wrapper">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-form">
                                                    <input type="text" placeholder="Name *" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-form">
                                                    <input type="email" placeholder="Email *" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-form">
                                                    <input type="text" placeholder="Subject (Optinal) *" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <textarea placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <button class="btn btn-primary btn-hover-dark">
                                                        Post Comment
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Blog Comment Form End -->
                        </div>
                        <!-- Blog Comment & Form End -->
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
                            <!-- Sidebar Widget End -->

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
                                            <a href="blog-details-left-sidebar.html">Digital technologies are improving and growing the design
                                                industry.</a>
                                        </h5>
                                    </div>
                                    <div class="single-recent-post">
                                        <ul class="blog-meta">
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h5 class="title">
                                            <a href="blog-details-left-sidebar.html">Interior designer Nancy, the witch of the unique space.</a>
                                        </h5>
                                    </div>
                                    <div class="single-recent-post">
                                        <ul class="blog-meta">
                                            <li><i class="pe-7s-date"></i> <span>27 FEB 2023</span></li>
                                        </ul>
                                        <h5 class="title">
                                            <a href="blog-details-left-sidebar.html">Decorate your home with the most modern furnishings.</a>
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
    <!-- Blog Details Section End -->

@endsection
