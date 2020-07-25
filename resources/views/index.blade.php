@extends ("layouts.index")
@section("contenido")
<div class="loader">
    <div class="load-title">
        <img src="img/logo_ambar.png" alt="">
        <div class="load-circle"></div>
    </div>
</div>
<div class="top-baner bottom-margin swiper-anime slide-arow poind-closest" id="home">
    <div class="swiper-container top-slider" data-autoplay="0" data-loop="0" data-speed="600" data-center="0"
        data-slides-per-view="1">
        <div class="swiper-wrapper">
            <div class="swiper-slide first-slide" data-val="0">
                <div class="block-bg">
                    <div class="bg-wrap">
                        <div class="bg" style="background-image:url( 'img/carrusel1.jpg')"></div>
                        <div class="white-mobile-layer"></div>
                    </div>
                    <div class="title-style-1 vertical-align">
                        <div class="sub-title">
                            <h5 class="h5">Intro</h5>
                        </div>
                        <h1 class="h1">Gone<br> are the days</h1>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-val="1">
                <div class="block-bg">
                    <div class="bg-wrap">
                        <div class="bg" style="background-image:url('/img/carrusel2.jpg')"></div>
                        <div class="white-mobile-layer"></div>
                    </div>
                    <div class="title-style-1 vertical-align">
                        <div class="sub-title">
                            <h5 class="h5">Intro</h5>
                        </div>
                        <h2 class="h1">True<br> color in you</h2>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-val="2">
                <div class="block-bg">
                    <div class="bg-wrap">
                        <div class="bg" style="background-image:url('/img/carrusel3.jpg')"></div>
                        <div class="white-mobile-layer"></div>
                    </div>
                    <div class="title-style-1 vertical-align">
                        <div class="sub-title">
                            <h5 class="h5">Intro</h5>
                        </div>
                        <h2 class="h1">Beauty <br>in the details</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination hidden"></div>
    </div>
    <div class="slider-number"><span></span>/<b></b></div>
</div>

<!-- Seccion conocenos inicia -->
<section class="section section-first" id="conocenos">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="title-style-2 text-next wow zoomIn" data-wow-delay="0.2s">
                    <div class="sub-title">
                        <h5 class="h5">Conócenos</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-9">
                <div class="item-padd-mob wow zoomIn" data-wow-delay="0.4s">
                    <div class="simple-text lg">
                        <p> ÁMBAR está dedicado a las personas que quieren resaltar su
                            esencia a través de los accesorios. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="item-padd-mob wow zoomIn" data-wow-delay="0.6s">
                    <div class="simple-text md">
                        <p>Te ayudaremos a conocer mejor tu cuerpo, las tendencias y a utilizar la moda a tu favor.
                            Encontrarás tips sobre moda, accesorios, usos correctos de prendas y complementos, además de
                            una amplia gama de joyería y accesorios que te acompañarán en tus mejores outfits. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="image wow zoomIn" data-wow-delay="0.8s"><img src="img/conocenos.jpg" alt=""
                        class="resp-img"></div>
            </div>
        </div>
    </div>
</section>
<!-- Seccion conocenos finaliza -->

<section class="section" id="accesorios">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="title-style-2 wow zoomIn" data-wow-delay="0.2s">
                    <div class="sub-title">
                        <h5 class="h5">Accesorios</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-sm-9">
                <div class="filters wow zoomIn" data-wow-delay="0.4s">
                    <div class="drop-filter"><span>All </span><i class="icon-down-open-mini"></i></div>
                    <ul class="filter-mob-list">
                        <li class="active" data-filter="*">Todos</li>
                        <li data-filter=".Aretes">Aretes</li>
                        <li data-filter=".Collares">Collares</li>
                        <li data-filter=".Pulseras">Pulseras</li>
                        <li data-filter=".Cabello">Cabello</li>
                        <li data-filter=".Anillos">Anillos</li>
                        <li data-filter=".Complementos">Complementos</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="izotope-container">
                <div class="grid-sizer"></div>
                <!-- Aretes -->
                <div class="item wh-25 Aretes photo wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Aretes/Arracadas.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Aretes photo wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Aretes/Aretes tornasol.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-50 Aretes photo wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Aretes/1.png" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <!-- Collares -->
                <div class="item wh-25 Collares graphic wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Collares/1.png" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-50 Collares graphic wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Collares/2.png" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Collares graphic wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Collares/3.png" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Collares graphic wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Collares/4.png" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <!-- Pulseras -->
                <div class="item wh-25 Pulseras  graphic wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Pulseras/1.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Pulseras photo wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Pulseras/2.jpeg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Pulseras photo wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Pulseras/3.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <!-- Cabello -->
                <div class="item wh-50 Cabello ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Cabello/Cucas.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Cabello ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Cabello/Diadema.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Cabello ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Cabello/Pasador.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Cabello ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Cabello/Pasadores.jpeg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Cabello ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Cabello/Dnegra.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <!-- Anillos -->
                <div class="item wh-25 Anillos ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Anillos/Anillos.jpeg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Anillos ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Anillos/Anillos2.jpg" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Anillos ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Anillos/Anilloajus.png" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Anillos ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Anillos/Anillos ajustables.png" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Anillos ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Anillos/Anillos.png" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <!-- Complementos -->
                <div class="item wh-25 Complementos ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Complementos/1.JPG" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
                <div class="item wh-25 Complementos ux wow zoomIn" data-wow-delay="0.2s">
                    <div class="item-drid-size">
                        <img src="img/Complementos/2.JPG" alt="" class="resp-img">
                        <a data-toggle="modal" data-target="#modal1"
                            class="link-wrap item-hov"><span></span><span></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>
<!-- Seccion categorias finaliza-->

<!-- Seccion Banner 1 inicia-->
<section class="section paddigbanner banner2">

    <div class="bg fx" style="background-image:url(img/ban1.jpeg)"></div>
    <div class="container">
        <div class="folow-item col-white wow zoomIn" data-wow-delay="0.4s">
        <h2 class="textbanner">¡Lo quiero todo! | Encuentra nuestra colecci&oacute;n verano-otoño 2020 </h2>
        </div>
    </div>
</section>
<!-- Seccion Banner 1 finaliza-->

<!-- Seccion como comprar inicia-->
<section class="section section-bg padingcomprar">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="title-style-2 text-next wow zoomIn" data-wow-delay="0.2s">
                    <div class="sub-title">
                        <h5 class="h5">C&oacute;mo comprar</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-sm-9">
                <div class="quote wow zoomIn" data-wow-delay="0.3s">
                    <p>“Siempre he pensado en los accesorios, como el punto de exclamaci&oacute;n de un oufit femenino.”
                    </p>
                    <h6 class="h6">- Michael Kors</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="service-item item-hov wow zoomIn" data-wow-delay="0.2s">
                    <img src="img/service_icon_1.png" alt="">
                    <div class="title">
                        <h4 class="h4">Elige tu accesorio:</h4>
                    </div>
                    <div class="simple-text">
                        <p> Selecciona las piezas que deseas comprar y ponte en contacto
                            vía Whatsapp o en nuestras
                            redes sociales.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="service-item item-hov wow zoomIn" data-wow-delay="0.2s">
                    <img src="img/service_icon_1.png" alt="">
                    <div class="title">
                        <h4 class="h4">Punto de entrega:</h4>
                    </div>
                    <div class="simple-text">
                        <p> Selecciona un punto público para recibir tus accesorios. No tenemos tienda física,
                            hacemos entregas en diferentes puntos de Pachuca y/o CD.MX.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="service-item item-hov wow zoomIn" data-wow-delay="0.2s">
                    <img src="img/service_icon_1.png" alt="">
                    <div class="title">
                        <h4 class="h4">Método de pago:</h4>
                    </div>
                    <div class="simple-text">
                        <p>Recibimos transferencias, pagos vía Oxxo o en efectivo a contraentrega. Elige el que
                            mejor te quede.</p>
                    </div>
                    <a href="#contacto" class="link-type-1">Contacto<i class="icon-right-open-mini"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Seccion como comprar finaliza-->

<!-- Seccion Banner 2 inicia-->

<section class="section padd-sm banner2">
    <div class="bg fix" style="background-color:#ef5b5b ;"></div>
    <div class="container">
        <div class="folow-item col-white wow zoomIn" data-wow-delay="0.4s">

            <h6 class="h2 title">Comparte tu experiencia ÁMBAR</h6>
            <div class="">
                <p class="textbanner">Mándanos una foto utilizando tus accesorios ÁMBAR</p>
            </div>


            <div class="clear"></div>

        </div>
    </div>
</section>
<!-- Seccion Banner 2 finaliza-->

<!-- Redes sociales  inicia -->

<section class="section padd-sm" id="redes sociales">
    <div class="bg fix" style="background-image:url(img/rs.jpg)"></div>
    <div class="container">
        <div class="folow-item col-white wow zoomIn" data-wow-delay="0.4s">
            <img src="static/img/rs.jpg" alt="">
            <h6 class="h7 title">Síguenos</h6>
            <div class="simple-text">
                <p>Encuentra nuestros productos y conoce más de ÁMBAR en el día a día</p>
            </div>


            <div class="clear"></div>
            <a href="#" class="link-type-2"><span>Seguir Facebook</span></a>
            <a href="#" class="link-type-2"><span>Seguir Instagram</span></a>
            <a href="https://api.whatsapp.com/send?phone=+5215532004667&text=hola" class="link-type-2"><span>Contacto
                    Whatsapp</span></a>
        </div>
    </div>
</section>

<!-- Redes sociales finaliza -->


<!-- Dream Team inicia -->
<section class="section poind-closest border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="title-style-2 text-next wow zoomIn" data-wow-delay="0.2s">
                    <div class="sub-title">
                        <h5 class="h5">Equipo</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-sm-9">
                <div class="item-padd-mob wow zoomIn" data-wow-delay="0.4s">
                    <div class="simple-text md">
                        <p>Unimos esfuerzos y talentos para hacerte lucir espectacular con nuestros accesorios.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="swiper-container team-slider" data-autoplay="5000" data-loop="0" data-speed="1000"
                data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
                data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="padd-wrap wow zoomIn" data-wow-delay="0.2s">
                            <div class="team-item item-hov">
                                <img src="img/lic.jpg" alt="" class="resp-img">
                                <div class="team-desc item-layer">
                                    <div class="vertical-align w-full">
                                        <h4 class="h4"><a>Martha Jones</a></h4>
                                        <span>Design Lead</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="padd-wrap wow zoomIn" data-wow-delay="0.4s">
                            <div class="team-item item-hov">
                                <img src="img/lic2.jpg" alt="" class="resp-img">
                                <div class="team-desc item-layer">
                                    <div class="vertical-align w-full">
                                        <h4 class="h4"><a>Martha Jones</a></h4>
                                        <span>Design Lead</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="padd-wrap wow zoomIn" data-wow-delay="0.6s">
                            <div class="team-item item-hov">
                                <img src="img/lic3.jpg" alt="" class="resp-img">
                                <div class="team-desc item-layer">
                                    <div class="vertical-align w-full">
                                        <h4 class="h4"><a>Martha Jones</a></h4>
                                        <span>Design Lead</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pagination point-style alb-point"></div>
</section>
<!-- Dream Team finaliza -->

<!-- Contacto Whatsapp -->
<section class="section margincontacto section-scroll" style="background-color: #C89FEB;" id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <div class="title-style-2 text-next wow zoomIn" data-wow-delay="0.2s">
                    <div class="sub-title">
                        <h5 class="h5">Contacto</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-9">
                <div class="item-padd-mob wow zoomIn" data-wow-delay="0.4s">
                    <div class="simple-text lg">
                        <p>Ponte en contacto con nosotros, realiza tu pedido mediante el formulario. </p>
                    </div>

                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <form action="/" onsubmit="return submitForm();" method="post" name="contactform"
                    class="contact-form wow zoomIn" data-wow-delay="0.6s" id="contact-form">
                    <input placeholder="Tu nombre" class="input-field" name="name" required="" type="text">
                    <input placeholder="Correo" class="input-field" name="email" required="" type="email">
                    <textarea placeholder="Mensaje" class="input-field" name="message"></textarea>
                    <input value="Enviar" class="input-send submit margin" type="submit" name="submit">
                </form>
                <div class="success">
                    <div class="popup">
                        <div class="close-popup"><span>+</span></div>
                        <div class="cell-view">
                            <h4 class="h4">Tu mensaje enviado</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contacto Whatsapp finaliza -->




<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <!-- izquierda -->
                            <div class="container-fluid1">
                                <img src="img/modal.jpg" alt="" class="resp-img">
                            </div>

                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="col-md-6 ml-auto">
                            <!-- derecha -->
                            <div class="sub-title">
                                <h5 class="h5">Productos</h5>
                            </div>
                            <div class="simple-text lg">
                                <p> ÁMBAR está dedicado a las personas que quieren
                                    resaltar su esencia a través de los accesorios. </p>
                            </div>

                            <div class="sub-title2">

                                <span style="font-size: 2rem;">
                                    <a class="botonfacebook" href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a class="botonwhats"
                                        href="https://api.whatsapp.com/send?phone=+5215532004667&text=hola"><i
                                            class="fab fa-whatsapp-square"></i></a>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
</div>


@endsection
