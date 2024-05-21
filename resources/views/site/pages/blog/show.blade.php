@extends('site.layouts.default')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Blog</h2>

                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">News</li>
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
                            <div class="no-mrg">
                                <div class="blog-footer-social">
                                    <span>Partager <i class="fa fa-share-alt"></i></span>

                                    <ul class="list-inline social">
                                        <li><a href="http://www.facebook.com/sharer.php?u=" target="_blank"><i class="fa fa-facebook-f"></i></a></li>

                                        <li><a href="https://twitter.com/share?url=&amp;text=everything-about-performance-appraisals" target="_blank"><i class="fa fa-twitter"></i></a></li>

                                        <li><a href="http://www.linkedin.com/shareArticle?url=&amp;title=everything-about-performance-appraisals"><i class="fa fa-linkedin"></i></a></li>

                                        <li><a href="https://pinterest.com/pin/create/bookmarklet/?url=&amp;description=everything-about-performance-appraisals"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
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
                                    <form action="{{ route('comment.comment')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-form">
                                                    <input type="text" name="name" placeholder="Saisissez le nom ....." />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-form">
                                                    <input type="email" name="email" placeholder="Saisissez l'email....." />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-form">
                                                    <input type="text" name="subject" placeholder="Saisissez l'objet....." />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <textarea name="message" placeholder="Votre message ....."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="single-form">
                                                    {{-- <button class="btn btn-primary btn-hover-dark">
                                                        Post Comment
                                                    </button> --}}
                                                    <input type="submit" class="btn btn-dark btn-hover-primary" value="Poster Commentaire" />
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

                    <!--Sidebar Start-->
                    @include('site.pages.blog.sidebar')
                </div>
            </div>
            <!-- Blog Wrapper End -->
        </div>
    </div>
    <!-- Blog Details Section End -->

@endsection
