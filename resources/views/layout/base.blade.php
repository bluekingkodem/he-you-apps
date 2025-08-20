<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>HE YOU</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/drift-zoom/drift-basic.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- =======================================================
  * Template Name: LuxuryHotel
  * Template URL: https://bootstrapmade.com/luxury-hotel-bootstrap-template/
  * Updated: Jun 30 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href=" {{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="a"></g>
                        <g id="b">
                            <path
                                d="M21,4H11c-1.1046,0-2,.8954-2,2V28h4v-7c0-.5523,.4477-1,1-1h4c.5523,0,1,.4477,1,1v7h4V6c0-1.1046-.8954-2-2-2Z"
                                style="fill:#f2ebe2;"></path>
                            <path
                                d="M30.1416,10.0103l-6.1416-.8774v-3.1329c0-1.6543-1.3457-3-3-3H11c-1.6543,0-3,1.3457-3,3v3.1329l-6.1416,.8774c-.4922,.0703-.8584,.4922-.8584,.9897V28c0,.5522,.4473,1,1,1H30c.5527,0,1-.4478,1-1V11c0-.4976-.3662-.9194-.8584-.9897ZM11,5h10c.5518,0,1,.4487,1,1V27h-2v-6c0-1.103-.8975-2-2-2h-4c-1.1025,0-2,.897-2,2v6h-2V6c0-.5513,.4482-1,1-1Zm7,22h-4v-6h4v6ZM3,11.8672l5-.7144v15.8472H3V11.8672Zm26,15.1328h-5V11.1528l5,.7144v15.1328ZM15,15.5v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Zm3-7v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Zm7.5,7v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Zm0,3v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5ZM6.5,14.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5Zm0,3v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5Zm5.5-2v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Zm0-7v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Zm3,0v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Zm3,3.5v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Zm-6,0v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Zm3,0v-1c0-.2762,.2239-.5,.5-.5h1c.2761,0,.5,.2238,.5,.5v1c0,.2761-.2239,.5-.5,.5h-1c-.2761,0-.5-.2239-.5-.5Z"
                                style="fill:#917a5a;"></path>
                        </g>
                    </g>
                </svg>
                <h1 class="sitename">HE YOU</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Accueil</a></li>
                    <li><a href="{{ route('auth.register') }}">Mettre en location</a></li>
                    <li><a href="{{ route('show_all') }}">Visiter nos logements</a></li>
                    <li class="dropdown"><a href="#"><span>Partenaires</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="room-details.html">Menagere</a></li>
                            <li><a href="restaurant.html">Restaurant</a></li>
                            <li><a href="offers.html">Service de sante</a></li>
                            <li><a href="events.html">Avocat</a></li>
                            <li><a href="gallery.html">Plombier</a></li>
                            <li><a href="booking.html">Menuisier</a></li>
                            <li><a href="terms.html">Repetiteur</a></li>
                            <li><a href="terms.html">Electricien</a></li>
                        </ul>
                    </li>
                    <li><a href="location.html">Contactez-nous</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="color-orange-rouge btn-getstarted d-none d-sm-block" href="{{ route('auth.login') }}">Se connecter</a>
        </div>
    </header>

    <main class="main">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    {{-- <footer id="footer" class="footer position-relative dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">HE YOU</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>info@example.com</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Hic solutasetp</h4>
                        <ul>
                            <li><a href="#">Molestiae accusamus iure</a></li>
                            <li><a href="#">Excepturi dignissimos</a></li>
                            <li><a href="#">Suscipit distinctio</a></li>
                            <li><a href="#">Dilecta</a></li>
                            <li><a href="#">Sit quas consectetur</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Nobis illum</h4>
                        <ul>
                            <li><a href="#">Ipsam</a></li>
                            <li><a href="#">Laudantium dolorum</a></li>
                            <li><a href="#">Dinera</a></li>
                            <li><a href="#">Trodelas</a></li>
                            <li><a href="#">Flexo</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer> --}}

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/drift-zoom/Drift.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
