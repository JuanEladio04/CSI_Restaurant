<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("includes\head-tag-contents.php"); ?>
</head>

<body>
  <div id="index" class="container-fluid row m-0 p-0">
    <!--Presentation-->
    <div class="presentacion col-12 text-center">
      <img class="logo-icon" alt="" src="img\logos\BigLogo.png" />

      <div class="socialmedia col-12">
        <img class="icon-facebook-icon" alt="" src="./public/-icon-facebook-icon.svg" />

        <img class="icon-instagram-icon" alt="" src="./public/-icon-instagram-icon.svg" />

        <img class="icon-facebook-icon" alt="" src="./public/-icon-twitter.svg" />
      </div>
    </div>
    <!--Carrusel-->
    <div id="carouselExampleIndicators col-12 bg-dark" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card">
            <img src="./public/image-1@2x.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ofertas</h5>
              <p class="card-text">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="./public/image-11@2x.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Carta</h5>
              <p class="card-text">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card">
            <img src="./public/image-12@2x.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Reserva</h5>
              <p class="card-text">¿Le preocupa quedarse sin mesa? No se preocupe, haga su reserva aquí.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>


    <div class="sobre-nosotros">
      <div class="sobre-nosotros1">Sobre nosotros</div>
      <div class="somos-una-pizzera">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum
      </div>
      <div class="button">
        <b class="entre">Entre</b>
      </div>
    </div>
    <!--Comentaries-->
    <div class="bg-primary row container-fluid p-5">
      <!--Comentaries description-->
      <div class="col-lg-5 roboto">
        <div class="h3 lobster pb-5">Tu opinión</div>
        <div>
          <p class="col-12">
            En nuestro restaurante tu voz importa.
          </p>
          <p class="col-12">¿Quieres hablar?</p>
          <p class="col-12">
            Deja tu opinión en el siguiente enlace:
          </p>
        </div>
        <div>
          <button type="button" class="btn btn-danger">Opina</button>
        </div>
      </div>
      <!--Comentaries carousel-->
      <div id="carouselExampleAutoplaying" class="carousel slide col-lg-7 col-sm-12" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!--Carousel items-->
          <div class="carousel-item active">
            <div>
              <div>
                <div class="row justify-content-around align-items-center">
                  <img class="col-1 w-2" alt="" src="img\stockImages\defaultUserImage.png" />
                  <div class="col-1">Username</div>
                  <div class="container-fluid col-10">
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                  </div>
                </div>
                <div>
                  <p>
                    Comentario 1
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div>
              <div>
                <div class="row justify-content-around align-items-center">
                  <img class="col-1 w-2" alt="" src="img\stockImages\defaultUserImage.png" />
                  <div class="username col-1">Username</div>
                  <div class="container-fluid col-10">
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                  </div>
                </div>
                <div class="lorem-ipsum-es-container">
                  <p>
                    Comentario 2
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div>
              <div>
                <div class="row justify-content-around align-items-center">
                  <img class="col-1 w-2" alt="" src="img\stockImages\defaultUserImage.png" />
                  <div class="col-1">Username</div>
                  <div class="container-fluid col-10">
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                  </div>
                </div>
                <div>
                  <p>
                    Comentario 3
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
  </div>

  </div>
  <?php include("includes/footer.php"); ?>
</body>

</html>