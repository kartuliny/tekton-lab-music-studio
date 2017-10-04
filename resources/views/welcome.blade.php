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
    <script src="{{asset('js/plantilla/modernizr-2.6.2.min.js')}}"></script>
   

    </head>
    <body>
        
    <div class="ubea-loader"></div>
    
    <div id="page">
    <nav class="ubea-nav" role="navigation">
        <div class="ubea-container">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <div id="ubea-logo"><a href="index.html">Music<em>Studio</em></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1 main-nav">
                    <ul>
                        @yield('menu')
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>

     <div id="ubea-hero" class="js-fullheight"  data-section="home">
        <div class="flexslider js-fullheight">
            <ul class="slides">
            <li style="background-image: url(images/img_bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Despierta el talento que llevas dentro</h2>
                            <p><a href="http://twitter.com/freshdesignweb" target="_blank" class="btn btn-primary btn-lg">Reservar sala ahora!</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_2.png);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Cuando las palabras faltan, La música habla</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Reservar sala ahora!</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Es momento de brillar</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Reservar sala ahora!</a></p>
                        </div>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </div>

    <div class="ubea-section-overflow">

        <div class="ubea-section" id="ubea-services" data-section="services">
            <div class="ubea-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ubea-heading">
                            <h2 class="ubea-left">Servicios</h2>
                            <p>MUSICSTUDIO te brinda diferentes tipos de servicio tanto para niños y adultos,contamos tambien con instructores especializados,donde aburrirte no sera una opcion</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-music"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Talleres de Canto - Nivel Basico</h3>
                                        <p>Realizan direntes tipos de actividades en el que interactua la voz, este servicio esta disponible para niños y adultos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-mic"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Talleres de Canto - Nivel Avanzado</h3>
                                        <p>Personas con experiencia en el canto mejoraran tecnicas de canto .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-record"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Grabacion y Perfeccionamiento</h3>
                                        <p>Estudio donde se mejora la voz para posteriormente guardarlo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeIn">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-sound-mix"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Reserva de salas de Practicas</h3>
                                        <p>Donde puedes reservar salas como instrumentos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-sound"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Taller de Instrumentos de cuerdas</h3>
                                        <p>Aprenderas a tocar los instrumentos de cuerda como guitarras, violines, etc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="feature-left">
                                    <span class="icon">
                                        <i class="icon-folder-music"></i>
                                    </span>
                                    <div class="feature-copy">
                                        <h3>Taller de Instrumentos de viento</h3>
                                        <p>Aprenderas a tocar Instrumentos como quena, zampoña, trompeta, etc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ubea-section" id="ubea-portfolio" data-section="portfolio">
            <div class="ubea-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center ubea-heading">
                        <h2>Galería</h2>
                        <p>Recuerdos de estudianes de MUSICSTUDIO apasionados por el arte de la musica.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="images/img_2.jpg" class="ubea-card-item image-popup" title="Project name here.">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_2.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="images/img_1.jpg" class="ubea-card-item image-popup" title="Project name here.">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_1.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="images/img_3.jpg" class="ubea-card-item image-popup" title="Project name here.">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_3.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="images/img_4.jpg" class="ubea-card-item image-popup" title="Project name here.">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_4.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="images/img_5.jpg" class="ubea-card-item image-popup" title="Project name here.">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="images/img_6.jpg" class="ubea-card-item image-popup" title="Project name here.">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="images/img_6.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ubea-section" id="ubea-faq" data-section="faq">
            <div class="ubea-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center ubea-heading">
                        <h2>Preguntas Frecuentes</h2>
                        <p>Estas son las prefuntas mas comunes...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="ubea-accordion">
                            <div class="ubea-accordion-heading">
                                <div class="icon"><i class="icon-cross"></i></div>
                                <h3>Que dias atenden?</h3>
                            </div>
                            <div class="ubea-accordion-content">
                                <div class="inner">
                                    <p>Atendemos todos los dias incluido feriados =)</p>
                                </div>
                            </div>
                        </div>
                        <div class="ubea-accordion">
                            <div class="ubea-accordion-heading">
                                <div class="icon"><i class="icon-cross"></i></div>
                                <h3>Cómo puedo reservar mi sala?</h3>
                            </div>
                            <div class="ubea-accordion-content">
                                <div class="inner">
                                    <p>Simplemente haciendole click al boton "reserva aqui" que se encuentra en la parte superior de la página web. </p>
                                </div>
                            </div>
                        </div>
                        <div class="ubea-accordion">
                            <div class="ubea-accordion-heading">
                                <div class="icon"><i class="icon-cross"></i></div>
                                <h3>Donde puedo hacer mis reclamos?</h3>
                            </div>
                            <div class="ubea-accordion-content">
                                <div class="inner">
                                    <p>Deberias acercarte directamente a nuestra oficina que se encuentra en .....</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="ubea-accordion">
                            <div class="ubea-accordion-heading">
                                <div class="icon"><i class="icon-cross"></i></div>
                                <h3>Enseñan tambien instruentos como es piano?</h3>
                            </div>
                            <div class="ubea-accordion-content">
                                <div class="inner">
                                    <p>Claro que si para mas informacion acerca de elo acercarse a nuestro centro. </p>
                                </div>
                            </div>
                        </div>
                        <div class="ubea-accordion">
                            <div class="ubea-accordion-heading">
                                <div class="icon"><i class="icon-cross"></i></div>
                                <h3>Cuánto es el costo de la sala?</h3>
                            </div>
                            <div class="ubea-accordion-content">
                                <div class="inner">
                                    <p>es costo de la sala rependera del las horas que abarque para informacion de pagos acercarse a nuestro centro. </p>
                                </div>
                            </div>
                        </div>
                        <div class="ubea-accordion">
                            <div class="ubea-accordion-heading">
                                <div class="icon"><i class="icon-cross"></i></div>
                                <h3>Existen clases gratis?</h3>
                            </div>
                            <div class="ubea-accordion-content">
                                <div class="inner">
                                    <p>Si, actualmente enemos en taller de niños de 6 a 9 años que es completamente gratis por el primer mes. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <div id="ubea-blog" data-section="about">
        <div class="ubea-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center ubea-heading">
                    <h2>Nosotros</h2>
                    <p>Inspirar comunidades para una vida más sana - desde la forma en que la gente piensa acerca de lo que escucha. Conectar a través de la musica, nuestra comunidad y el impacto social de todos nosotros. </p>
                </div>
            </div>
        </div>
    </div>
      
    <div id="ubea-contact" data-section="contact" class="ubea-cover ubea-cover-xs" style="background-image:url(images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="ubea-container">
            <div class="row text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-12">
                             <h3>Si Tienes alguna consulta, enviar a <a href="#">musicestudio@gmail.com</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="ubea-footer" role="contentinfo">
        <div class="ubea-container">
            
            <div class="row copyright">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2017 MUSIC STUDIO. Todos los derechos reservados.</small> 
                        <small class="block">Lima |<a href="#">Perú</a></small>
                    </p>
                    <p class="pull-right">
                        <ul class="ubea-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
     <!-- jQuery -->
    <script src="{{asset('js/plantilla/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/plantilla/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/plantilla/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/plantilla/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('js/plantilla/owl.carousel.min.js')}}"></script>
    <!-- countTo -->
    <script src="{{asset('js/plantilla/jquery.countTo.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('js/plantilla/jquery.flexslider-min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('js/plantilla/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plantilla/magnific-popup-options.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('js/plantilla/main.js')}}"></script>

    </body>
</html>

