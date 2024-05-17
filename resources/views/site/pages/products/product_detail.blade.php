<!DOCTYPE html>
<html lang="en">

@include('site.layouts.header')

<body>
    <!-- Header Start  -->

    @include('site.layouts.navbar')

    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Product Details</h2>

                <ul class="breadcrumb">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li class="active">Product Details</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Product Details Section Start -->
    <div class="section section-padding-02">
        <div class="container">
            <!-- Product Section Wrapper Start -->
            <div class="product-section-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Product Details Images Start -->
                        <div class="product-details-images">
                            <!-- Details Gallery Images Start -->
                            <div class="details-gallery-images" id="img-container">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide single-img zoom">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-1.jpg')}}" width="570" height="604" alt="Product Image" />
                                        </div>
                                        <div class="swiper-slide single-img zoom">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-2.jpg')}}" width="570" height="604" alt="Product Image" />
                                        </div>
                                        <div class="swiper-slide single-img zoom">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-3.jpg')}}" width="570" height="604" alt="Product Image" />
                                        </div>
                                        <div class="swiper-slide single-img zoom">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-3.jpg')}}" width="570" height="604" alt="Product Image" />
                                        </div>
                                        <div class="swiper-slide single-img zoom">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-4.jpg')}}" width="570" height="604" alt="Product Image" />
                                        </div>
                                        <div class="swiper-slide single-img zoom">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-5.jpg')}}" width="570" height="604" alt="Product Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Details Gallery Images End -->

                            <!-- Details Gallery Thumbs Start -->
                            <div class="details-gallery-thumbs">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-1.jpg')}}" width="88" height="93" alt="Product Thumbnail" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-2.jpg')}}" width="88" height="93" alt="Product Thumbnail" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-3.jpg')}}" width="88" height="93" alt="Product Thumbnail" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-4.jpg')}}" width="88" height="93" alt="Product Thumbnail" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/assets/images/product-details/product-details-5.jpg')}}" width="88" height="93" alt="Product Thumbnail" />
                                        </div>
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
                            <!-- Details Gallery Thumbs End -->
                        </div>
                        <!-- Product Details Images End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Product Details Description Start -->
                        <div class="product-details-description">
                            <h4 class="product-name">
                                High quality vase bottle.
                            </h4>
                            <div class="price">
                                <span class="sale-price">$240.00</span>
                                <span class="old-price">$290.00</span>
                            </div>

                            <div class="product-color">
                                <span class="lable">Color:</span>
                                <ul>
                                    <li>
                                        <input type="radio" name="colors" id="color1" />
                                        <label for="color1"><span class="color-blue"></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="color2" />
                                        <label for="color2"><span class="color-gray"></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="color3" />
                                        <label for="color3"><span
                                                    class="color-dark-blue"
                                                ></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="color4" />
                                        <label for="color4"><span
                                                    class="color-gray-dark"
                                                ></span></label>
                                    </li>
                                </ul>
                            </div>

                            <p>
                                Lorem ipsum dolor sit amet, consectet
                                adipisicing elit, sed do eiusmod temporf
                                incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis tyu nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate.
                            </p>

                            <div class="product-meta">
                                <div class="product-quantity d-inline-flex">
                                    <button type="button" class="sub">
                                        -
                                    </button>
                                    <input type="text" value="1" />
                                    <button type="button" class="add">
                                        +
                                    </button>
                                </div>
                                <div class="meta-action">
                                    <button class="btn btn-dark btn-hover-primary">
                                        Add To Cart
                                    </button>
                                </div>
                                <div class="meta-action">
                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="meta-action">
                                    <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>

                            <div class="product-info">
                                <div class="single-info">
                                    <span class="lable">SKU:</span>
                                    <span class="value">Ch-256xl</span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">Categories:</span>
                                    <span class="value"
                                            ><a href="#">Office,</a>
                                            <a href="#">Home</a></span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">tag:</span>
                                    <span class="value"
                                            ><a href="#">Furniture</a></span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">Share:</span>
                                    <ul class="social">
                                        <li>
                                            <a href="#"><i
                                                        class="fa fa-facebook-f"
                                                    ></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i
                                                        class="fa fa-dribbble"
                                                    ></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i
                                                        class="fa fa-pinterest-p"
                                                    ></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i
                                                        class="fa fa-twitter"
                                                    ></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i
                                                        class="fa fa-linkedin"
                                                    ></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details Description End -->
                    </div>
                </div>
            </div>
            <!-- Product Section Wrapper End -->
        </div>
    </div>
    <!-- Product Details Section End -->

    <!-- Sale Product Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="">
                <!-- Product Wrapper Start -->
                <div class="product-active-02">
                    <!-- Product Top Wrapper Start -->
                    <div class="product-top-wrapper">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title"># Related Products</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Product Menu Start -->
                        <div class="product-menu">
                            <ul class="nav">
                                <li>
                                    <button class="active" data-bs-toggle="tab" data-bs-target="#tab7">
                                        All Time
                                    </button>
                                </li>
                                <li>
                                    <button data-bs-toggle="tab" data-bs-target="#tab8">
                                        This Year
                                    </button>
                                </li>
                                <li>
                                    <button data-bs-toggle="tab" data-bs-target="#tab9">
                                        This Month
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- Product Menu End -->

                        <!-- Swiper Arrows End -->
                        <div class="swiper-arrows">
                            <!-- Add Arrows -->
                            <div class="swiper-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="swiper-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                        <!-- Swiper Arrows End -->
                    </div>
                    <!-- Product Top Wrapper End -->

                    <!-- Product Tabs Content Start -->
                    <div class="product-tabs-content">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab7">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-07.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Wooden decorations</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-08.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Herman Seater Sofa</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-09.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Reece Seater Sofa</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-10.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Round Swivel Chair</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab8">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-01.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Elona bedside grey
                                                            table</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-02.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Simple minimal Chair</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-03.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Pendant Chandelier
                                                            Light</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-04.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">High quality vase
                                                            bottle</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab9">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-04.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">High quality vase
                                                            bottle</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-03.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Pendant Chandelier
                                                            Light</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-01.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Elona bedside grey
                                                            table</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="{{ route('product.detail')}}"><img src="{{ asset('assets/assets/images/product/product-10.jpg')}}" width="270" height="303" alt="product" /></a>
                                                <div class="product-content">
                                                    <h4 class="title">
                                                        <a href="{{ route('product.detail')}}">Round Swivel Chair</a>
                                                    </h4>
                                                    <div class="price">
                                                        <span class="sale-price"
                                                        >$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li>
                                                        <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i
                                                            class="pe-7s-search"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-shopbag"
                                                        ></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="action" href="#"><i
                                                            class="pe-7s-like"
                                                        ></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Tabs Content End -->
                </div>
                <!-- Product Wrapper End -->
            </div>
        </div>
    </div>
    <!-- Sale Product Section End -->
    <!-- Footer Section Start -->
    @include('site.layouts.footer')
    <!-- Footer Section End -->

    <!--Back To Start-->
    <button id="backBtn" class="back-to-top"><i class="pe-7s-angle-up"></i></button>
    <!--Back To End-->

    <!-- JS
    ============================================ -->

    @include('site.layouts.script')

</body>

</html>
