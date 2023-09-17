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
        <script src="{{asset('front/assets/js/main.js')}}" defer></script>

    </head>
    <body>
	
        <!--PreLoader-->
        <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>
        <!--PreLoader Ends-->
        
        <!-- header -->
        <div class="top-header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <div class="main-menu-wrap">
                            <!-- logo -->
                            <div class="site-logo">
                                <a href="index.html">
                                    <img src="{{asset('front/assets/img/logo.png')}}" alt="">
                                </a>
                            </div>
                            <!-- logo -->

                            <!-- menu start -->
                            <nav class="main-menu">
                                <ul>
                                    <li class="current-list-item"><a href="#">Accueil</a></li>
                                    <li><a href="about.html">Présentation</a></li>
                                    <li><a href="#">Actualités</a></li>
                                    <li><a href="#">Articles</a></li>
                                    <li><a href="#">Médias</a></li>
                                    <li><a href="#">Contact</a></li>
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

        <!-- home page slider -->
        <div class="homepage-slider">
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Embarquez pour une éco-aventure</p>
                                    <h1>A la découverte des merveilles de la réserve sauvage de Fathala</h1>
                                    <div class="hero-btns">
                                        <a href="shop.html" class="boxed-btn">Lire la suite</a>
                                        <a href="contact.html" class="bordered-btn">Contactez nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-center">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Célébrer la maternité</p>
                                    <h1>Leçons de la faune de la réserve sauvage de Fathala</h1>
                                    <div class="hero-btns">
                                        <a href="shop.html" class="boxed-btn">Lire la suite</a>
                                        <a href="contact.html" class="bordered-btn">Contactez nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-right">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">Disparution de la mangrove</p>
                                    <h1>Recherche de solutions par des actions participative, responsabilisation et conscientisation</h1>
                                    <div class="hero-btns">
                                        <a href="shop.html" class="boxed-btn">Lire la suite</a>
                                        <a href="contact.html" class="bordered-btn">Contactez nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end home page slider -->
         <!-- advertisement section -->
        <div class="abt-section pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="abt-bg">
                            <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="abt-text">
                            <p class="top-sub">Depuis 2023</p>
                            <h2>Observatoire des <span class="orange-text">Mangroves du Sénégal</span></h2>
                            <p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed, interdum velit. Nam eu molestie lorem.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.</p>
                            <a href="about.html" class="boxed-btn mt-4">Lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end advertisement section -->
        <!-- features list section -->
        <div class="list-section pt-80 pb-30">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="content">
                                <h3>Equipe experte</h3>
                                <p>Des professionnels du métier</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="list-box d-flex align-items-center">
                            <div class="list-icon">
                                <i class="fa fa-handshake"></i>
                            </div>
                            <div class="content">
                                <h3>Qualité de services</h3>
                                <p>A l'écoute de vos moindres besoins</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="list-box d-flex justify-content-start align-items-center">
                            <div class="list-icon">
                                <i class='fa fa-calendar'></i>
                            </div>
                            <div class="content">
                                <h3>Respect des délais</h3>
                                <p>Chez nous la parole est sacrée</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end features list section -->
        <!-- latest news -->
        <div class="latest-news pt-150 pb-30">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">	
                            <h3><span class="orange-text">Nos </span>Services</h3>
                            <p>Faites appel à des professionnels.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">Achat de terre agricole</a></h3>
                                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
                                <a href="single-news.html" class="read-more-btn">Lire plus <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">Location de terrain</a></h3>
                                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
                                <a href="single-news.html" class="read-more-btn">Lire plus <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-latest-news">
                            <a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a>
                            <div class="news-text-box">
                                <h3><a href="single-news.html">Etude de sol</a></h3>
                                <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
                                <a href="single-news.html" class="read-more-btn">Lire plus <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="news.html" class="boxed-btn">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end latest news -->
        <!-- product section -->
        <div class="product-section mt-150 mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">	
                            <h3><span class="orange-text">Nos </span>Terrains</h3>
                            <p>Nous nous engageons à vous fournir des terres de qualité</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="front/assets/img/terre/terre1.jpg" alt=""></a>
                            </div>
                            <h3>Terrain 1</h3>
                            <p class="product-price"><span>600 m2</span> 1000 frs </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="front/assets/img/terre/terre2.jpg" alt=""></a>
                            </div>
                            <h3>Terrain 2</h3>
                            <p class="product-price"><span>600 m2</span> 1000 frs </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="front/assets/img/terre/terre3.jpg" alt=""></a>
                            </div>
                            <h3>Terrain 3</h3>
                            <p class="product-price"><span>600 m2</span> 1000 frs </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product section -->
        <!-- testimonail-section -->
        <div class="testimonail-section mt-150 mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="testimonial-sliders">
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar1.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Saira Hakim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar2.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>David Niph <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/avaters/avatar3.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                    <p class="testimonial-body">
                                        " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end testimonail-section -->

        <!-- logo carousel -->
        <div class="logo-carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="logo-carousel-inner">
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/1.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/2.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/3.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/4.png" alt="">
                            </div>
                            <div class="single-logo-item">
                                <img src="assets/img/company-logos/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end logo carousel -->

        <!-- footer -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">A propos</h2>
                            <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
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
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="about.html">Présentation</a></li>
                                <li><a href="services.html">Nos services</a></li>
                                <li><a href="news.html">Nos réalisations</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
        <!-- end footer -->
        
        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyrights &copy; 2023 - <a href="https://imransdesign.com/">Mame Mar NIANG</a>,  All Rights Reserved.</p>
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
