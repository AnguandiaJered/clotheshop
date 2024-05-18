@extends('site.layouts.default')

@section('content')
    <!-- Slider Section Start -->
    @include('site.pages.slider')
    <!-- Slider Section End -->

    <!-- Banner Section Start -->
    @include('site.pages.banner')
    <!-- Banner Section End -->

    <!-- New Product Section Start -->
    @include('site.pages.product')
    <!-- New Product Section End -->

    <!-- Call To Action Section Start -->
    <div class="section call-to-action" style="background-image: url(assets/assets/images/bg-1.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Call To Action Content Start -->
                    <div class="call-to-action-content text-center">
                        <h1 class="title">Welcome To Store</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="{{ route('product')}}" class="btn btn-primary btn-hover-dark btn-margin">purchase now</a>
                    </div>
                    <!-- Call To Action Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Section End -->

    <!-- Brand Logo Section Start -->
    <div class="section brand-logo">
        <div class="container">
            <!-- Brand Logo Wrapper Start -->
            <div class="brand-logo-wrapper brand-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Brand Logo Wrapper Start -->
                        <div class="swiper-slide single-brand-02">
                            <img src="{{ asset('assets/assets/images/brand/brand-2-1.png')}}" width="118" height="87" alt="Brand" />
                        </div>
                        <!-- Brand Logo Wrapper End -->
                        <!-- Brand Logo Wrapper Start -->
                        <div class="swiper-slide single-brand-02">
                            <img src="{{ asset('assets/assets/images/brand/brand-2-2.png')}}" width="118" height="87" alt="Brand" />
                        </div>
                        <!-- Brand Logo Wrapper End -->
                        <!-- Brand Logo Wrapper Start -->
                        <div class="swiper-slide single-brand-02">
                            <img src="{{ asset('assets/assets/images/brand/brand-2-3.png')}}" width="118" height="87" alt="Brand" />
                        </div>
                        <!-- Brand Logo Wrapper End -->
                        <!-- Brand Logo Wrapper Start -->
                        <div class="swiper-slide single-brand-02">
                            <img src="{{ asset('assets/assets/images/brand/brand-2-4.png')}}" width="118" height="87" alt="Brand" />
                        </div>
                        <!-- Brand Logo Wrapper End -->
                        <!-- Brand Logo Wrapper Start -->
                        <div class="swiper-slide single-brand-02">
                            <img src="{{ asset('assets/assets/images/brand/brand-2-5.png')}}" width="118" height="87" alt="Brand" />
                        </div>
                        <!-- Brand Logo Wrapper End -->
                    </div>
                </div>
            </div>
            <!-- Brand Logo Wrapper End -->
        </div>
    </div>
    <!-- Brand Logo Section End -->

    <!-- Best Sellers Section Start -->
    @include('site.pages.bestseller')
    <!-- Best Sellers Section End -->

    <!-- Benefit Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Benefit Wrapper Start -->
            <div class="benefit-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="{{ asset('assets/assets/images/icon/icon-1.png')}}" width="70" height="92" alt="Icon" />
                            <h3 class="title">Free Shipping</h3>
                            <p>
                                Get 10% cash back, free shipping, free
                                returns, and more at 1000+ top retailers!
                            </p>
                        </div>
                        <!-- Single Benefit End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="{{ asset('assets/assets/images/icon/icon-2.png')}}" width="70" height="92" alt="Icon" />
                            <h3 class="title">Safe Payment</h3>
                            <p>
                                Get 10% cash back, free shipping, free
                                returns, and more at 1000+ top retailers!
                            </p>
                        </div>
                        <!-- Single Benefit End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Benefit Start -->
                        <div class="single-benefit">
                            <img src="{{ asset('assets/assets/images/icon/icon-3.png')}}" width="70" height="92" alt="Icon" />
                            <h3 class="title">Online Support</h3>
                            <p>
                                Get 10% cash back, free shipping, free
                                returns, and more at 1000+ top retailers!
                            </p>
                        </div>
                        <!-- Single Benefit End -->
                    </div>
                </div>
            </div>
            <!-- Benefit Wrapper End -->
        </div>
    </div>
    <!-- Benefit Section End -->

    <!-- Sale Product Section Start -->
    @include('site.pages.saleproduct')
    <!-- Sale Product Section End -->

    <!-- Product Banner Section Start -->
    @include('site.pages.productbanner')
    <!-- Product Banner Section End -->

@endsection
