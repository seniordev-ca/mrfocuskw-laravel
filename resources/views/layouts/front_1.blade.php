<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Xtract - Creative one page template</title>
<link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.ico') }}">

<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{ asset('front/assets/css/master.css') }}">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/revolution/css/navigation.css') }}">
</head>
<body>

<!--== Loader Start ==-->
<div id="loader-overlay">
    <div class="loader">
        <div class="spinner">
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle class="length" fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
            <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
            </svg>
        </div>
    </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">

    <!--== Header Start ==-->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full brand-center">
        <div class="container">
            <!--== Start Atribute Navigation ==-->
            <div class="attr-nav hidden-xs sm-display-none">
                <ul>
                <li class="side-menu"><a href="#"><i class="icofont icofont-navigation-menu"></i></a></li>
                </ul>
            </div>
            <!--== End Atribute Navigation ==-->

            <!--== Start Header Navigation ==-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
                <div class="logo">
                    <a href="index.html"> <img class="logo logo-display" src="{{ asset('front/assets/images/logo-white.png') }}" alt=""> <img class="logo logo-scrolled" src="{{ asset('front/assets/images/logo-black.png') }}" alt=""> </a>
                </div>
            </div>
            <!--== End Header Navigation ==-->

            <!--== Collect the nav links, forms, and other content for toggling ==-->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
                    <li><a class="page-scroll" href="#home">Home</a></li>
                    <li><a class="page-scroll" href="#about">About</a></li>
                    <li><a class="page-scroll" href="#clients">Clients</a></li>
                    <li><a class="page-scroll" href="#service">Services</a></li>
                    <li><a class="page-scroll" href="#work">Works</a></li>
                    <li><a class="page-scroll" href="#review">Reviews</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--== /.navbar-collapse ==-->
        </div>

        <!-- Start Side Menu -->
        <div class="side black-bg">
            <a href="index.html" class="logo-side"><img src="{{ asset('front/assets/images/logo-full-light.png') }}" alt="side-logo"/></a>
            <a href="#" class="close-side"><i class="icofont icofont-close"></i></a>
            <div class="widget mt-120">
                <ul class="link">
                    <li class="link-item"><a class="page-scroll" href="#home">Home</a></li>
                    <li class="link-item"><a class="page-scroll" href="#about">About</a></li>
                    <li class="link-item"><a class="page-scroll" href="#clients">Clients</a></li>
                    <li class="link-item"><a class="page-scroll" href="#service">Services</a></li>
                    <li class="link-item"><a class="page-scroll" href="#work">Works</a></li>
                    <li class="link-item"><a class="page-scroll" href="#review">Reviews</a></li>
                    <li class="link-item"><a class="page-scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
            <ul class="social-media">
                <li><a href="#" class="icofont icofont-social-facebook"></a></li>
                <li><a href="#" class="icofont icofont-social-twitter"></a></li>
                <li><a href="#" class="icofont icofont-social-behance"></a></li>
                <li><a href="#" class="icofont icofont-social-dribble"></a></li>
                <li><a href="#" class="icofont icofont-social-linkedin"></a></li>
            </ul>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!--== Header End ==-->

    @yield('content')
</div>
<!--== Wrapper End ==-->
<!--== Javascript Plugins ==-->
<script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/assets/js/smoothscroll.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins.js') }}"></script>
<script src="{{ asset('front/assets/js/master.js') }}"></script>

<!-- Revolution js Files -->
<script src="{{ asset('front/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/revolution/js/revolution.extension.video.min.js') }}"></script>
<!--== Javascript Plugins End ==-->

</body>
</html>
