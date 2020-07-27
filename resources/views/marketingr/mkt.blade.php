@include('marketingr.partials.nav')



@yield('mkt')


<!-- section -->
<section class="layout_padding padding_top_0">
    <div class="container">
        <div class="row margin_bottom_30">
            <!-- featured cont -->
            <div class="col-md-6 cont_theme_blog">
                <div class="full">
                    <h3 align="center">Marketing Médico</h3>
                    <p align="justify">Región Salud es un medio de acercamiento entre las personas y
                        los profesionales de la salud en el cual podrás encontrar:<br><br>
                        <lu>
                            <li>Información relevante sobre salud</li>
                            <li>Artículos médicos</li>
                            <li>Tips de salud</li>
                            <li>Médicos de diferentes especialidades</li>
                            <li>Nutriólogos</li>
                            <li>Dentistas</li>
                            <li>Psicólogos</li>
                            <li>Servicios de enfermería</li>
                        </lu><br>
                        Y mucho más ....<br><br>
                        Todo lo que necesitas saber de salud en un solo lugar.
                    </p>
                </div>
            </div>
            <!-- end featured cont -->
            <!-- featured image -->
            <div class="col-md-6 wow fadeInRight" data-wow-delay="0.5" data-wow-duration="1s">
                <div class="full">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="center"><iframe width="500" height="400" src="https://www.youtube.com/embed/bvbZTdOAoeg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                </div>
            </div>
            <!-- end featured image -->
        </div>

    </div>
</section>
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



