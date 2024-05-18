@extends('site.layouts.default')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">About Us</h2>

                <ul class="breadcrumb">
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- History Section Start -->
    <div class="section section-padding-02">
        <div class="container">
            <!-- History content End -->
            <div class="history-content text-center">
                <div class="section-title-03">
                    <h6 class="sub-title">Our History</h6>
                    <h2 class="title">Etablissements YETU</h2>
                </div>
                <p>Entreprise privée à caractère commercial, formel, est identifiée au niveau national dans le registre de commerce.</p>
                <p>
                    En effet, c’est à l’initiative des Messieurs KASEREKA MUHINDO, KAMBALE LIKUTA Pascal et MUMBERE MUHINDO Georges que fut fondée l’Entreprise, vers les années 1998 dans le but de la  commercialisation des produits vivriers en région de Kanyabayonga, Territoire de Lubero d’où est  venu le capital initial.
                    -	1999 : les Co–fondateurs se sont convenus de créer un Kiosque dans le quartier Mabanga après avoir eu une somme un peu suffisante et compte tenu que les boulangeries étaient rares à Goma, ils ont commencé à produire les pains dans leur petite boulangerie dans le quartier Mabanga ;
                    -	2003 : les trois frères décident d’étaler dans le marché Virunga qui se  trouvait en face de la prison centrale de Goma, ils vendaient des pantalons jeans, vestes, T-shirts, chemises, bref : les habits.
                    -	2005 : Grâce à une bonne gestion de leurs recettes et bénéfices réalisés dans le marché Virunga, ils vont ouvrir une boutique nommé la CONFIANCE tout près du rond-point Birere qui est enregistré au niveau national et dans le registre de commerce.
                    -	2006 : Compte tenu du travail, ils décident de dissoudre la maison et chacun va commencer ses propres activités ; KASEREKA MUHINDO connu sous le nom de KAS KASEREKA ouvre un dépôt nommé DUKA YETU à côté de NGANDA NOVA avec deux succursales à Birere, il vendait les habits en provenance de Chine, Hollande et Thaïlande.
                    -	2010 : Fut l’ouverture d’une grande maison nommée dépôt DUKA YETU en face de l’ancien bureau de l’UDPC, la route qui mène vers deux lampes, sous la supervision MUMBERE.

                </p>
            </div>
            <!-- History content End -->

            <!-- History Icon End -->
            <div class="history-icon text-center">
                <img src="{{ asset('assets/assets/images/icon/icon-5.jpg')}}" alt="Icon" />
            </div>
            <!-- History Icon End -->
        </div>
    </div>
    <!-- History Section End -->

    <!-- Counter Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- Single Counter Start -->
                    <div class="single-counter">
                        <span class="count"
                                ><span
                                    class="odometer"
                                    data-count-to="21"
                                ></span><sub>+</sub></span>
                        <p>Years of Exprience</p>
                    </div>
                    <!-- Single Counter End -->
                </div>
                <div class="col-lg-3 col-6">
                    <!-- Single Counter Start -->
                    <div class="single-counter">
                        <span class="count"
                                ><span
                                    class="odometer"
                                    data-count-to="30"
                                ></span><sub>K</sub></span>
                        <p>Happy Customers</p>
                    </div>
                    <!-- Single Counter End -->
                </div>
                <div class="col-lg-3 col-6">
                    <!-- Single Counter Start -->
                    <div class="single-counter">
                        <span class="count"
                                ><span
                                    class="odometer"
                                    data-count-to="15"
                                ></span><sub>+</sub></span>
                        <p>Award Winner</p>
                    </div>
                    <!-- Single Counter End -->
                </div>
                <div class="col-lg-3 col-6">
                    <!-- Single Counter Start -->
                    <div class="single-counter">
                        <span class="count"
                                ><span
                                    class="odometer"
                                    data-count-to="100"
                                ></span><sub>%</sub></span>
                        <p>Products Guranteed</p>
                    </div>
                    <!-- Single Counter End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <div class="section section-padding bg-color-02">
        <div class="container">
            <!-- Testimonial Wrapper Start -->
            <div class="testimonial-wrapper testimonial-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- single Testimonial Start -->
                        <div class="single-testimonial swiper-slide">
                            <img class="quote" src="{{ asset('assets/assets/images/icon/quote.png')}}" alt="Icon" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore dolorelo magna aliqua.
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit
                            </p>
                            <img class="author-thumb" src="{{ asset('assets/assets/images/author-1.jpg')}}" width="100" height="100" alt="Author" />
                            <h6 class="name">Taelynn Thorpe</h6>
                            <span class="designation">Customer</span>
                        </div>
                        <!-- single Testimonial End -->

                        <!-- single Testimonial Start -->
                        <div class="single-testimonial swiper-slide">
                            <img class="quote" src="{{ asset('assets/assets/images/icon/quote.png')}}" alt="Icon" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore dolorelo magna aliqua.
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit
                            </p>
                            <img class="author-thumb" src="{{ asset('assets/assets/images/author-1.jpg')}}" width="100" height="100" alt="Author" />
                            <h6 class="name">Taelynn Thorpe</h6>
                            <span class="designation">Customer</span>
                        </div>
                        <!-- single Testimonial End -->

                        <!-- single Testimonial Start -->
                        <div class="single-testimonial swiper-slide">
                            <img class="quote" src="{{ asset('assets/assets/images/icon/quote.png')}}" alt="Icon" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore dolorelo magna aliqua.
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit
                            </p>
                            <img class="author-thumb" src="{{ asset('assets/assets/images/author-1.jpg')}}" width="100" height="100" alt="Author" />
                            <h6 class="name">Taelynn Thorpe</h6>
                            <span class="designation">Customer</span>
                        </div>
                        <!-- single Testimonial End -->

                        <!-- single Testimonial Start -->
                        <div class="single-testimonial swiper-slide">
                            <img class="quote" src="{{ asset('assets/assets/images/icon/quote.png')}}" alt="Icon" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore dolorelo magna aliqua.
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit
                            </p>
                            <img class="author-thumb" src="{{ asset('assets/assets/images/author-1.jpg')}}" width="100" height="100" alt="Author" />
                            <h6 class="name">Taelynn Thorpe</h6>
                            <span class="designation">Customer</span>
                        </div>
                        <!-- single Testimonial End -->
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Testimonial Wrapper End -->
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Brand Logo Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="brand-row">
                <div class="brand-col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <img src="{{ asset('assets/assets/images/brand/brand-1.png')}}" width="118" height="87" alt="brand" />
                    </div>
                    <!-- Single Brand Start -->
                </div>

                <div class="brand-col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <img src="{{ asset('assets/assets/images/brand/brand-2.png')}}" width="118" height="87" alt="brand" />
                    </div>
                    <!-- Single Brand Start -->
                </div>

                <div class="brand-col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <img src="{{ asset('assets/assets/images/brand/brand-3.png')}}" width="118" height="87" alt="brand" />
                    </div>
                    <!-- Single Brand Start -->
                </div>

                <div class="brand-col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <img src="{{ asset('assets/assets/images/brand/brand-4.png')}}" width="118" height="87" alt="brand" />
                    </div>
                    <!-- Single Brand Start -->
                </div>

                <div class="brand-col">
                    <!-- Single Brand Start -->
                    <div class="single-brand">
                        <img src="{{ asset('assets/assets/images/brand/brand-5.png')}}" width="118" height="87" alt="brand" />
                    </div>
                    <!-- Single Brand Start -->
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo Section End -->

@endsection
