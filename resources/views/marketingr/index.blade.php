<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <meta name="facebook-domain-verification" content="h42fr0ladpwm3fpvj88g9gkbkj4qbr" />
    <title>SALAMANDRA- Agencia de Marketing</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icons -->
    <link rel="icon" href="{{ asset('images/fevicon/favicon.png') }}" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- colors css -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" />
    <!-- wow animation css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">s
    <![endif]-->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '820660955129104');
        fbq('track', 'PageView');

        fbq('track', 'CompleteRegistration');
        fbq('track', 'Contact');
        fbq('track', 'FindLocation');
        fbq('track', 'Lead');
        fbq('track', 'ViewContent');

    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=820660955129104&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body id="default_theme" class="home_page1">
<!-- header -->
<header class="header header_style1">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-10">
                <div class="logo"><img src="{{ asset('images/salamandra-logo.png') }}" alt="#"> </div>
                <div class="main_menu float-right ">
                    <div class="menu">
                        <ul class="clearfix">
                            <li class="active"><a href="#">Inicio</a></li>
                            <li><a href={{ route('servicios') }}>Nuestros Servicios</a></li>
                            <li><a href="{{ route('mkt') }}">MKT Médico</a></li>
                            <li><a href="http://salamandramarketing.hubspotpagebuilder.com/salamandra-marketing">Promociones</a></li>
                            <li><a href="{{ route('contactus-show') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="right_bt"><a class="bt_main" href="https://api.whatsapp.com/send?phone=524612541898&text=Hola SALAMANDRA me interesan tus servicios ">WhatsApp</a> </div>
            </div>
        </div>
    </div>
</header>
<section id="banner_parallax" class="slide_banner1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="full">
                    <div class="slide_cont">
                        <h2 align="center">Potencializa tu empresa con nosotros</h2>
                        <p>Nos gustaría trabajar contigo. Llena el cuestionario para iniciar nuestro viaje juntos </p>
                        <div class="full slide_bt"> <a class="white_bt bt_main" href=" https://docs.google.com/forms/d/1i1X-U3MEneXBhUkKrPJSY8RWACROgZc2G1ahk0yU-wU/edit">Cuestionario</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="full">
                    <div class="slide_pc_img wow fadeInRight" data-wow-delay="1s" data-wow-duration="2s"> <img src="{{ asset('images/pc-banner.png') }}" alt="#" /> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end header -->
<!-- section -->
<section class="layout_padding padding_top_0">
    <div class="container">
        <div class="row margin_bottom_30">
            <!-- featured cont -->
            <div class="col-md-6 cont_theme_blog">
                <div class="full">
                    <h3 align="center">Nuestro Equipo</h3>
                    <p align="justify">Somos un equipo de profesionales apasionados de la mercadotecnia con amplia
                        experiencia en la creación de estrategias comerciales.
                        <br><br>
                        En <strong>Salamandra Marketing </strong> nos comprometemos al máximo en cada proyecto, creando sinergia absoluta con las Empresas que confían en nosotros.<br><br>
                        Nuestra <strong>agencia de mercadotecnia</strong> se ubica en la ciudad de <strong>Celaya Gto.</strong> en la que desarrollamos proyectos para diferentes
                        partes de república, en la cual cuidamos cada detalle para que todo el equipo cumpla con las expectativas de nuestros
                        clientes.
                    </p>
                </div>
            </div>
            <!-- end featured cont -->
            <!-- featured image -->
            <div class="col-md-6 wow fadeInRight" data-wow-delay="0.5" data-wow-duration="1s">
                <div class="full">
                    <div class="center"><img  class="img-equipo" src="{{ asset('images/equipo.png') }}" alt="#" /></div>
                </div>
            </div>
            <!-- end featured image -->
        </div>

    </div>
</section>
<!-- end section -->


<!-- section -->
<section class="layout_padding gradiant_bg cross_layout">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="information_blogs">
                    <div class="imf_icon"><img src="{{ asset('images/trabajo-equipo.png') }}" alt="#" /></div>
                    <div class="imf_head">
                        <h3>Trabajo en Equipo</h3>
                    </div>
                    <div class="imf_cont">
                        <p>Estamos convencidos de que uniendo fuerzas somos imparables, por eso
                            en nuestra Agencia <strong>Salamandra Marketing</strong> trabajamos de la mano contigo.</p>
                    </div>
                    <div class="imf_read"><a href="#">Ver más</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="information_blogs">
                    <div class="imf_icon"><img src="{{ asset('images/creatividad.png') }}" alt="#" /></div>
                    <div class="imf_head">
                        <h3>Creatividad</h3>
                    </div>
                    <div class="imf_cont">
                        <p>Creemos que la innovación y el pensamiento creativo son de suma importancia en
                            los negocios, por ello en la <strong>Agencia Salamandra Marketing</strong> buscamos la constante innovación.</p>
                    </div>
                    <div class="imf_read"><a href="#">Ver más</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="information_blogs">
                    <div class="imf_icon"><img src="{{ asset('images/compromiso.png') }}" alt="#" /></div>
                    <div class="imf_head">
                        <h3>Compromiso</h3>
                    </div>
                    <div class="imf_cont">
                        <p>En <strong>Salamandra Marketing </strong> nos comprometemos al 100%
                            en cada uno de los proyectos para alcanzar juntos nuestras metas.</p>
                    </div>
                    <div class="imf_read"><a href="#">Ver más</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- section -->
<section class="layout_padding layer_style">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="full text_align_center">
                    <div class="heading_main center_head_border heading_style_1">
                        <h2>Nuestros <span>Servicios</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row app-features">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="features-left">
                    <li>

                        <img src="{{ asset('images/desarrollo-web.png') }}" >
                        <div class="fl-inner">
                            <h4>DESARROLLO WEB</h4>
                            <p>Creamos espacios a la medida de las necesidades de tu marca. SEO y SEM. </p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/branding.png') }}" >
                        <div class="fl-inner">
                            <h4>BRANDING</h4>
                            <p>Construimos y fortalecemos la identidad de tu marca.</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/redes-sociales.png') }}" >
                        <div class="fl-inner">
                            <h4>ADMINISTRACIÓN DE REDES SOCIALES</h4>
                            <p>Generamos y manejamos la comunicación con tu comunidad digital </p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/estrategias-comerciales.png') }}" >
                        <div class="fl-inner">
                            <h4>GENERACIÓN DE ESTRATEGIAS COMERCIALES EN EMPRESAS</h4>
                            <p>Detectamos oportunidades en tus procesos para darle una mejor experiencia a tus clientes. </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="features-right">
                    <li>
                        <img src="{{ asset('images/consultoria-marketing.png') }}" >
                        <div class="fr-inner">
                            <h4>CONSULTORÍA DE MARKETING</h4>
                            <p>Te compartimos nuestra experiencia para facilitar el logro de tus objetivos. </p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/produccion-audiovisual.png') }}" >
                        <div class="fr-inner">
                            <h4>PRODUCCIÓN AUDIOVISUAL</h4>
                            <p>Marca la diferencia con videos creativos y de calidad en materia de identidad empresarial, eventos y mucho más. </p>
                        </div>
                    </li>


                </ul>
            </div>
            <div class="col-md-4 wow fadeInRight" data-wow-delay="0.5" data-wow-duration="1s">
                <div class="full">
                    <div class="center">
                        <img src="{{ asset('images/salamandra-m.jpeg') }}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- section -->
<section class="layout_padding gradiant_bg cross_layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="full text_align_center white_fonts">
                    <div class="heading_main center_head_border heading_style_1">
                        <h2>Algunos de Nuestros <span>Clientes</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row step_section">
            <div class="offset-xl-1 col-xl-10 col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog arrow_right_step">
                            <div class="step_inner">
                                <img src="{{ asset('images/fer-almanza.png') }}" alt="#" />

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                            <div class="step_inner">
                                <img src="{{ asset('images/renacer.png') }}" alt="#" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                            <div class="step_inner">
                                <img src="{{ asset('images/prokids.png') }}" alt="#" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                            <div class="step_inner">
                                <img src="{{ asset('images/bachoco.png') }}" alt="#" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                            <div class="step_inner">
                                <img src="{{ asset('images/medico.png') }}" alt="#" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                            <div class="step_inner">
                                <img src="{{ asset('images/femme.png') }}" alt="#" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                            <div class="step_inner">
                                <img src="{{ asset('images/vasculacare.png') }}" alt="#" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="step_blog">
                            <div class="step_inner">
                                <img src="{{ asset('images/neurobajio.png') }}" alt="#" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- section -->

<!-- section -->
<section class="contact_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6" style="padding:0;">
                <div class="full">
                    <div id="map"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="padding:0;">
                <div class="full">
                    <div class="contact_form white_heading_border">
                        <div class="contact_form_inner">
                            <div class="full_heading white_fonts heading_main heading_style_1">
                                <h2>Contacta<span>nos</span></h2>
                            </div>
                            <p>Envíanos un correo para más información</p>
                            <div class="form_contact">

                                {!! Form::open(['route' => 'contactus.store', 'method' => 'post']) !!}
                                <div class="form-group">
                                    {!! Form::label('email', 'E-Mail') !!}
                                    {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('body', 'Asunto') !!}
                                    {!! Form::text('body', null, ['class' => 'form-control' ]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('message', 'Mensaje') !!}
                                    {!! Form::textarea('message', null, ['class' => 'form-control' ]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- footer -->
<footer class="footer_style_2">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6  margin_bottom_30">
                    <div class="full width_9" style="margin-bottom:25px;"> <a href="index.html"><img class="img-responsive" width="250" src="{{ asset('images/salamandra-logo.png') }}" alt="#"></a> </div>
                    <div class="full width_9">
                        <p align="justify">En <strong> Salamandra Agencia de Marketing </strong> somos creativos, estrategas y muy curiosos,
                            como el anfibio del cual llevamos nombre. Nos volvemos parte de tu negocio porque
                            creemos que estando 100% comprometidos con tu marca es la forma de alcanzar el éxito.<br><br>
                            <strong>¡Uniendo fuerzas no podrán detenernos!</strong>
                        </p>
                    </div>
                    <div class="full width_9">
                        <p align="justify">Nuestro servicio al cliente es nuestra fortaleza principal, ya que nuestro compromiso con
                            cada cliente va más allá de un simple acuerdo comercial, sino una sinergia completa para
                            alcanzar los objetivos establecidos.<br><br>
                            Generamos relaciones de amistad y compañerismo, más que un simple proyecto.
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 margin_bottom_30">
                    <div class="full">
                        <div class="footer_blog_2">
                            <h3>Social</h3>
                        </div>
                    </div>
                    <div class="full">
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-facebook" style="font-size:36px"></i> 256 Likes</a></li>
                            <li><a href="#"><i class="fa fa-instagram" style="font-size:36px"></i> 1,258 Followers</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer bottom -->
    <div class="footer_bottom">
        <p>Dessigned and developed by <strong>Salamandra Marketing</strong></p>
    </div>
</footer>
<!-- end footer -->
<!--=========== js section ===========-->
<!-- jQuery (necessary for Bootstrap's JavaScript) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- wow animation -->
<script src="{{ asset('js/wow.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>