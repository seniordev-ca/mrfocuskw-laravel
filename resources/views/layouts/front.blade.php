<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">

    <title>{{ config('app.name', 'MrfocusKW') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
</head>
<body class="body-full-page">

<div class="loader"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>

<!-- Content CLick Capture-->

<div class="click-capture"></div>

<!-- Sidebar Menu-->

<div class="menu">
    <span class="close-menu icon-cross2 right-boxed"></span>
    <div class="menu-lang right-boxed">
        <a href="" class="active">Eng</a>
        <a href="">Ara</a>
    </div>
    <ul class="menu-list right-boxed">
        <li  data-menuanchor="page1">
            <a  href="#page1">Home</a>
        </li>
        <li  data-menuanchor="page2">
            <a href="#page2">About us</a>
        </li>
        <li  data-menuanchor="page3">
            <a href="#page3">Projects</a>
        </li>
        <li  data-menuanchor="page4">
            <a href="#page4">Services</a>
        </li>
        <li  data-menuanchor="page6">
            <a href="#page6">Reviews</a>
        </li>
        <li  data-menuanchor="page7">
            <a href="#page7">Contact</a>
        </li>
    </ul>
    <div class="menu-footer right-boxed">
        <div class="social-list">
            <a href="" class="icon ion-social-twitter"></a>
            <a href="" class="icon ion-social-facebook"></a>
            <a href="" class="icon ion-social-googleplus"></a>
            <a href="" class="icon ion-social-linkedin"></a>
            <a href="" class="icon ion-social-dribbble-outline"></a>
        </div>
        <div class="copy">© MrfocusKW <?php echo date("Y"); ?>. All Rights Reseverd<br> Design by MrfocusKW</div>
    </div>
</div>

<!-- Navbar -->

<header class="navbar navbar-2 navbar-white boxed">
    <div class="navbar-bg"></div>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <a class="brand" href="#">
        <img class="brand-img" alt="" src="images/brand.png">
{{--        <div class="brand-info">--}}
{{--            <div class="brand-name">Jonny</div>--}}
{{--            <div class="brand-text">creative template</div>--}}
{{--        </div>--}}
    </a>

    <div class="social-list hidden-xs">
        <a href="" class="icon ion-social-twitter"></a>
        <a href="" class="icon ion-social-facebook"></a>
        <a href="" class="icon ion-social-googleplus"></a>
        <a href="" class="icon ion-social-linkedin"></a>
        <a href="" class="icon ion-social-dribbble-outline"></a>
    </div>
</header>
<div class="copy-bottom white boxed">© Jonny <?php echo date("Y"); ?>.</div>
<div class="lang-bottom white boxed">
    <div class="menu-lang">
        <a href="" class="active">Eng</a>
        <a href="">Ara</a>
    </div>
</div>

@yield('content')
<!-- Modals success -->

<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <h2 class="modal-title">Thank you</h2>
                <p class="modal-subtitle">Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                <h2 class="modal-title">Sorry</h2>
                <p class="modal-subtitle"> Something went wrong </p>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.pagepiling.js') }}"></script>



<!-- Scripts -->
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
