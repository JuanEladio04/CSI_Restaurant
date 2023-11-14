<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("includes\head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
  <main class="container-fluid p-0 m-0">
    <section class="row m-0 p-0">
      <!--Presentation-->
      <article class="container-fluid presentacion col-12 text-center my-5 justify-content-around">
        <div class="row">
          <img class="img-fluid col-12" alt="" src="img\logos\BigLogo.png" />

          <div class="socialmedia col-12">
            <a href="#!" class="mx-4 text-danger"><i class="fa-brands fa-instagram fa-2xl"></i></a>
            <a href="#!" class="mx-4 text-danger"><i class="fa-brands fa-x-twitter fa-2xl"></i></a>
            <a href="#!" class="mx-4 text-danger"><i class="fa-brands fa-facebook fa-2xl"></i></i></a>
          </div>

          <nav class="container-fluid col-12 d-lg-none d-sm-block">
            <div class="row tittle lobster">
              <a href="#" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Carta</a>
              <a href="#" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Ofertas</a>
              <a href="#" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Reservas</a>
              <a href="view/login.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Iniciar Sesión</a>
            </div>
          </nav>
        </div>
      </article>

      <!--Menu carousel-->
      <section class="bg-dark p-5 my-5 container-fluid d-lg-block d-none">
        <div id="carousel" class="mb-5">

          <div class="prevLeftSecond">
          </div>

          <div class="prev card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder mt-auto" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h5 class="card-title lobster bg-danger container-fluid tittle">Ofertas</h5>
              <p class="card-text roboto">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
              <a href="#" class="btn btn-primary rounded-2">Reserva ahora</a>
            </div>
          </div>

          <div class="selected card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\cardImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h5 class="card-title lobster tittle">Carta</h5>
              <p class="card-text roboto">Comprueba toda una carta llena de platos variados para todo tipo de personas y estómagos</p>
              <a href="#" class="btn btn-primary rounded-2">Muéstrame</a>
            </div>
          </div>

          <div class="next card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\reserveImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h5 class="card-title lobster tittle">Reserva</h5>
              <p class="card-text roboto">¿Quieres asegurarte de no quedarte sin sitio? ¡Reserva ahora!</p>
              <a href="#" class="btn btn-primary rounded-2">Reserva ahora</a>
            </div>
          </div>

          <div class="nextRightSecond card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\loginImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h5 class="card-title lobster tittle">Cuentas de usuario</h5>
              <p class="card-text roboto">Inicia sesión para aprovechar todas nuestras ventajas</p>
              <a href="view/login.php" class="btn btn-primary rounded-2">Iniciar sesión</a>
            </div>
          </div>

        </div>

        <div class="buttons container-fluid row mt-5">
          <div class="row mt-5">
            <button id="prev" type="button" class="btn btn-danger col-1 me-auto rounded-pill">
              <span class="material-symbols-outlined">
                chevron_left
              </span>
            </button>
            <button id="next" type="button" class="btn btn-danger col-1 ms-auto rounded-pill">
              <span class="material-symbols-outlined">
                chevron_right
              </span>
            </button>
          </div>
        </div>
      </section>
      <script src='js/personalCarouselJQuery.js'></script>
      <script src="js/personalCarousel.js"></script>

      <!--About us-->
      <section class="bg-secondary p-5 my-5 container-fluid">
        <div class="row m-0 p-0">
          <h2 class="col-12 tittle text-light lobster">Sobre nosotros</h2>
          <p class="col-12 text-light">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
          <div class="align-items-right col-12">
            <button type="button" class="btn btn-danger col-3 rounded-2" onclick="location.href='view/aboutUs.php'">Muéstrame</button>
          </div>
        </div>
      </section>

      <section class="bg-primary container-fluid p-5 my-5 col-12">
        <div class="row">
          <!--Comentaries description-->
          <article class="col-lg-3 roboto border-end border-light mb-5">
            <h2 class="lobster pb-5 tittle">Tu opinión</h2>
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
              <button type="button" class="btn btn-danger col-3 rounded-2" onclick="location.href='view/aboutUs.php'">Opina</button>
            </div>
          </article>

          <!--Comentaries carousel-->
          <section id="carouselExampleAutoplaying" class="carousel slide col-lg-9 col-sm-12" data-bs-ride="carousel">
            <div class="carousel-inner align-items-center row">
              <!--Carousel items-->
              <article class="carousel-item active col-10 bg-primary comments">
                <div class="row align-items-center text-center">
                  <img class="col-lg-1 col-sm-12" alt="Imagen de usuario" src="img\stockImages\defaultUserImage.png" />
                  <div class="col-lg-1 col-sm-12">Username</div>
                  <div class="container-fluid col-lg-10 col-sm-12 text-start">
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                  </div>
                </div>
                <div>
                  <div class="row">
                    <p class="col-12">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis molestiae voluptas qui fugiat omnis placeat, cumque rerum amet, quo tenetur dolores esse aliquam reiciendis consequatur. Saepe, consequuntur? Reprehenderit, molestias nobis.
                    </p>
                  </div>
                </div>
              </article>

              <article class="carousel-item col-12 col-sm-7 bg-primary m-auto">
                <div class="row align-items-center text-center">
                  <img class="col-lg-1 col-sm-12" alt="Imagen de usuario" src="img\stockImages\defaultUserImage.png" />
                  <div class="col-lg-1 col-sm-12">Username</div>
                  <div class="container-fluid col-lg-10 col-sm-12 mr-auto">
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-solid fa-star mx-auto text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                    <i class="fa-regular fa-star text-danger"></i>
                  </div>
                </div>
                <div>
                  <div class="row">
                    <p class="col-12">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis molestiae voluptas qui fugiat omnis placeat, cumque rerum amet, quo tenetur dolores esse aliquam reiciendis consequatur. Saepe, consequuntur? Reprehenderit, molestias nobis.
                    </p>
                  </div>
                </div>
              </article>

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
          </section>
        </div>
      </section>


    </section>
    <?php include("includes/footer.php"); ?>

  </main>

</body>

</html>