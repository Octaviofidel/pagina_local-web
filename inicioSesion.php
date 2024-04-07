<?php
include 'connection_bd.php';
session_start(); // Inicia la sesión al principio del archivo

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Conectar a la base de datos
  $conn = conectar();

  // Capturar y validar los valores del formulario
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  // Preparar la consulta SQL para verificar las credenciales
  $sql = "SELECT * FROM usuario WHERE email='$email' AND pass='$password'";
  $result = mysqli_query($conn, $sql);

  // Verificar si se encontró un registro con las credenciales proporcionadas
  if (mysqli_num_rows($result) == 1) {
    $_SESSION['loggedin'] = true;
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['telefono'] = $row['telefono'];
    echo "Inicio Sesión Correcto";
    header("Location: index.php");
  } else {
    echo "Correo electrónico o contraseña incorrectos.";
  }

  // Cerrar la conexión
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<head>
  <title>Gorditas Doña Lola Tlaquepaque | Galería</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/Casa%20Reyna%20Logo%20ICO.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css?family=Montserrat:300,400,500,700,800">
  <link rel="stylesheet" href="css%20%281%29/bootstrap.css">
  <link rel="stylesheet" href="css%20%281%29/fonts.css">
  <link rel="stylesheet" href="css%20%281%29/style.css">
  <link rel="stylesheet" href="css%20%281%29/galery.css">
  <link rel="stylesheet" href="ajax/libs/font-awesome/5.8.2/css/all.min.css"
    integrity="sha256-BtbhCIbtfeVWGsqxk1vOHEYXS6qcvQvLMZqjtpWUEx8=" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="120x120" href="images/png/apple-touch-icon.png">

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
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <div class="preloader">
    <div class="cssload-box-loading"></div>
  </div>









  <div class="page">
    <!-- Page Header-->
    <header class="section novi-background bg-cover page-header" id="home">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
          data-xl-layout="rd-navbar-sidebar" data-xl-device-layout="rd-navbar-sidebar"
          data-xxl-layout="rd-navbar-sidebar" data-xxl-device-layout="rd-navbar-sidebar" data-xl-stick-up-offset="400"
          data-xxl-stick-up-offset="400">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.php" style="max-width: 88px;">
                    <img src="images/logo.png" srcset="images/logo.png" style="max-width: 100px;"></a>
                </div>
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="container_nav">
                  <div><a href="mailto:octaviofidel561@gmail.com"><i class="fa fa-envelope contacts-classic-text"
                        style="font-size: 25px; color: goldenrod; padding: 12px;"></i></a></div>
                  <div><a href="https://api.whatsapp.com/send?phone=523334682260"><i class="fab fa-whatsapp"
                        style="font-size:25px; color: goldenrod; cursor: pointer; padding: 12px;"></i></a></div>
                  <div><a href="tel:33 34 68 22 60"><i class="mdi mdi-phone"
                        style="font-size: 25px; color: goldenrod; cursor: pointer; padding: 12px;"></i></a></div>
                </div>

              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">

                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    
                    <li class="logocasa">
                      <a class="rd-nav-item" href="index.php" style="max-width: 88px;">
                        <img src="images/logo.png" srcset="images/logo.png" style="max-width: 100px;"></a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php#home">Inicio</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php#about">¿Quiénes somos?</a>
                    </li>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php#services">Menu</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="galeria.php">Galería</a>
                    </li>

                    <li class="rd-nav-item"><a class="rd-nav-link" href="#cat">haz tu pedido</a>

</li>

<li class="rd-nav-item"><a class="rd-nav-link" href="inicioSesion.php">Inicio de sesion</a>

</li>


                    <li class="rd-nav-item">
                      <?php
                      session_start();
                      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                        echo '<a class="rd-nav-link" href="profile.php"><i class="fas fa-user"></i></a>';
                      } else {
                      }
                      ?>
                    </li>
                  </ul>
                  <div class="contacts-classic">
                    <div class="unit align-items-center">
                      <div class="unit-body"><a class="contacts-classic-text"
                          href="https://api.whatsapp.com/send?phone=523334682260">
                          <div class="unit-left"><span class="icon novi-icon fab fa-whatsapp"></span></div>
                        </a></div>
                      </a>
                    </div>

                    <div class="unit-body"><a class="contacts-classic-text" href="tel:3334682260">
                        <div class="unit-left"><span class="icon novi-icon mdi mdi-phone"></span></div>
                      </a></div>
                    <a href="https://www.facebook.com/gorditasdonalola.reynaga?mibextid=2JQ9oc/" target="_blank"><i
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
  <section class="galery mb-3" id="galery">
    <div class="container-fluid">
      <div class="row mb-0 pb-0">
        <div class="col-md-3 project-mary-title text-title">
          <h3 class="project-classic-text">inicio de sesion </h3>
        </div>
      </div>

      <div class="row flex-row">
        <div class="col-md-10 col-lg-6">
          <div class="inset-xl-left-35 mb-1">
            <h3 class="wow fadeInRight letras_color">inicio de sesión</h3>
            <h6 class="title-style-1 wow fadeInRight letras_color2" data-wow-delay=".05s">Bienvenido</h6>
            <div class="form-style-1 context-dark wow blurIn">
              <!-- RD Mailform-->


              <form class="text-left" data-form-output="form-output-global" data-form-type="contact" method="POST"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email-2">Email</label>
                  <input class="form-input" id="contact-email-2" type="email" name="email"
                    data-constraints="@Required @Email">
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-com-2">Contraseña</label>
                  <input type="password" name="password" placeholder="Contraseña">
                </div>
                <div class="form-button">
                  <div class="d-inline-block">
                    <button class="button button-jerry button-primary" type="submit">Enviar<span
                        class="button-jerry-line"></span><span class="button-jerry-line"></span><span
                        class="button-jerry-line"></span><span class="button-jerry-line"></span></button>
                  </div>
                  <div class="d-inline-block">
                    <button class="button button-jerry button-primary">
                      <a href="registro.php" style="text-decoration: none; color: inherit;">Registrate</a>
                      <span class="button-jerry-line"></span><span class="button-jerry-line"></span><span
                        class="button-jerry-line"></span><span class="button-jerry-line"></span>
                    </button>
                  </div>
                </div>







              </form>


            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  </div>


  <!-- Modal -->
  <div class="modal" id="modal-img" tabindex="1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="m odal-body">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item" id="0">
                <img class="img-fluid" src="images/caras.jpg" alt="LW__0052_Layer-2-copy-52.jpg">
              </div>
              <div class="carousel-item" id="1">
                <img class="img-fluid" src="images/cliente 3.jpg" alt="LW__0091_Layer-2-copy-91.jpg">
              </div>
              <div class="carousel-item" id="2">
                <img class="img-fluid" src="images/clientes 2.jpg" alt="LW__0097_Layer-2-copy-97.jpg">
              </div>
              <div class="carousel-item" id="3">
                <img class="img-fluid" src="images/clientes 4.jpg" alt="LW__0057_Layer-2-copy-57.jpg">
              </div>
              <div class="carousel-item" id="4">
                <img class="img-fluid" src="images/fam2.jpg" alt="LW__0061_Layer-2-copy-61.jpg">
              </div>
              <div class="carousel-item" id="5">
                <img class="img-fluid" src="images/fam3.jpg" alt="LW__0015_Layer-2-copy-15.jpg">
              </div>
              <div class="carousel-item" id="6">
                <img class="img-fluid" src="images/fernandofam.jpg" alt="LW__0059_Layer-2-copy-59.jpg">
              </div>
              <div class="carousel-item" id="7">
                <img class="img-fluid" src="images/unapersona.jpg" alt="LW__0049_Layer-2-copy-49.jpg">
              </div>
              <div class="carousel-item" id="8">
                <img class="img-fluid" src="images/lugar 1.jpeg " alt="LW__0067_Layer-2-copy-67.jpg">
              </div>
              <div class="carousel-item" id="9">
                <img class="img-fluid" src="images/lugar 2.jpeg" alt="LW__0011_Layer-2-copy-11.jpg">
              </div>
              <div class="carousel-item" id="10">
                <img class="img-fluid" src="images/G11.jpeg" alt="LW__0036_Layer-2-copy-36.jpg">
              </div>
              <div class="carousel-item" id="11">
                <img class="img-fluid" src="images/G12.jpeg" alt="LW__0023_Layer-2-copy-23.jpg">
              </div>
              <div class="carousel-item" id="12">
                <img class="img-fluid" src="images/G13.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="13">
                <img class="img-fluid" src="images/G14.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="15">
                <img class="img-fluid" src="images/G16.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="16">
                <img class="img-fluid" src="images/G17.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="17">
                <img class="img-fluid" src="images/G18.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="18">
                <img class="img-fluid" src="images/G19.jpeg" alt="LW__0010_Layer-2-copy-10.jpg">
              </div>
              <div class="carousel-item" id="19">
                <img class="img-fluid" src="images/G20.jpeg" alt="LW__0028_Layer-2-copy-28.jpg">
              </div>
              <div class="carousel-item" id="20">
                <img class="img-fluid" src="images/G21.jpeg" alt="LW__0073_Layer-2-copy-73.jpg">
              </div>
              <div class="carousel-item" id="21">
                <img class="img-fluid" src="images/G22.jpeg" alt="LW__0044_Layer-2-copy-44.jpg">
              </div>
              <div class="carousel-item" id="22">
                <img class="img-fluid" src="images/G23.jpeg" alt="LW__0045_Layer-2-copy-45.jpg">
              </div>
              <div class="carousel-item" id="23">
                <img class="img-fluid" src="images/G24.jpeg" alt="LW__0100_Layer-2-copy-100.jpg">
              </div>
              <div class="carousel-item" id="24">
                <img class="img-fluid" src="images/G25.jpeg" alt="LW__0086_Layer-2-copy-86.jpg">
              </div>
              <div class="carousel-item" id="25">
                <img class="img-fluid" src="images/G26.jpeg" alt="LW__0071_Layer-2-copy-71.jpg">
              </div>
              <div class="carousel-item" id="26">
                <img class="img-fluid" src="images/G27.jpeg" alt="LW__0082_Layer-2-copy-82.jpg">
              </div>
              <div class="carousel-item" id="27">
                <img class="img-fluid" src="images/G28.jpeg" alt="LW__0000_Layer-2.jpg">
              </div>
              <div class="carousel-item" id="28">
                <img class="img-fluid" src="images/G29.jpeg" alt="LW__0050_Layer-2-copy-50.jpg">
              </div>
              <div class="carousel-item" id="29">
                <img class="img-fluid" src="images/G30.jpeg" alt="LW__0003_Layer-2-copy-3.jpg">
              </div>
              <div class="carousel-item" id="30">
                <img class="img-fluid" src="images/G31.jpeg" alt="LW__0037_Layer-2-copy-37.jpg">
              </div>
              <div class="carousel-item" id="31">
                <img class="img-fluid" src="images/G32.jpeg" alt="LW__0040_Layer-2-copy-40.jpg">
              </div>
              <div class="carousel-item" id="32">
                <img class="img-fluid" src="images/G33.jpeg" alt="LW__0030_Layer-2-copy-30.jpg">
              </div>
              <div class="carousel-item" id="33">
                <img class="img-fluid" src="images/G34.jpeg" alt="LW__0007_Layer-2-copy-7.jpg">
              </div>
              <div class="carousel-item" id="34">
                <img class="img-fluid" src="images/G35.jpeg" alt="LW__0001_Layer-2-copy.jpg">
              </div>
              <div class="carousel-item" id="36">
                <img class="img-fluid" src="images/G37.jpeg" alt="LW__0006_Layer-2-copy-6.jpg">
              </div>
              <div class="carousel-item" id="37">
                <img class="img-fluid" src="images/G38.jpeg" alt="LW__0077_Layer-2-copy-77.jpg">
              </div>
              <div class="carousel-item" id="38">
                <img class="img-fluid" src="images/G39.jpeg" alt="LW__0004_Layer-2-copy-4.jpg">
              </div>
              <div class="carousel-item" id="39">
                <img class="img-fluid" src="images/G40.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="40">
                <img class="img-fluid" src="images/G41.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="41">
                <img class="img-fluid" src="images/G42.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="42">
                <img class="img-fluid" src="images/G43.jpeg" alt="LW__0052_Layer-2-copy-52.jpg">
              </div>
              <div class="carousel-item" id="43">
                <img class="img-fluid" src="images/G44.jpeg" alt="LW__0091_Layer-2-copy-91.jpg">
              </div>
              <div class="carousel-item" id="44">
                <img class="img-fluid" src="images/G45.jpeg" alt="LW__0097_Layer-2-copy-97.jpg">
              </div>
              <div class="carousel-item" id="45">
                <img class="img-fluid" src="images/G46.jpeg" alt="LW__0057_Layer-2-copy-57.jpg">
              </div>
              <div class="carousel-item" id="46">
                <img class="img-fluid" src="images/G47.jpeg" alt="LW__0061_Layer-2-copy-61.jpg">
              </div>
              <div class="carousel-item" id="47">
                <img class="img-fluid" src="images/G48.jpeg" alt="LW__0015_Layer-2-copy-15.jpg">
              </div>
              <div class="carousel-item" id="48">
                <img class="img-fluid" src="images/G49.jpeg" alt="LW__0059_Layer-2-copy-59.jpg">
              </div>
              <div class="carousel-item" id="49">
                <img class="img-fluid" src="images/G50.jpeg" alt="LW__0049_Layer-2-copy-49.jpg">
              </div>
              <div class="carousel-item" id="50">
                <img class="img-fluid" src="images/G51.jpeg" alt="LW__0067_Layer-2-copy-67.jpg">
              </div>
              <div class="carousel-item" id="51">
                <img class="img-fluid" src="images/G52.jpeg" alt="LW__0011_Layer-2-copy-11.jpg">
              </div>
              <div class="carousel-item" id="52">
                <img class="img-fluid" src="images/G53.jpeg" alt="LW__0036_Layer-2-copy-36.jpg">
              </div>
              <div class="carousel-item" id="53">
                <img class="img-fluid" src="images/G54.jpeg" alt="LW__0023_Layer-2-copy-23.jpg">
              </div>
              <div class="carousel-item" id="55">
                <img class="img-fluid" src="images/G56.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="56">
                <img class="img-fluid" src="images/G57.jpg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="57">
                <img class="img-fluid" src="images/G58.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="58">
                <img class="img-fluid" src="images/G59.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="59">
                <img class="img-fluid" src="images/G60.jpeg" alt="LW__0042_Layer-2-copy-42.jpg">
              </div>
              <div class="carousel-item" id="60">
                <img class="img-fluid" src="images/G61.jpeg" alt="LW__0010_Layer-2-copy-10.jpg">
              </div>
              <div class="carousel-item" id="61">
                <img class="img-fluid" src="images/G62.jpeg" alt="LW__0028_Layer-2-copy-28.jpg">
              </div>
              <div class="carousel-item" id="62">
                <img class="img-fluid" src="images/G63.jpeg" alt="LW__0073_Layer-2-copy-73.jpg">
              </div>
              <div class="carousel-item" id="63">
                <img class="img-fluid" src="images/G64.jpeg" alt="LW__0044_Layer-2-copy-44.jpg">
              </div>
              <div class="carousel-item" id="64">
                <img class="img-fluid" src="images/G65.jpeg" alt="LW__0045_Layer-2-copy-45.jpg">
              </div>
              <div class="carousel-item" id="65">
                <img class="img-fluid" src="images/G66.jpeg" alt="LW__0100_Layer-2-copy-100.jpg">
              </div>
              <div class="carousel-item" id="66">
                <img class="img-fluid" src="images/G67.jpeg" alt="LW__0086_Layer-2-copy-86.jpg">
              </div>
              <div class="carousel-item" id="67">
                <img class="img-fluid" src="images/G68.jpeg" alt="LW__0071_Layer-2-copy-71.jpg">
              </div>
              <div class="carousel-item" id="68">
                <img class="img-fluid" src="images/G69.jpeg" alt="LW__0082_Layer-2-copy-82.jpg">
              </div>
              <div class="carousel-item" id="69">
                <img class="img-fluid" src="images/G70.jpeg" alt="LW__0000_Layer-2.jpg">
              </div>
              <div class="carousel-item" id="70">
                <img class="img-fluid" src="images/G71.jpeg" alt="LW__0050_Layer-2-copy-50.jpg">
              </div>
              <div class="carousel-item" id="71">
                <img class="img-fluid" src="images/G72.jpeg" alt="LW__0003_Layer-2-copy-3.jpg">
              </div>
              <div class="carousel-item" id="72">
                <img class="img-fluid" src="images/G73.jpeg" alt="LW__0037_Layer-2-copy-37.jpg">
              </div>
              <div class="carousel-item" id="73">
                <img class="img-fluid" src="images/G74.jpeg" alt="LW__0040_Layer-2-copy-40.jpg">
              </div>
              <div class="carousel-item" id="74">
                <img class="img-fluid" src="images/G75.jpeg" alt="LW__0030_Layer-2-copy-30.jpg">
              </div>
              <div class="carousel-item" id="75">
                <img class="img-fluid" src="images/G76.jpeg" alt="LW__0007_Layer-2-copy-7.jpg">
              </div>
              <div class="carousel-item" id="76">
                <img class="img-fluid" src="images/G77.jpeg" alt="LW__0001_Layer-2-copy.jpg">
              </div>
              <div class="carousel-item" id="78">
                <img class="img-fluid" src="images/G79.jpeg" alt="LW__0006_Layer-2-copy-6.jpg">
              </div>
              <div class="carousel-item" id="79">
                <img class="img-fluid" src="images/G80.jpeg" alt="LW__0077_Layer-2-copy-77.jpg">
              </div>
              <div class="carousel-item" id="80">
                <img class="img-fluid" src="images/G81.jpeg" alt="LW__0004_Layer-2-copy-4.jpg">
              </div>
              <div class="carousel-item" id="81">
                <img class="img-fluid" src="images/G82.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="82">
                <img class="img-fluid" src="images/G83.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="83">
                <img class="img-fluid" src="images/G84.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="84">
                <img class="img-fluid" src="images/G85.jpeg" alt="LW__0037_Layer-2-copy-37.jpg">
              </div>
              <div class="carousel-item" id="85">
                <img class="img-fluid" src="images/G86.jpeg" alt="LW__0040_Layer-2-copy-40.jpg">
              </div>
              <div class="carousel-item" id="86">
                <img class="img-fluid" src="images/G87.jpeg" alt="LW__0030_Layer-2-copy-30.jpg">
              </div>
              <div class="carousel-item" id="87">
                <img class="img-fluid" src="images/G88.jpeg" alt="LW__0007_Layer-2-copy-7.jpg">
              </div>
              <div class="carousel-item" id="88">
                <img class="img-fluid" src="images/G89.jpeg" alt="LW__0001_Layer-2-copy.jpg">
              </div>
              <div class="carousel-item" id="89">
                <img class="img-fluid" src="images/G90.jpeg" alt="LW__0093_Layer-2-copy-93.jpg">
              </div>
              <div class="carousel-item" id="90">
                <img class="img-fluid" src="images/G91.jpeg" alt="LW__0006_Layer-2-copy-6.jpg">
              </div>
              <div class="carousel-item" id="91">
                <img class="img-fluid" src="images/G92.jpeg" alt="LW__0077_Layer-2-copy-77.jpg">
              </div>
              <div class="carousel-item" id="92">
                <img class="img-fluid" src="images/G93.jpeg" alt="LW__0004_Layer-2-copy-4.jpg">
              </div>
              <div class="carousel-item" id="93">
                <img class="img-fluid" src="images/G94.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="94">
                <img class="img-fluid" src="images/G95.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="95">
                <img class="img-fluid" src="images/G96.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="96">
                <img class="img-fluid" src="images/G97.jpeg" alt="LW__0030_Layer-2-copy-30.jpg">
              </div>
              <div class="carousel-item" id="97">
                <img class="img-fluid" src="images/G98.jpeg" alt="LW__0007_Layer-2-copy-7.jpg">
              </div>
              <div class="carousel-item" id="98">
                <img class="img-fluid" src="images/G99.jpeg" alt="LW__0001_Layer-2-copy.jpg">
              </div>
              <div class="carousel-item" id="100">
                <img class="img-fluid" src="images/G101.jpeg" alt="LW__0006_Layer-2-copy-6.jpg">
              </div>
              <div class="carousel-item" id="101">
                <img class="img-fluid" src="images/G102.jpeg" alt="LW__0077_Layer-2-copy-77.jpg">
              </div>
              <div class="carousel-item" id="102">
                <img class="img-fluid" src="images/G103.jpeg" alt="LW__0004_Layer-2-copy-4.jpg">
              </div>
              <div class="carousel-item" id="103">
                <img class="img-fluid" src="images/G104.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
              <div class="carousel-item" id="104">
                <img class="img-fluid" src="images/G105.jpeg" alt="LW__0014_Layer-2-copy-14.jpg">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"
              style="background-color: rgba(0,0,0,0.5) !important;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"
              style="background-color: rgba(0,0,0,0.5) !important;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="section novi-background bg-cover section-sm footer-classic context-dark">
    <div class="container productos" style="align-items:center; max-width:100%">
      <div class="row">
        <div class="col-md-2 col-sm-12 col-xm-12">
          <div style="font-size: 25px; color: goldenrod;">
            <div><a href="mailto:octaviofidel561@gmail.com"><i class="fa fa-envelope contacts-classic-text"
                  style="font-size: 20px; color: goldenrod;"></i><span style="color: white; font-size: 14px;">
                  octaviofidel561@gmail.com</span></a></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-12 col-xm-12">
          <div style="font-size: 25px;">
            <div><a href="https://api.whatsapp.com/send?phone=523334682260" target="_blank"><i class="fab fa-whatsapp"
                  style="font-size:20px; color: goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;"> +52 33 34 68 22 60</span></a></div>
          </div>
        </div>
        <div class="col-md-1 col-sm-12 col-xm-12">
          <div style="font-size: 25px;">
            <div><a href="tel:33 31 20 02 51"><i class="mdi mdi-phone"
                  style="font-size: 20px; color: goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;"> (33) 33 34 68 22 60 </span></a></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-12 col-xm-12">
          <div style="font-size: 25px;">
            <div><a href="https://www.facebook.com/gorditasdonalola.reynaga?mibextid=2JQ9oc/" target="_goldenrod"><i
                  class="fab fa-facebook" style="font-size: 20px; color:goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;"> Gorditas Doña Lola Tlaquepaque</span></a><br></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-12 col-xm-12 ">
          <div style="font-size: 25px;">
            <div><a href="https://www.instagram.com/gorditasdonalolatlaquepaque/" target="_goldenrod">
                <i class="fab fa-instagram" style="font-size: 20px; color:goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;"> Gorditas Doña Lola Tlaquepaque</span></a><br></div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xm-12">
          <div style="font-size: 25px;">
            <div><a
                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.768902170753!2d-103.32041181405663!3d20.6382744518822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b24c85da1a85%3A0x5876da678aa1b465!2sGorditas%20Do%C3%B1a%20Lola%20Tlaquepaque!5e0!3m2!1ses-419!2sus!4v1707704317011!5m2!1ses-419!2sus"
                target="_goldenrod">
                <i class="mdi mdi-map-marker" style="font-size: 20px; color:goldenrod; cursor: pointer;"></i><span
                  style="color: white; font-size: 14px;"> Calle juarez 271 san pedro tlaquepaque
                  45500</span></a><br></div>
          </div>
        </div>
      </div>
      <div class="container"><a class="brand wow blurIn" href="index.php">
          <img src="images/logo.png" alt="" width="25%" height="auto" srcset="images/logo.png"></a>
        <p class="rights">
          <a href="http://www.eventoscasareyna.com/"> <i class="mdi mdi-account-key"
              style="font-size: 30px; color:goldenrod; cursor: pointer; padding-right: 12px; padding-top: 9px;"></i></a>
          <span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span>
          <span>Gorditas Doña Lola Tlaquepaque </span><span>. Todos los derechos reservados. <a href="GDLT"
              target="_blank"> GDLT</a></span>
        </p>
      </div>
    </div>
  </footer>
  <!-- /Modal -->


  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

  <script>
    $(document).ready(function () {
      var btn_g = $('.btn_galery');
      btn_g.click(function () {
        let id = $(this).data('id');
        $('.carousel-item').removeClass('active');
        $('#' + id).addClass('active');
        $('#modal-img').modal("show");
      });

      $('.carousel').carousel({
        interval: 2500
      });


      $(".owl-carousel").owlCarousel();
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
  </script>

  <script type="text/javascript">
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
      slides[slideIndex - 1].style.display = "block";

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
  </script>


</body>

</html>