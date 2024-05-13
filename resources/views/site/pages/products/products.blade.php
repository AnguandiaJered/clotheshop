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
                <h2 class="title">Products</h2>

                <ul class="breadcrumb">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li class="active">Products</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shop Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Product Section Wrapper Start -->
            <div class="product-section-wrapper">
                <!-- Shop top Bar Start -->
                <div class="shop-top-bar">
                    <div class="shop-text">
                        <p>
                            <span>12</span> Product Found of <span>30</span>
                        </p>
                    </div>
                    <div class="shop-tabs">
                        <ul class="nav">
                            <li>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#grid">
                                    <i class="fa fa-th"></i>
                                </button>
                            </li>
                            <li>
                                <button data-bs-toggle="tab" data-bs-target="#list">
                                    <i class="fa fa-list"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-sort">
                        <span class="title">Sort By :</span>
                        <select class="select2-2">
                            <option value="featured">Featured</option>
                            <option value="rating">Rating</option>
                            <option value="price">Price</option>
                        </select>
                    </div>
                </div>
                <!-- Shop top Bar End -->

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="grid">
                        <!-- Shop Product Wrapper Start -->
                        <div class="shop-product-wrapper">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-01.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Elona bedside grey
                                                    table</a>
                                            </h4>
                                            <div class="price">
                                                <span class="sale-price"
                                                        >$40.00</span>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-02.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Simple minimal Chair</a>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-03.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Pendant Chandelier
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-04.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">High quality vase
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-05.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Living & Bedroom
                                                    Chair</a>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-06.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Herman Arm Grey
                                                    Chair</a>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-07.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Wooden decorations</a>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-08.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Herman Seater Sofa</a>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-09.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Reece Seater Sofa</a>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-10.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Round Swivel Chair</a>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-12.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">Modern Accent Chair</a>
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
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="{{ route('product_detail')}}"><img src="{{ asset('assets/assets/images/product/product-13.jpg')}}" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('product_detail')}}">
                                                    Wood Dining Table</a>
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
                        <!-- Shop Product Wrapper End -->
                    </div>
                    <div class="tab-pane fade" id="list">
                        <!-- Shop Product Wrapper Start -->
                        <div class="shop-product-wrapper">
                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-01.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="{{ route('product_detail')}}">Elona bedside grey table</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->

                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-02.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="product-details.html">Simple minimal Chair</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->

                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-03.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="product-details.html">Pendant Chandelier Light</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->

                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-04.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="product-details.html">High quality vase bottle</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->

                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-05.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="product-details.html">Living & Bedroom Chair</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->

                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-06.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="product-details.html">Herman Arm Grey Chair</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->

                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-07.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="product-details.html">Wooden decorations</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->

                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-08.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="product-details.html">Herman Seater Sofa</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->

                            <!-- Single Product Start -->
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="#"><img src="{{ asset('assets/assets/images/product/product-09.jpg')}}" width="270" height="303" alt="product" /></a>

                                    <ul class="product-meta">
                                        <li>
                                            <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                        </li>
                                        <li>
                                            <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="product-details.html">Reece Seater Sofa</a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                    <p>
                                        Block out the haters with the fresh adidas® Originals Kaval
                                        Windbreaker Jacket. Part of the Kaval Collection. Regular fit is
                                        eased, but not sloppy, and perfect for any activity. Plain-woven
                                        jacket specifically constructed for freedom of movement.
                                    </p>
                                </div>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        <!-- Shop Product Wrapper End -->

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
            <!-- Product Section Wrapper End -->
        </div>
    </div>
    <!-- Shop Section End -->

    <!-- Footer Section Start -->
    @include('site.layouts.footer')
    <!-- Footer Section End -->

    <!--Back To Start-->
    <button id="backBtn" class="back-to-top"><i class="pe-7s-angle-up"></i></button>
    <!--Back To End-->

    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->

    @include('site.layouts.script')

</body>

</html>
