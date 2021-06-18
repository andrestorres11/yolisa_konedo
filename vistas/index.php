<!doctype html>
<html lang="en">
  <head>
  	<link rel="stylesheet" href="css/font_red.css">
    <link rel="stylesheet" href="css/main_red.css">
    <link rel="stylesheet" href="css/estilos_in.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Yolisa Koneo</title>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/session.js"></script>
  </head>
  <body style="background-color:#507B67;">
    <!--- barra Social --->
    <div class="social-bar">
      <a href="#" class="icon icon-facebook" target="_blank"></a>
      <a href="#" class="icon icon-twitter" target="_blank"></a>
      <a href="#" class="icon icon-youtube" target="_blank"></a>
      <a href="#" class="icon icon-instagram" target="_blank"></a>
    </div>
		<?php
			include "navbar.php";
		?>
    <br>
    <center>
      <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a class="..." href="#">
              <img src="images/recetas/Mexican-food-banner-Depositphotos_98697228.png" class="rounded d-block w-90" alt="...">
              </a>
              <div class="carousel-caption d-none d-md-block">
                <h2><i>Recetas de la Semana</i></h2>
                <p>
                <h4>Descubre nuestras Recetas Top de la Semana</h4>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <a class="..." href="#">
              <img src="images/recetas/sopa_za.png" class=" rounded w-60" alt="...">
              </a>
              <div class="carousel-caption d-none d-md-block">
                <h2><i>Crema de Zanahoria</i></h2>
                <p>
                <h4>Descubre nuestras mejores Recetas sobre Sopas</h4>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <a class="..." href="#">
              <img src="images/recetas/pescado_ho.png" class="rounded d-block w-95" alt="...">
              </a>
              <div class="carousel-caption d-none d-md-block">
                <h2><i>Pescado al Horno</i></h2>
                <p>
                <h4>Descubre nuestras mejores Recetas de Pescado </h4>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <a class="..." href="#">
              <img src="images/recetas/tamales-141013736.png" class="rounded d-block w-80" alt="...">
              </a>
              <div class="carousel-caption d-none d-md-block">
                <h2><i>Envuelto de Maíz</i></h2>
                <p>
                <h4>Descubre nuestras Recetas a base de Envueltos</h4>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <a class="..." href="#">
              <img src="images/recetas/cropped-maridaje08.jpg" class="rounded d-block w-80" alt="...">
              </a>
              <div class="carousel-caption d-none d-md-block">
                <h2><i>Postre de Maracuyá</i></h2>
                <p>
                <h4>Descubre nuestras Recetas a base de Envueltos</h4>
                </p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Atras</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
        <br>
        <br>
      </div>
    </center>
    <div class="container">
      <div class="row ">
        <div class="row row-cols-0 row-cols-md-4 g-3" >
          <div class="row cards" style="width: auto; margin: auto auto;">
            <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-6 col-xl-2" style="background-color:#EAD6B3;">
              <a class="..." href="#">
              <img src="images/recetas/sopa.jpg" class="rounded-circle card-img-top" alt="Card image" />
              </a>
              <div class="card-block">
                <br>
                <h5 class="card-title"><i>SOPAS</i></h5>
                <p class="card-text">Aqui encontrara las mejores recetas sobre Sopas. </p>
              </div>
            </div>
            <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-6 col-xl-2" style="background-color:#EAD6B3;">
              <a class="..." href="#">
              <img src="images/recetas/Postre.jpg" class="rounded-circle card-img-top" alt="Card image" />
              </a>
              <div class="card-block">
                <br>
                <h5 class="card-title"><i>POSTRES</i></h5>
                <p class="card-text">Aqui encontraras las mejores recetas sobre Postres. </p>
              </div>
            </div>
            <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-2" style="background-color:#EAD6B3;">
              <a class="..." href="#">
              <img src="https://static.vix.com/es/sites/default/files/styles/thumbnail/public/imj/vivirsalud/j/jugos-naturales-para-combatir-el-acne-1.jpg" class="rounded-circle card-img-top" alt="Card image" />
              </a>
              <div class="card-block">
                <br>
                <h5 class="card-title"><i>BEBIDAS</i></h5>
                <p class="card-text">Aqui encontraras las mejores recetas sobre Bebidas Naturales. </p>
              </div>
            </div>
            <div class="  card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-2" style="background-color:#EAD6B3;">
              <a class="..." href="#">
              <img src="images/recetas/almuerzo.png" class="rounded-circle card-img-top" alt="Card image" />
              </a>
              <div class="card-block">
                <br>
                <h5 class="card-title"><i>ALMUERZOS</i></h5>
                <p class="card-text">Aqui encontraras las mejores recetas sobre Almuerzos. </p>
              </div>
            </div>
            <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-2" style="background-color:#EAD6B3;">
              <a class="..." href="#">
              <img src="https://static.vix.com/es/sites/default/files/styles/thumbnail/public/i/incorporar-especias-en-ensaladas_listados.jpg" class="rounded-circle card-img-top" alt="Card image" />
              </a>
              <div class="card-block">
                <br>
                <h5 class="card-title"><i>ENSALADAS</i></h5>
                <p class="card-text">Aqui encontraras las mejores recetas sobre Ensaladas. </p>
              </div>
            </div>
            <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-2 .img-fluid"style="background-color:#EAD6B3;">
              <a class="..." href="#">
              <img src="https://i.blogs.es/957e49/tortitas.jpg/200_200.jpeg" class="rounded-circle card-img-top" alt="Card image" />
              </a>
              <div class="card-block">
                <br>
                <h5 class="card-title"><i>DESAYUNOS</i></h5>
                <p class="card-text">Aqui encontraras las mejores recetas sobre Desayunos. </p>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div>
        <center>
          <div class="row row-cols-0 row-cols-md-4 g-3" >
            <div class="col">
              <div class="card" style="background-color:#EAD6B3;">
                <a class="..." href="#">
                <img src="images/recetas/churrascosBBQ.jpg" class="rounded-pill card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"><i>Carne de Cerdo BBQ</i></h5>
                  <p class="card-text"> Prepara esta deliciosa Receta de Carne de Cerdo BBQ.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="background-color:#EAD6B3;">
                <a class="..." href="in_receta.php">
                <img src="images/recetas/ajiaco_in.png" class="rounded-pill card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"><i>Ajiaco Tradicional</i></h5>
                  <p class="card-text">Antojate a probar esta deliciosa Receta Colombiana. </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="background-color:#EAD6B3;">
                <a class="..." href="#">
                <img src="https://dulcepasionjaju.webcindario.com/data1/images/descarga.jpg" class="rounded-pill card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"><i>Postre de Chocolate</i></h5>
                  <p class="card-text">Refrescate con esta deliciosa Receta de Postre de Chocolate. </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="background-color:#EAD6B3;">
                <a class="..." href="#">
                <img src="https://cdn.statically.io/img/lamesadelconde.es/wp-content/uploads/2017/02/0.-Empanada-de-Atún-Portada-A-Tavola-con-il-Conte.jpg?quality=100&f=auto" class="rounded-pill card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"><i>Empanada de Atún</i></h5>
                  <p class="card-text">Deleitate con esta exquisita Receta de Empanada de Atún</p>
                </div>
              </div>
            </div>
          </div>
        </center>
        <br>
        <br>
        <br>
      </div>
    </div>
    <?php
      include "footer.php";
      ?>
  </body>
</html>