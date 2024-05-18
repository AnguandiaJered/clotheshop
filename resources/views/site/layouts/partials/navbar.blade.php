   <!-- Header Start  -->
   <div class="header-area header-sticky d-none d-lg-block">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="{{ route('home')}}"><img src="assets/logo.png" width="154" height="46" alt="Logo" /></a>
                </div>
                <!-- Header Logo End -->
            </div>
            <div class="col-lg-6">
                <div class="header-menu">
                    <ul class="nav-menu">
                        <li>
                            <a href="{{ route('home')}}">Home</a>
                        </li>
                        <li><a href="{{ route('about')}}">About</a></li>
                        <li>
                            <a href="#">CATEGORIES</a>
                            <ul class="mega-sub-menu">
                                <li>
                                    <a href="#" class="menu-title">Shop Grid</a>

                                    <ul class="menu-item">
                                        <li>
                                            <a href="$">Shop Grid 3 Column</a>
                                        </li>
                                        <li>
                                            <a href="#">Shop Grid 4 Column</a>
                                        </li>
                                        <li>
                                            <a href="#">Shop Grid Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="#">Shop Grid Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-title">Shop List</a>

                                    <ul class="menu-item">
                                        <li><a href="#">Shop List</a></li>
                                        <li>
                                            <a href="#">Shop List Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="#">Shop List Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-title">Shop Single</a>

                                    <ul class="menu-item">
                                        <li><a href="#">Product Details</a></li>
                                        <li>
                                            <a href="#">Product Details Affiliate</a>
                                        </li>
                                        <li>
                                            <a href="#">Product Details Gallery</a>
                                        </li>
                                        <li>
                                            <a href="#">Product Details Group</a>
                                        </li>
                                        <li>
                                            <a href="#">Product Details Sticky</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="manu-banner">
                                    <a href="#"><img src="{{ asset('assets/assets/images/banner-menu-01.jpg')}}" width="465" height="170" alt="Banner" /></a>
                                </li>
                                <li class="manu-banner">
                                    <a href="#"><img src="{{ asset('assets/assets/images/banner-menu-02.jpg')}}" width="465" height="170" alt="Banner" /></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('blogs')}}">Blog</a>
                        </li>
                        <li><a href="{{ route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- Header Meta Start -->
                <div class="header-meta">
                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="pe-7s-search"></i>
                        </a>

                        <div class="dropdown-menu dropdown-search">
                            <!-- Header Search Start -->
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="Enter your search key ... " />
                                    <button>
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- Header Search End -->
                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                        <ul class="dropdown-menu dropdown-profile">
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Sign In</a></li>
                        </ul>
                    </div>
                    <a class="action" href="#"><i class="pe-7s-like"></i></a>

                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="pe-7s-shopbag"></i>
                            <span class="number">3</span>
                        </a>

                        <div class="dropdown-menu dropdown-cart">
                            <div class="cart-content" id="cart-content">
                                <ul>
                                    <li>
                                        <!-- Single Cart Item Start -->
                                        <div class="single-cart-item">
                                            <div class="cart-thumb">
                                                <img src="assets/images/cart/cart-1.jpg" width="98" height="98" alt="Cart" />
                                                <span class="product-quantity"
                                                >1x</span>
                                            </div>
                                            <div class="cart-item-content">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">High quality vase
                                                        bottle</a>
                                                </h6>
                                                <span class="product-price"
                                                >$19.12</span>
                                                <div class="attributes-content">
                                                    <span
                                                    ><strong>Color:</strong>
                                                    White
                                                </span>
                                                </div>
                                                <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Cart Item End -->
                                    </li>
                                    <li>
                                        <!-- Single Cart Item Start -->
                                        <div class="single-cart-item">
                                            <div class="cart-thumb">
                                                <img src="assets/images/cart/cart-2.jpg" width="98" height="98" alt="Cart" />
                                                <span class="product-quantity"
                                                >1x</span>
                                            </div>
                                            <div class="cart-item-content">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Living & Bedroom
                                                        Chair</a>
                                                </h6>
                                                <span class="product-price"
                                                >$19.12</span>
                                                <div class="attributes-content">
                                                    <span
                                                    ><strong>Color:</strong>
                                                    White
                                                </span>
                                                </div>
                                                <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Cart Item End -->
                                    </li>
                                    <li>
                                        <!-- Single Cart Item Start -->
                                        <div class="single-cart-item">
                                            <div class="cart-thumb">
                                                <img src="assets/images/cart/cart-3.jpg" width="98" height="98" alt="Cart" />
                                                <span class="product-quantity"
                                                >1x</span>
                                            </div>
                                            <div class="cart-item-content">
                                                <h6 class="product-name">
                                                    <a href="product-details.html">Herman Arm Grey
                                                        Chair</a>
                                                </h6>
                                                <span class="product-price"
                                                >$19.12</span>
                                                <div class="attributes-content">
                                                    <span
                                                    ><strong>Color:</strong>
                                                    White
                                                </span>
                                                </div>
                                                <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                            </div>
                                        </div>
                                        <!-- Single Cart Item End -->
                                    </li>
                                </ul>
                            </div>

                            <div class="cart-price">
                                <div class="cart-subtotals">
                                    <div class="price-inline">
                                        <span class="label">Subtotal</span>
                                        <span class="value">$42.70</span>
                                    </div>
                                    <div class="price-inline">
                                        <span class="label">Shipping</span>
                                        <span class="value">$7.00</span>
                                    </div>
                                    <div class="price-inline">
                                        <span class="label">Taxes</span>
                                        <span class="value">$0.00</span>
                                    </div>
                                </div>
                                <div class="cart-total">
                                    <div class="price-inline">
                                        <span class="label">Total</span>
                                        <span class="value">$49.70</span>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-btn">
                                <a href="checkout.html" class="btn btn-dark btn-hover-primary d-block">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Meta End -->
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Header Mobile Start -->
<div class="header-mobile section d-lg-none">
    <!-- Header Mobile top Start -->
    <div class="header-mobile-top header-sticky">
        <div class="container">
            <div class="row row-cols-3 gx-2 align-items-center">
                <div class="col">
                    <!-- Header Toggle Start -->
                    <div class="header-toggle">
                        <button class="mobile-menu-open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- Header Toggle End -->
                </div>
                <div class="col">
                    <!-- Header Logo Start -->
                    <div class="header-logo text-center">
                        <a href="index.html"><img src="assets/images/logo.png" width="154" height="46" alt="Logo" /></a>
                    </div>
                    <!-- Header Logo End -->
                </div>
                <div class="col">
                    <!-- Header Action Start -->
                    <div class="header-meta">
                        <div class="dropdown">
                            <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                            <ul class="dropdown-menu dropdown-profile">
                                <li>
                                    <a href="my-account.html">My Account</a>
                                </li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Sign In</a></li>
                            </ul>
                        </div>
                        <a class="action" href="cart.html">
                            <i class="pe-7s-shopbag"></i>
                            <span class="number">3</span>
                        </a>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Mobile top End -->

    <!-- Header Mobile Bottom End -->
    <div class="header-mobile-bottom">
        <div class="container">
            <!-- Header Search Start -->
            <div class="header-search">
                <form action="#">
                    <input type="text" placeholder="Enter your search key ... " />
                    <button><i class="pe-7s-search"></i></button>
                </form>
            </div>
            <!-- Header Search End -->
        </div>
    </div>
    <!-- Header Mobile Bottom End -->
</div>
<!-- Header Mobile End -->


<!-- off Canvas Start -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header">
        <!-- Canvas Action Start -->
        <div class="canvas-action">
            <a class="action" href="compare.html"><i class="icon-sliders"></i> Compare
                <span class="action-num">(3)</span></a>
            <a class="action" href="wishlist.html"><i class="icon-heart"></i> Wishlist
                <span class="action-num">(3)</span></a>
        </div>
        <!-- Canvas Action end -->

        <!-- Canvas Close bar Start -->
        <div class="canvas-close-bar">
            <span>Menu</span>
            <button class="menu-close" data-bs-dismiss="offcanvas">
                <i class="pe-7s-angle-left"></i>
            </button>
        </div>
        <!-- Canvas Close bar End -->
    </div>

    <div class="offcanvas-body">
        <!-- Canvas Menu Start -->
        <div class="canvas-menu">
            <nav>
                <ul class="nav-menu">
                    <li>
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="index-2.html">Home 02</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li>
                        <a href="#">Shop</a>
                        <ul class="mega-sub-menu">
                            <li>
                                <a href="#" class="menu-title">Shop Grid</a>

                                <ul class="menu-item">
                                    <li>
                                        <a href="shop-grid-3-column.html">Shop Grid 3 Column</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-4-column.html">Shop Grid 4 Column</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-title">Shop List</a>

                                <ul class="menu-item">
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li>
                                        <a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-title">Shop Single</a>

                                <ul class="menu-item">
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li>
                                        <a href="product-details-affiliate.html">Product Details Affiliate</a>
                                    </li>
                                    <li>
                                        <a href="product-details-gallery.html">Product Details Gallery</a>
                                    </li>
                                    <li>
                                        <a href="product-details-group.html">Product Details Group</a>
                                    </li>
                                    <li>
                                        <a href="product-details-sticky.html">Product Details Sticky</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-title">Page</a>

                                <ul class="menu-item">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </li>

                            <li class="manu-banner">
                                <a href="#"><img src="assets/images/banner-menu-01.jpg" width="465" height="170" alt="Banner" /></a>
                            </li>
                            <li class="manu-banner">
                                <a href="#"><img src="assets/images/banner-menu-02.jpg" width="465" height="170" alt="Banner" /></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages </a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="compare.html">Compare</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="empty-cart.html">Empty Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Blog Grid</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li>
                                        <a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog List</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Details</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog-details-left-sidebar.html">Blog details Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="blog-details-right-sidebar.html">Blog details Right Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Canvas Menu End -->
    </div>
</div>
<!-- off Canvas End -->
