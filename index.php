<?php
require_once("assets/php/bbdd.php");
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Home - UPOCASA</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie" />
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/css/best-carousel-slide-1.css" />
  <link rel="stylesheet" href="assets/css/best-carousel-slide.css" />
  <link rel="stylesheet" href="assets/css/Blog---Recent-Posts-1.css" />
  <link rel="stylesheet" href="assets/css/Blog---Recent-Posts.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="assets/css/Pretty-Footer.css" />
  <link rel="stylesheet" href="assets/css/smoothproducts.css" />
  <script src="assets/js/jquery.min.js"></script>
</head>

<body>

  <?php
  if (isset($_SESSION['correo'])) {
    include "./header-logged.php";
  } else {
    include "./header.html";
  }
  ?>

  <main class="page landing-page">
    <section id="carousel">
      <div data-ride="carousel" class="carousel slide" id="carousel-1">
        <div role="listbox" class="carousel-inner">
          <div class="carousel-item">
            <div class="jumbotron hero-nature carousel-hero">
              <h1 class="hero-title"><b>Tu mejor inmobiliaria</b></h1>
              <p class="hero-subtitle">
                Tu mejor portal para la compraventa y alquiler de viviendas.
              </p>

            </div>
          </div>
          <div class="carousel-item">
            <div class="jumbotron hero-photography carousel-hero">
              <h1 class="hero-title"><b>¿Tiene alguna duda?, ¡Contáctanos!</b></h1>
              <p class="hero-subtitle">
                Acceda al apartado "Contactanos" para consultas personalizadas.

              </p>
            </div>
          </div>
          <div class="carousel-item active">
            <div class="jumbotron hero-technology carousel-hero">
              <h1 class="hero-title"><b>Envia mensaje a los propietarios de los anuncios</b></h1>
              <p class="hero-subtitle">
                ¿Te interesa alguna vivienda?, envíale un mensaje al propietario.
              </p>

            </div>
          </div>
        </div>
        <div>
          <a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a href="#carousel-1" role="button" data-slide="next" class="carousel-control-next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carousel-1" data-slide-to="0"></li>
          <li data-target="#carousel-1" data-slide-to="1"></li>
          <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
        </ol>
      </div>
    </section>
  </main>

  <?php include "./footer.php" ?>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="assets/js/smoothproducts.min.js"></script>
  <script src="assets/js/theme.js"></script>
</body>

</html>