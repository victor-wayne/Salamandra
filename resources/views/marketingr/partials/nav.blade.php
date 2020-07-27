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
                            <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
                            <li><a href="{{ route('servicios') }}">Nuestros Servicios</a></li>
                            <li><a href="{{route('mkt')}}">MKT Médico</a></li>
                            <li><a href="#">Promociones</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-2">
                <div class="right_bt"><a class="bt_main" href="https://api.whatsapp.com/send?phone=4612541898&text=Hola SALAMANDRA me interesan tus servicios ">WhatsApp</a> </div>
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