<?php
include 'connection_bd.php';
$conn = conectar();

$sql = "INSERT INTO `usuario`(`nombre`, `email`, `telefono`, `pass`)
VALUES ('value-1', 'value-2', 'value-3', 'value-4')";

try{if (mysqli_query($conn, $sql)) {
 
} else {
  echo "Error en la BD: " . mysqli_error($conn);
}}catch (e){
 echo'error';
}

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en-US">

<head>
  <title>Gorditas Doña Lola Tlaquepaque</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css%20%281%29/bootstrap.css">
  <link rel="stylesheet" href="css%20%281%29/fonts.css">
  <link rel="stylesheet" href="css%20%281%29/style.css">
  <link rel="stylesheet" href="css%20%281%29/galery.css">
  <link rel="stylesheet" href="gh/FortAwesome/Font-Awesome%405.1.0/web-fonts-with-css/css/fontawesome-all.min.css"
    crossorigin="anonymous">
  <!-- <script src="ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <!-- <script src="mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script> -->


  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }

    .whatsapp_fixed {
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 3px;
      /* background: #282828;*/
      position: fixed;
      top: 0.5rem;
      right: 1rem;
      height: 40px;
      width: 50px;
      z-index: 9999;
    }
  </style>

  <!-- Facebook Pixel Code -->

  <script>

    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?

          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };

      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';

      n.queue = []; t = b.createElement(e); t.async = !0;

      t.src = v; s = b.getElementsByTagName(e)[0];

      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',

      'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '3247711131908165');

    fbq('track', 'PageView');

  </script>

  <noscript>

    <img height="1" width="1" src="tr?id=3247711131908165&ev=PageView

  &noscript=1">

  </noscript>

  <!-- End Facebook Pixel Code -->


</head>

<body>






  <div class="preloader">

    <div class="cssload-box-loading"></div>

  </div>

  <div class="page">

    <!-- Pagina Superior-->

    <header class="section novi-background bg-cover page-header" id="home">

      <!-- Barra de Navegacion-->

      <div class="rd-navbar-wrap">

        <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
          data-xl-layout="rd-navbar-sidebar" data-xl-device-layout="rd-navbar-sidebar"
          data-xxl-layout="rd-navbar-sidebar" data-xxl-device-layout="rd-navbar-sidebar" data-xl-stick-up-offset="400"
          data-xxl-stick-up-offset="400">

          <div class="rd-navbar-main-outer">

            <div class="rd-navbar-main">

              <!-- Panel de la barar de navegacion-->

              <div class="rd-navbar-panel">

                <!-- Logo Barra Nevegacion Estatica-->

                <div class="rd-navbar-brand"><a class="brand" href="index.html" style="max-width: 88px;">

                    <img src="images/logo.png" srcset="images/logo.png" style="max-width: 100px;"></a>

                </div>

                <!-- Menu de Hamburguesa-->
                <button id="menu" class="rd-navbar-toggle"
                  data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>

                <div class="container_nav">
                  <!-- Mail-->
                  <div><a href="mailto:octaviofidel561@gmail.com"><i class="fa fa-envelope contacts-classic-text"
                        style="font-size: 25px; color: goldenrod; padding: 12px;"></i></a></div>
                  <!-- Whats-->
                  <div><a href="https://api.whatsapp.com/send?phone=523334682260"><i class="fab fa-whatsapp"
                        style="font-size:25px; color: goldenrod; cursor: pointer; padding: 12px;"></i></a></div>
                  <!-- Telefono de casa-->
                  <div><a href="tel:33 34 68 22 60"><i class="mdi mdi-phone"
                        style="font-size: 25px; color: goldenrod; cursor: pointer; padding: 12px;"></i></a></div>

                </div>


              </div>

              <div class="rd-navbar-main-element">

                <div class="rd-navbar-nav-wrap" id="cerrar">



                  <!-- Barra Navegacion Movible-->

                  <ul class="rd-navbar-nav">

                    <li class="logocasa">

                      <a class="rd-nav-item" href="index.html" style="max-width: 88px;">

                        <img src="images/logo.png" srcset="images/logo.png" style="max-width: 100px;"></a>

                    </li>
                    <!-- Apartado de la barar de navegacion-->
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Inicio</a>

                    </li>

                    <li class="rd-nav-item"><a class="rd-nav-link" href="#about">¿Quiénes somos?</a>

                    </li><li class="rd-nav-item"><a class="rd-nav-link" href="#services">Menu</a>

                    </li>

                    <li class="rd-nav-item"><a class="rd-nav-link" href="galeria.html">Galería</a>

                    </li>

                    <li class="rd-nav-item"><a class="rd-nav-link" href="#cat">haz tu pedido</a>

                    </li>

                    <li class="rd-nav-item"><a class="rd-nav-link" href="inicioSesion.php">Inicio de sesion</a>

                    </li>


                  </ul>

                  <div class="contacts-classic">

                    <div class="unit align-items-center">

                      <div class="unit-body"><a class="contacts-classic-text"
                          href="https://api.whatsapp.com/send?phone=52333468220" target="_blank">

                          <div class="unit-left"><span class="icon novi-icon fab fa-whatsapp"></span></div>
                        </a></div>

                      <div class="unit-body"><a class="contacts-classic-text" href="tel:3334682260" target="_blank">

                          <div class="unit-left"><span class="icon novi-icon mdi mdi-phone"></span></div>
                        </a></div>

                      <a href="https://www.facebook.com/profile.php?id=100051042773028" target="_blank"><i
                          class="fab fa-facebook" style="font-size: 25px; color:darkgrey; cursor: pointer;"></i></a>

                      <a href="https://www.instagram.com/gorditasdonalolatlaquepaque/" target="_blank"><i
                          class="fab fa-instagram" style="font-size: 25px; color: darkgray; cursor: pointer;"></i></a>



                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </nav>

      </div>

    </header>



    <section class="section novi-background bg-cover section-horace">



      <!-- Swiper-->

      <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="3000"
        data-simulate-touch="false" data-custom-prev="#swiper-prev" data-custom-next="#swiper-next"
        data-slide-effect="fade" data-autoplaytimeout="20">

        <div class="swiper-wrapper text-center">
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/gord.jpeg">



            <ul class="project-modern-info">

              <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
                data-caption-delay="200"></li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
              </li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
              </li>

            </ul>

          </div>
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/pelliz.jpeg">



            <ul class="project-modern-info"></ul>

            <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
              data-caption-delay="200"></li>

            <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
            </li>

            <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
            </li>





          </div>
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/quesa.jpeg">



            <ul class="project-modern-info">

              <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
                data-caption-delay="200"></li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
              </li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
              </li>

            </ul>



          </div>
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/acane.jpeg">



            <ul class="project-modern-info">

              <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
                data-caption-delay="200"></li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
              </li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
              </li>

            </ul>



          </div>
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/cafe.jpg">



            <ul class="project-modern-info">

              <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
                data-caption-delay="200"></li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
              </li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
              </li>

            </ul>



          </div>
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/logo.png">



            <ul class="project-modern-info">

              <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
                data-caption-delay="200"></li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
              </li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
              </li>

            </ul>



          </div>
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/dulcemuerto.jpg">



            <ul class="project-modern-info">

              <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
                data-caption-delay="200"></li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
              </li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
              </li>

            </ul>



          </div>
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/logo.png">



            <ul class="project-modern-info">

              <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
                data-caption-delay="200"></li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
              </li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
              </li>

            </ul>



          </div>
          <!-- Poner Imagen aqui para el carrousel-->
          <div class="swiper-slide context-dark" data-slide-bg="images/pelliz.jpeg">



            <ul class="project-modern-info">

              <li class="heading-6 project-modern-info-item project-modern-address" data-caption-animate="fadeInDown"
                data-caption-delay="200"></li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="100">
              </li>

              <li class="heading-6 project-modern-info-item" data-caption-animate="fadeInDown" data-caption-delay="0">
              </li>

            </ul>



          </div>

          <!-- Swiper Pagination-->



          <!--.swiper-pagination-->

        </div>

        <div class="swiper-pagination"></div>



        <!-- If we need navigation buttons -->

        <div class="swiper-button-prev"></div>

        <div class="swiper-button-next"></div>

      </div>

    </section>


    <!-- ======= Seccion Acerde De ======= -->
    <section id="about" class="about ">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="images/lugar 1.jpeg" class="img-fluid" alt="imagen 1 no mostrada">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Bienvenido a Gorditas Doña Lola Tlaquepaque.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute
                irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                pariatur.
              </li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>
          </div>
        </div>

      </div>
    </section><!-- Termina Seccion Acerca De -->

    <!-- Comienzan Servicios -->
    <section id="services" class="services section novi-background bg-cover section-lg section-inset-2 bg-gray-100">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Alimentos</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <img src="images/pelliz.jpeg" alt="" class="img-right">
              <h4><a href="">Pelliscada</a></h4>
              <p>A  base de masa con una cama de queso y un guiso al gusto</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <img src="images/gord.jpeg" alt="" class="img-right">
              <h4><a href="">Gordita</a></h4>
              <p>gordita rellena con el guisado a tu gusto  </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <img src="images/acane.jpeg" alt="" class="img-right">
              <h4><a href="">Acanelada</a></h4>
              <p>Gordita acanelada a base de canela y nuez y pilloncillo.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <img src="images/quesa.jpeg" alt="" class="img-right">
              <h4><a href="">Quesadilla</a></h4>
              <p>Tortilla de tamaño grande  con una cama de queso y un guiso </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <img src="images/pelliz.jpeg" alt="" class="img-right">
              <h4><a href="">Taco</a></h4>
              <p>Tortilla de tamaño grande con un guisado  </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Sope</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- Termina seccion de Servicios -->
<!-- Inicia Secciond de imagen movible -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Disfruta de nuestro rico Cafe de Olla</h3>
          <p> Cafe de olla 100% artesanal elaborada en una olla de barro con pillocillo y canela.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
          </p>

        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- Contact Us<div class="container">
                <div class="caption-classic">
                    <div class="caption-classic-group">
                        <h1 class="caption-classic-title wow fadeInLeft"><span class="font-weight-light">Contacto</span></h1>
                    </div>
                    <div class="caption-classic-decor wow blurIn"></div>
                </div>-->
    <section class="section novi-background bg-cover bg-white section-inset-1 parallax-scene-js pading_franjas"
      id="contacts">
      <section class="ssection novi-background bg-cover bg-white section-inset-1 parallax-scene-js pading_franjas"
        id="cat">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block wow fadeInLeft"><img src="images/logo.png" alt="" width="200"
                height="200">
            </div>

          </div>
        </div>
        <div>
        <div style="font-size: 25px; color: goldenrod;">
        <h1>haz tu pedido</h1>
         <p>Gorditas</p>
         <p>Quesadillas</p>
         <p>Pellizcadas</p>
         <p>Tacos</p>
        </div>
  </div>
  </section>
  </section>
  <section id="maps" class=" section novi-background bg-cover section-lg section-inset-2 bg-gray-100">
    <label class="form-label" for="contact-name-2">Comentarios</label>
    <textarea class="form-input" name="comentarios"></textarea>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.768902170753!2d-103.32041181405663!3d20.6382744518822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b24c85da1a85%3A0x5876da678aa1b465!2sGorditas%20Do%C3%B1a%20Lola%20Tlaquepaque!5e0!3m2!1ses-419!2sus!4v1707704317011!5m2!1ses-419!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="tam_mapa" allowfullscreen=""></iframe>
  </section>
</div>

  <!--Fotter-->
  <footer class="section novi-background bg-cover section-sm footer-classic context-dark">
    <div style="align-items:center; max-width:100%">
      <div class="row">
        <div class="col-md-2 col-sm-12 col-xm-12">
          <div style="font-size: 25px; color: goldenrod;">
            <div><a href="mailto:octaviofidel561@hotmail.com"><i class="fa fa-envelope contacts-classic-text"
                  style="font-size: 20px; color: goldenrod;"></i><span style="color: white; font-size: 14px;">
                  Octaviofidel561@hotmail.com</span></a></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-12 col-xm-12">
          <div style="font-size: 25px;">
            <div><a href="https://api.whatsapp.com/send?phone=523334682260" target="_blank"><i class="fab fa-whatsapp"
                  style="font-size:20px; color: goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;">  +52 33 34 68 22 60</span></a></div>
          </div>
        </div>
        <div class="col-md-1 col-sm-12 col-xm-12">
          <div style="font-size: 25px;">
            <div><a href="tel: 33 34 68 22 60"><i class="mdi mdi-phone"
                  style="font-size: 20px; color: goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;"> (33) 33 34 68 22 60</span></a></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-12 col-xm-12">
          <div style="font-size: 25px;">
            <div><a href="https://www.facebook.com/gorditasdonalola.reynaga?mibextid=2JQ9oc" target="_goldenrod"><i
                  class="fab fa-facebook" style="font-size: 20px; color:goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;">  Gorditas Doña Lola Tlaquepaque</span></a><br></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-12 col-xm-12 ">
          <div style="font-size: 25px;">
            <div><a href="https://www.instagram.com/gorditasdonalolatlaquepaque/" target="_goldenrod">
                <i class="fab fa-instagram" style="font-size: 20px; color:goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;">  Gorditas Doña Lola Tlaquepaque</span></a><br></div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xm-12">
          <div style="font-size: 25px;">
            <div><a
                href="https://www.google.com.mx/maps/place/Gorditas+Do%C3%B1a+Lola+Tlaquepaque/@20.6382695,-103.3155409,17z/data=!3m1!4b1!4m6!3m5!1s0x8428b24c85da1a85:0x5876da678aa1b465!8m2!3d20.6382695!4d-103.3155409!16s%2Fg%2F11c1xfjqgs?entry=ttu=es"
                target="_goldenrod">
                <i class="mdi mdi-map-marker" style="font-size: 20px; color:goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;"> C. Juárez 271, Centro, 45500 San Pedro Tlaquepaque, Jal., México</span></a><br></div>
          </div>
        </div>
      </div>

      <div class="container"><a class="brand wow blurIn" href="index.html">
          <img src="images/logo.png" alt="" width="25%" height="auto"
            srcset="images/logo.png"></a>
        <p class="rights">
          <span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span>
          <span>Gorditas Doña Lola Tlaquepaque</span><span>. Todos los derechos reservados. <a href="MxTech"
              target="_blank"> Desarollado por GDLT</a></span>
        </p>
      </div>

    </div>
  </footer>

  <!-- /Modal -->


  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

  <!-- <script>



    $(document).ready(function () {
      $('body').on("swipeleft", function () {
        alert("works");
      });

    });


    /*
          $(document).ready(function(){
            var btn_g = $('.btn_galery'),
                img_g = $('#img_modal');
            btn_g.click(function(){
              let g_src = $(this).data('img');
              img_g.attr('', g_src);
              $('#modal-img').modal("show");
            });
          })*/
  </script> -->

  <!-- <script type="text/javascript">
    var slideIndex = 1;

    $(window).scroll(function (event) {
      if ($(".rd-navbar-nav-wrap").is(":visible")) {
        $(".rd-navbar-toggle").click();
      }

      if ($(".rd-navbar-nav-wrap").is(":visible")) {
        $(".dropdown-content").hide();
      }
      if ($("dropdown").is(":visible")) {
        $(".dropdown-content").hide();
      }
    });


    $('#dropdown').on('click', function (e) {
      e.preventDefault();
      $('.dropdown-content').slideToggle();
    })



    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function offSlides() {
      var slides = document.getElementsByClassName("mySlides");
      slides[i].style.display = "inline-block";
      slides[slideIndex - 1].style.display = "inline-block";
    }


    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");

      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      //slides[slideIndex-1].style.display = "block";

    }

    function myFunction(x) {
      if (x.matches) { // If media query matches
        showSlides(slideIndex);
        $('.next').show();
        $('.prev').show();
      } else {
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "inline-block";
        }
        $('.next').hide();
        $('.prev').hide();
      }
    }

    var x = window.matchMedia("(max-width: 500px)");
    myFunction(x)
    x.addListener(myFunction)
  </script> -->
<!-- 
  <script>
    function ajustar() {
      let cuadro = document.getElementById("imgsmovil");




    }
    ajustar();
  </script> -->

  <!-- coded by Ragnar -->
  </div>
</body>

</html>