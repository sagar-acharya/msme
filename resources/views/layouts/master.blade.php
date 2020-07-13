<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="it">
<meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">

<meta name="author" content="themefisher.com">

<title>Udyam Registration &amp; MSME ONLINE CONSULTANCY</title>

<!-- bootstrap.min css -->
<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
<!-- Animate Css -->
<link rel="stylesheet" href="/plugins/animate-css/animate.css">
<!-- Icon Font css -->
<link rel="stylesheet" href="/plugins/fontawesome/css/all.css">
<link rel="stylesheet" href="/plugins/fonts/Pe-icon-7-stroke.css">
<!-- Themify icon Css -->
<link rel="stylesheet" href="/plugins/themify/css/themify-icons.css">
<!-- Slick Carousel CSS -->
<link rel="stylesheet" href="/plugins/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="/plugins/slick-carousel/slick/slick-theme.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="/css/style.css">

</head>


<body id="top-header">
    {{-- @yield('navBar') --}}
    <!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
    </div>
    <!-- /LOADER TEMPLATE -->
    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="index.html">
                            <h2 style="border-bottom: 1px solid #5964C6;">UDYAM<span style="color:#5964C6"> REGISTRATION</span></h2>
                            <h3 style="color: orange;font-size:20px;">MSME ONLINE CONSULTANCY</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">+9876543210</h5>
                            <p>Call Us</p>
                        </div>
                    </div>

                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-email"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">support@udyamonline.org</h5>
                            <p>Email Us</p>
                        </div>
                    </div>
                    <div class="top-info-block d-inline-flex">
                        <img src="/images/MSME.png" width="200px" height="70px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('nav')
    @yield('content')
    @include('footer')
<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="/plugins/bootstrap/js/popper.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<!-- Map Js -->
<!--<script src="plugins/google-map/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>-->

<script src="/js/form/contact.js"></script>
<script src="/js/theme.js"></script>
<script src="{{ URL::asset('js/theme.js') }}"></script>
@yield('js')
</body>
</html>
