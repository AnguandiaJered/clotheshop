@extends('site.layouts.default')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Contact Us</h2>

                <ul class="breadcrumb">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Contact Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Contact Wrapper Start -->
            <div class="contact-wrapper">
                <div class="row gx-0">
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <h2 class="title">Contact Info</h2>
                            {{-- <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit sed eiusmod
                            </p> --}}

                            <!-- Contact Info Items Start -->
                            <div class="contact-info-items">
                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="pe-7s-call"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>
                                            <a href="tel:+00125458222">+243 825 053 403</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="pe-7s-mail"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>
                                            <a href="mailto:info@etsyetu.org">info@etsyetu.org</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="pe-7s-map-marker"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>RDC, Province du Nord–Kivu, Ville de Goma, Commune de Karisimbi, Quartier Mabanga-Sud, Avenue Mutakato</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Info Items End -->

                            <!-- Contact Social Start -->
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                            <!-- Contact Social End -->

                            <img src="{{ asset('assets/assets/images/contact-info.png')}}" alt="Contact-info" />
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- Contact Form Start  -->
                        <div class="contact-form">
                            <form id="contact-form" action="https://htmldemo.net/furbar-1/furbar/assets/php/contact.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="name" placeholder="Name*" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" name="email" placeholder="Email*" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="subject" placeholder="Subject" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="phone" placeholder="Phone No" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea name="message" placeholder="Write your comments here"></textarea>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button type="submit" class="btn btn-dark btn-hover-primary">
                                               Envoyer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End  -->
                    </div>
                </div>
            </div>
            <!-- Contact Wrapper End -->
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Contact Map Start -->
    <div class="contact-map">
        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
    </div>
    <!-- Contact Map End -->

@endsection
