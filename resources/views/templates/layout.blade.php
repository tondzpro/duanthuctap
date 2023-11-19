<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/galardo/galardo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 17:09:12 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gelardo | Home 3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="{{asset('assets/images/favicon.webp')}}" />


    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shortcode/shortcodes.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">



    <!-- Mirrored from htmldemo.net/galardo/galardo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 17:09:12 GMT -->



<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-start -->
    <header>

        <div class="header-top-area header-top-area-3 ptb-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="header-top-left">
                            <div class="social-header-icon">
                                <?php

                                use Illuminate\Support\Facades\Auth;

                                if (Auth::user() !== null) {
                                    $a = Auth::user()->id;
                                    if ($a == 1) { ?>
                                        <a href="{{route('Admin_index')}}" title="admin"><i class="fa fa-user"></i></a>
                                    <?php } ?>


                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="header-top-right">
                            <ul>
                                <li class="slide-toggle"><a href="#">Tài khoản <i class="fa fa-angle-down"></i></a>
                                    <ul class="show-toggle">
                                        <li><a href="{{route('login')}}"><i class="fa fa-key"></i>Đăng nhập | Đăng xuất</a></li>
                                        <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-6 order-lg-2">
                        <div class="logo text-center">
                            <a href="index.html"><img src="assets/images/logo.webp" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 order-lg-3">

                    </div>
                    <div class="col-lg-3 order-lg-1">
                        <div class="search-box">
                            <form action="{{route('shop_filter')}}" method="POST">
                                @csrf
                                <input type="text" name="filter" placeholder="Search" />
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mainmenu-area white-bg mainmenu-area-3 d-none d-lg-block">
        <div class="container">
            <div class="mainmenu">
                <nav>
                    <ul class="menu-list justify-content-center">
                        <li class="active"><a href="/">Trang chủ</a>
                        </li>
                        <li><a href="{{route('shop')}}">Sách tổng hợp</a></li>
                        <li><a href="{{route('contact')}}">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- mainmenu-area-end -->



    <!-- Nội dung -->
    <div class="container mt-4">
        @include('templates.error')
        @yield('content')
    </div>


    <!-- Footer -->
    <div class="footer-area ptb-30 black-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-wrapper">
                        <div class="footer-logo">
                            <a href="#"><img src="assets/images/logo_footer.webp" alt="" /></a>
                        </div>
                        <p>Welcome to the world of Galardo. We are committed to the highest quality, reliability, responsibility,
                            continuous improvement and strive to build long-term relationships with our clients.</p>
                        <div class="payment">
                            <img src="assets/images/payment.webp" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-wrapper">
                        <div class="footer-title text-uppercase">
                            <h4>Information</h4>
                        </div>
                        <ul class="wrapper-list">
                            <li><a href="#">Specials</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#"> Best sellers</a></li>
                            <li><a href="#">Our stores</a></li>
                            <li><a href="#">Contact us </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-wrapper">
                        <div class="footer-title text-uppercase">
                            <h4>My account</h4>
                        </div>
                        <ul class="wrapper-list">
                            <li><a href="#">My orders</a></li>
                            <li><a href="#">My credit slips</a></li>
                            <li><a href="#">My addresses</a></li>
                            <li><a href="#">My personal info</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-wrapper">
                        <div class="footer-title text-uppercase">
                            <h4>Store Information</h4>
                        </div>
                        <ul class="toggle-footer">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <div class="toogle-txt">
                                    <span class="c_txt-1">Address:</span>
                                    <span class="c_txt-2">Your address goes here.</span>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div class="toogle-txt">
                                    <span class="c_txt-1">Telephone:</span>
                                    <span class="c_txt-2">0123456789</span>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <div class="toogle-txt">
                                    <span class="c_txt-1">Email:</span>
                                    <span class="c_txt-2">demo@example.com</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- Activation JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>