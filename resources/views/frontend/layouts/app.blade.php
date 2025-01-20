<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Oreg - Organic Shop HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/logo/favicon.png') }}">
    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/fontawesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/icofont.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/site-flaticon.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/responsive.css')}}" rel="stylesheet" />
    @vite('resources/assets/scss/app.scss')
    <!-- ========== End Stylesheet ========== -->
</head>

<body id="bdy">

<!-- Start PreLoader
============================================= -->
<!--	<div class="se-pre-con"></div>-->
<!-- Start PreLoader-->

<!-- Start header
============================================= -->
@include('frontend.layouts.header')
<!-- End header -->

@yield('content')

<div class="clearfix"></div>

<!-- Start Footer
============================================= -->
@include('frontend.layouts.footer')
<!-- End Footer-->

<!-- Start Scroll top
============================================= -->
<a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>
<!-- End Scroll top-->

<!-- jQuery Frameworks
============================================= -->
<script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap-menu.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('frontend/assets/js/modernizr.custom.13711.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wodry.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/count-to.js')}}"></script>
<script src="{{asset('frontend/assets/js/progress-bar.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/color-option.js')}}"></script>
<script src="{{asset('frontend/assets/js/typed.js')}}"></script>
<script src="{{asset('frontend/assets/js/YTPlayer.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/active-class.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>
</html>
