<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Music Studio.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/plantilla/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/plantilla/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{asset('css/plantilla/themify-icons.css')}}">
    <!-- Bootstrap  -->
    
    <link rel="stylesheet" href="{{asset('css/plantilla/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/plantilla/magnific-popup.css')}}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('css/plantilla/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plantilla/owl.theme.default.min.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('css/plantilla/flexslider.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/plantilla/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/plantilla/modernizr-2.6.2.min.js')}}">

    </script>
    

    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
    </head>
    <body>

       <!-- <script src="{{asset('js/default.js')}}"></script>-->


    <div class="ubea-loader"></div>
    
    <div id="page">
    <nav class="ubea-nav" role="navigation">
        <div class="ubea-container">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <div id="ubea-logo"><a href="#" onclick="window.location.href='/'">Music<em>Studio</em></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1 main-nav">
                    <ul>
                        @yield('menu')
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
 
    @yield('slider')
    @yield('content')
    @yield('modal')
   