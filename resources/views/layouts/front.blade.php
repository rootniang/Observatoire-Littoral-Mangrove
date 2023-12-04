<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

        <!-- Css -->
        <link rel="stylesheet" href="{{asset('front/assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('front/assets/css/responsive.css')}}">

        <!-- Scripts -->
        <script src="{{asset('front/assets/js/jquery-1.11.3.min.js')}}" defer></script>
        <script src="{{asset('front/assets/bootstrap/js/bootstrap.min.js')}}" defer></script>
        <script src="{{asset('front/assets/js/jquery.countdown.js')}}" defer></script>
        <script src="{{asset('front/assets/js/jquery.isotope-3.0.6.min.js')}}" defer></script>
        <script src="{{asset('front/assets/js/waypoints.js')}}" defer></script>
        <script src="{{asset('front/assets/js/owl.carousel.min.js')}}" defer></script>
        <script src="{{asset('front/assets/js/jquery.magnific-popup.min.js')}}" defer></script>
        <script src="{{asset('front/assets/js/jquery.meanmenu.min.js')}}" defer></script>
        <script src="{{asset('front/assets/js/sticker.js')}}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
        <script src="{{asset('front/assets/js/main.js')}}" defer></script>

    </head>
    <body>
        <!-- header -->
        <div class="top-header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <div class="main-menu-wrap">
                            <!-- logo -->
                            <div class="site-logo">
                                <a href="/">
                                    <img src="{{asset('front/assets/img/logo.png')}}" alt="">
                                </a>
                            </div>
                            <!-- logo -->

                            <!-- menu start -->
                            <nav class="main-menu">
                                <ul>
                                    <li class="current-list-item" ><a href="/">Accueil</a></li>
                                    <li><a href="{{ route('presentation') }}">Présentation</a></li>
                                    <li><a href="{{ route('carte') }}">La carte</a></li>
                                    <li><a href="{{ route('articlelist') }}">Nos articles</a></li>
                                    <li><a href="{{ route('ressourcelist') }}">Nos ressources</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li>
                                        <div class="header-icons">
                                            <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                            <div class="mobile-menu"></div>
                            <!-- menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        
        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search area -->   
            {{ $slot }}
        <!-- footer -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">A propos</h2>
                            <p>Explorez notre site pour en apprendre davantage sur nos projets, rejoignez notre communauté engagée, et ensemble, œuvrons pour un avenir où les mangroves prospèrent et continuent d'abriter une biodiversité exceptionnelle.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box get-in-touch">
                            <h2 class="widget-title">Contact</h2>
                            <ul>
                                <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                                <li>support@test.com</li>
                                <li>+00 111 222 3333</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box pages">
                            <h2 class="widget-title">Pages</h2>
                            <ul>
                                <li><a href="/">Accueil</a></li>
                                <li><a href="">Présentation</a></li>
                                <li><a href="{{ route('carte') }}">La carte</a></li>
                                <li><a href="">Nos articles</a></li>
                                <li><a href="">Nos ressources</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box subscribe">
                            <h2 class="widget-title">Inscription</h2>
                            <p>Inscrivez vous á notre newsletter pour ne rien rater.</p>
                            <form action="index.html">
                                <input type="email" placeholder="Email">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="remonter"><a href="{{ route('alertefront') }}"><button type="button"><img src="{{asset('front/assets/img/remonter.svg')}}" alt="Haut du site" width="49" height="48"></button></a></div>
        <!-- end footer -->
        
        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyrights &copy; 2023 - <a href="https://imransdesign.com/">Carrefour Agri</a>,  All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 text-right col-md-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end copyright -->    
    </body>
</html>
