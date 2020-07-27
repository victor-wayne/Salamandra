@include('marketingr.partials.nav')



@yield('servicios')



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
        <div class="row margin_bottom_30">
            <!-- featured cont -->
            <div class="col-sm-3" ></div>
            <div class="col-sm-6 cont_theme_blog" style="background-color:lavender;">
                <div class="full">

                    <p align="justify">Dentro de <strong>Salamandra Marketing</strong> nos gusta comprometernos al
                        máximo en cada uno de los proyectos por lo que nos hemos ganado la confianza
                        de nuestros clientes generando relaciones duraderas.
                    </p>
                </div>
            </div>
            <!-- end featured cont -->
        </div>

    </div>
</section>
<!-- end section -->
<!-- section -->





<!-- end section -->



<!-- footer -->
<footer class="footer_style_2">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"  ></div>
                <div class="col-sm-6  margin_bottom_30">
                    <div class="full width_9" style="margin-bottom:25px;"> <a href="{{ route('home') }}"><img class="img-responsive" width="250" src="{{ asset('images/salamandra-logo.png') }}" alt="#"></a> </div>
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


