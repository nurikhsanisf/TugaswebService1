<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>
    <!-- plugin css for this page -->
    <link
        rel="stylesheet"
        href="./assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="./assets/vendors/aos/dist/aos.css/aos.css" />
    <link
        rel="stylesheet"
        href="./assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
        rel="stylesheet"
        href="./assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
</head>

<body>
<div class="container-scroller">
    <div class="main-panel">
        <header id="header">
            <div class="container">
                <!-- partial:partials/_navbar.html -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="d-flex justify-content-between align-items-center navbar-top">
                        <ul class="navbar-left">
                            <li>Wed, March 4, 2020</li>
                            <li>INDONESIA</li>
                        </ul>
                        <div>
                            <a class="navbar-brand" href="#"
                            ><img src="assets/images/logo.svg" alt=""
                                /></a>
                        </div>
                        <div class="d-flex">
                            <ul class="social-media">
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-bottom-menu">
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div
                            class="navbar-collapse justify-content-center collapse"
                            id="navbarSupportedContent"
                        >
                            <ul
                                class="navbar-nav d-lg-flex justify-content-between align-items-center"
                            >
                                <li>
                                    <button class="navbar-close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/games') }}">Games</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/tech') }}">Tech</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- partial -->
            </div>
        </header>
        <div class="container">
            @yield('content')
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="border-top"></div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="pages/news-post.html">Home</a></li>
                            <li><a href="index.html">Headline News</a></li>
                            <li><a href="pages/world.html">Sport</a></li>
                            <li><a href="pages/author.html">Science</a></li>
                            <li><a href="pages/business.html">BBC News</a></li>
                            <li><a href="pages/politics.html">Politics</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="pages/world.html">Games</a></li>
                            <li><a href="pages/sports.html">Update Game</a></li>
                            <li><a href="pages/art.html">Console Game</a></li>
                            <li><a href="#">E Sport Game</a></li>
                            <li><a href="pages/real-estate.html">Headline Game</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <ul class="footer-vertical-nav">
                            <li class="menu-title"><a href="#">Tech</a></li>
                            <li><a href="#">Technology News</a></li>
                            <li><a href="#">Update Technology</a></li>
                            <li><a href="pages/news-post.html">Word</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex justify-content-between">
                            <img src="assets/images/logo.svg" class="footer-logo" alt="" />

                            <div class="d-flex justify-content-end footer-social">
                                <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
                                <ul class="social-media">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div
                            class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                        >
                            <ul class="footer-horizontal-menu">
                                <li><a href="#">Terms of Use.</a></li>
                                <li><a href="#">Privacy Policy.</a></li>
                                <li><a href="#">Accessibility & CC.</a></li>
                                <li><a href="#">AdChoices.</a></li>
                                <li><a href="#">Advertise with us Transcripts.</a></li>
                                <li><a href="#">License.</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                            <p class="font-weight-medium">
                                © 2020 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">@ BootstrapDash</a>, Inc.All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- partial -->
    </div>
</div>
<!-- inject:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="./assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="./assets/js/demo.js"></script>
<!-- End custom js for this page-->
</body>
</html>
