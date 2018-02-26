<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" version="XHTML+RDFa 1.0" dir="ltr" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#" xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#" xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="canonical" href="index.php" />
  <link rel="shortcut icon" href="img/indice_6.png" type="image/png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title> Principal | Compra y vende </title>
  <link type="text/css" rel="stylesheet" href="css/css_xE-rWrJf-fncB6ztZfd2huxqgxu4WO-qwma6Xer30m4.css" media="all" />
  <link type="text/css" rel="stylesheet" href="css/css_5pO73qc-z-zv4xoH8aIAp_Prq1thKg1qz9beR7eKaZg.css" media="all" />
  <link type="text/css" rel="stylesheet" href="css/css_MnXiytJtb186Ydycnpwpw34cuUsHaKc80ey5LiQXhSY.css" media="all" />
  <link type="text/css" rel="stylesheet" href="css/css_Om4tJfJkoeZm16SohXiGDShiP0LRUklJJ4fIfYIwiO4.css" media="all" />
  <link rel="stylesheet" href="css/styles.css" media="all">
  <link rel="stylesheet" href="css/styleprincipal.css">
  <script type="text/javascript" src="js/jquery.min468f.js?v=1.10.2"></script>
  <script type="text/javascript" src="js/jquery.once7839.js?v=1.2"></script>

  <script type="text/javascript" src="js/bootstrap.minc56b.js?p4gjwa"></script>
  <script type="text/javascript" src="js/sitioc56b.js?p4gjwa"></script>

</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-200 node-type-page">
  <section id="header" class="container ">
    <div id="logoheader" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      <img src="img/h1.png" alt="">
    </div>
    <div id="encabezado" class="col-xs-12 col-sm-12 col-md-9 col-lg-9 encabezado" style="#323C46">
      <div class="navbar navbar-default ">
        <div class="container-fluid bordetop">
          <div id="menuencabezado">
            <div class="sistemah1">
              <h1>AgroMex| Compra y vende</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container ">
    <div class="leyendatop">
      <div id="headblanco" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
        SEDAGRO, ESTADO DE MEXICO</div>
    </div>
  </div>
  <section id="menuprincipal">
    <section id="" class="container">
      <header class="navbar navbar-default " class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
        <nav>
          <div class="container-fluid ">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barranavegacion" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            </div>
            <div id="barranavegacion" class="collapse navbar-collapse">
              <ul id="main-menu" class="links nav navbar-nav">
                <li class="menu-836 active-trail active first" class="active-trail active"><a href="principal.php">Principal</a></li>
                <li class="menu-706"><a href="#">Mis productos</a></li>
                <li class="menu-725"><a href="">Contactar Personas</a></li>
                <li class="menu-836"><a href="logout.php">Cerrar Sesion</a></li>
                <!-- <li class="menu-756"><a href="pesca.php">Pesca</a></li>
                <li class="menu-785"><a href="equipo_agroquimicos.php">Equipo y Agroquimicos</a></li>
                <li class="menu-797 active-trail active first" class="active-trail active"><a href="">Iniciar Sesion</a></li> -->
              </ul>
              <br>
              <h3 style="color:#5A6523;">Bienvenido
              <?php
              echo $_SESSION['email'];
              ?></h3>
            </div>
          </div>
        </nav>

      </header>
    </section>
  </section>
  <hr>
  <br>

    <!-- Page Content -->
    <div class="container">
      <h1 class="mt-4 mb-3">Subir Productos
        <small> |No olvide cerrar su sesion cuando termine</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Sube productos</li>
      </ol>

      <img class="img-fluid rounded mb-4" src="img/productos4.jpg" alt="">
<br>
<br>
      <!-- Marketing Icons Section -->
      <div class="row" id="main">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Productores pesqueros</h4>
            <div class="card-body">
              <p class="card-text" id="main">Aquellos productos en relacion a la pesca, pueden ser enlatados o en especie.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Subir producto</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Productos agricolas</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Equipo y Agroquimicos</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <hr>
    </div>
    <!-- /.container -->

  <div class="container">
    <footer>
      <div id="detallefooter" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="region region-footer">
          <div id="block-views-footer-block" class="block block-views">
            <div class="content">
              <div class="view view-footer view-id-footer view-display-id-block view-dom-id-ce2c6f51bb47d9fb810ffed86f30fdbe">
                <div class="view-content">
                  <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
                    <div class="views-field views-field-body">
                      <div class="field-content">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                          <h4>Conoce el Estado</h4>
                          <div>
                            <ul class="lista">
                              <li><a href="">Portal del Gobierno del Estado de México</a></li>
                              <li><a href="">Quejas y Denuncias</a></li>
                              <li><a href="">Comisión Estatal de Mejora Regulatoria</a></li>
                              <li><a href="" target="_blank">Información Pública de Oficio Mexiquense</a></li>
                              <li><a href="">Solicitud de Información</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                          <h4>Acerca del Sitio</h4>
                          <div>
                            <ul class="lista">
                              <!-- <li><a href="contactanos.html" target="_blank">Contáctanos</a></li>
                              <li><a href="sitemap.html" target="_blank">Mapa del sitio</a></li>
                              <li><a href="legales.html" target="_blank">Avisos legales</a></li>
                              <li><a href="acerca_sitio.html" target="_blank">Acerca del sitio</a></li>
                              <li><a href="http://avisosdeprivacidad.edugem.gob.mx/" target="_blank">Avisos de Privacidad</a></li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                          <h4>Contacto</h4>
                          <div>
                            <ul class="lista">
                              <!-- <li>Calle:          Lerdo Poniente No. 300, Segundo Piso, Puerta 327 - Palacio de Gobierno</li>
                              <li: lerdo="" poniente="">
                                <li>CP:                 50000</li>
                                <li>Horario de atención: 9:00 a 18:00 horas.</li>
                              </li:>
                              <li> </li> -->
                            </ul>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                          <h4>Enlaces de Interés</h4>
                          <div>
                            <ul class="lista">
                              <!-- <li><a href="http://www.sep.gob.mx/">Secretaría de Educación Pública</a></li>
                              <li><a href="https://www.siged.sep.gob.mx/SIGED/">Sistema de Información y Gestión Educativa</a></li>
                              <li><a href="http://smsem.org.mx/">SMSEM</a></li>
                              <li><a href="https://correo.edugem.gob.mx/">Correo electrónico institucional</a></li> -->
                            </ul>
                          </div>
                        </div>
                        <p> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="identidad" class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div id="logofooter">
          <img src="img/sedagro.jpg" alt="">
          <hr>
        </div>
      </div>
      <div id="footerbottom" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
