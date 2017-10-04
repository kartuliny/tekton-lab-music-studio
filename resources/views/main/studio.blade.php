@extends('principal.master')
@section('slider')
<div id="ubea-hero" class="js-fullheight"  data-section="home">
        <div class="flexslider js-fullheight">
            <ul class="slides">
            <li style="background-image: url(images/img_bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <h2>Despierta el talento que llevas dentro</h2>
                            <p><a  href="/sala/instru" class="btn btn-primary btn-lg">Reservar sala ahora!</a></p>
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
                            <p><a href="/sala/room" class="btn btn-primary btn-lg">Reservar sala ahora!</a></p>
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
                            <p><a href="/sala/cliente" class="btn btn-primary btn-lg">Reservar sala ahora!</a></p>
                        </div>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </div>
@endsection
@section('menu')
<li class="active"><a href="#" data-nav-section="home">Inicio</a></li>
                        <li><a href="#" data-nav-section="services">Servicios</a></li>
                        <li><a href="#" data-nav-section="portfolio">Galería</a></li>
                        <li><a href="#" data-nav-section="about">Nosotros</a></li>
                        <li><a href="#" data-nav-section="contact">Contactanos</a></li>
@endsection
@section('content')
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
      
    <div id="ubea-contact" data-section="contact" class="ubea-cover ubea-cover-xs" style="background-image:url(images/img_bg_2.png);">
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

@endsection


