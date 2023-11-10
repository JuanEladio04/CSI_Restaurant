<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("includes\head-tag-contents.php"); ?>
</head>

<body>
  <div id="background-<?php echo $CURRENT_PAGE; ?>" class="container-fluid p-0 m-0">
    <div class="row m-0 p-0">
      <!--Presentation-->
      <div class="container-fluid presentacion col-12 text-center my-5 justify-content-around">
        <img class="w-25 " alt="" src="img\logos\BigLogo.png" />

        <div class="socialmedia col-12">

        </div>

        <div class="container-fluid col-3 d-lg-none d-sm-block">
          <div class="row tittle lobster">
            <a href="#" class="btn btn-secondary roundedButton my-4">Carta</a>
            <a href="#" class="btn btn-secondary roundedButton my-4">Ofertas</a>
            <a href="#" class="btn btn-secondary roundedButton my-4">Reservas</a>
            <a href="view/login.php" class="btn btn-secondary roundedButton my-4">Iniciar Sesión</a>
          </div>
        </div>
      </div>

      <!--Menu carousel-->
      <div class="bg-dark p-5 my-5 container-fluid d-lg-block d-none">
        <div id="carousel" class="mb-5">

          <div class="prevLeftSecond">
          </div>

          <div class="prev card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder mt-auto" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h5 class="card-title lobster bg-danger container-fluid tittle">Ofertas</h5>
              <p class="card-text roboto">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
              <a href="#" class="btn btn-primary">Reserva ahora</a>
            </div>
          </div>

          <div class="selected card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h5 class="card-title lobster tittle">Carta</h5>
              <p class="card-text roboto">Comprueba toda una carta llena de platos variados para todo tipo de personas y estómagos</p>
              <a href="#" class="btn btn-primary">Muéstrame</a>
            </div>
          </div>

          <div class="next card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h5 class="card-title lobster tittle">Reserva</h5>
              <p class="card-text roboto">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
              <a href="#" class="btn btn-primary">Reserva ahora</a>
            </div>
          </div>

          <div class="nextRightSecond card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h5 class="card-title lobster tittle">Cuentas de usuario</h5>
              <p class="card-text roboto">Inicia sesión para aprovechar todas nuestras ventajas</p>
              <a href="view/login.php" class="btn btn-primary">Iniciar sesión</a>
            </div>
          </div>

        </div>

        <div class="buttons container-fluid row mt-5">
          <div class="row mt-5">
            <button id="prev" type="button" class="btn btn-danger col-1 me-auto roundedButton">
              <span class="material-symbols-outlined">
                chevron_left
              </span>
            </button>
            <button id="next" type="button" class="btn btn-danger col-1 ms-auto roundedButton">
              <span class="material-symbols-outlined">
                chevron_right
              </span>
            </button>
          </div>
        </div>
      </div>
      <script src='js/personalCarouselJQuery.js'></script>
      <script src="js/personalCarousel.js"></script>

      <!--About us-->
      <div class="bg-secondary p-5 my-5 container-fluid">
        <div class="row m-0 p-0">
          <div class="col-12 tittle text-light">Sobre nosotros</div>
          <div class="col-12 roboto text-light">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </div>
          <div class="align-items-right col-12">
            <button type="button" class="btn btn-danger col-3" onclick="location.href='view/aboutUs.php'">Opina</button>
          </div>
        </div>
      </div>

      <!--Comentaries-->
      <div class="bg-primary container-fluid p-5 my-5 col-12">
        <div class="row">
          <!--Comentaries description-->
          <div class="col-lg-3 roboto border-end border-light">
            <div class="lobster pb-5 tittle">Tu opinión</div>
            <div>
              <p class="col-12">
                En nuestro restaurante tu voz importa.
              </p>
              <p class="col-12">¿Quieres hablar?</p>
              <p class="col-12">
                Deja tu opinión en el siguiente enlace:
              </p>
            </div>
            <div class="align-items-right col-12">
              <button type="button" class="btn btn-danger col-3">Opina</button>
            </div>
          </div>

          <!--Comentaries carousel-->
          <div id="carouselExampleAutoplaying" class="carousel slide col-lg-9 col-sm-12" data-bs-ride="carousel">
            <div class="carousel-inner row align-items-center">
              <!--Carousel items-->
              <div class="carousel-item active px-5 col-7 bg-primary m-auto">
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis molestiae voluptas qui fugiat omnis placeat, cumque rerum amet, quo tenetur dolores esse aliquam reiciendis consequatur. Saepe, consequuntur? Reprehenderit, molestias nobis.
                  </p>
                </div>
              </div>

              <div class="carousel-item px-5 col-7 bg-primary m-auto">
                <div class="row justify-content-around align-items-center">
                  <img class="col-1 w-2" alt="" src="img\stockImages\defaultUserImage.png" />
                  <div class="col-1 ">Username</div>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maxime illo totam ducimus consectetur temporibus cupiditate dolorem hic voluptas quasi?
                  </p>
                </div>
              </div>

            </div>
            <div>
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
    </div>
    <?php include("includes/footer.php"); ?>

</body>

</html>