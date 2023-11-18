<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("includes\head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
  <main class="container-fluid p-0 m-0">
    <section class="row m-0 p-0">
      <!--Presentation-->
      <header class="container-fluid presentacion col-12 text-center my-5">
        <h1 class="d-none">
          Ristorante luna della rossa
        </h1>
        <div class="row align-items-center justify-content-around">
          <img class="col-12 headerLogo" alt="" src="img\logos\BigLogo.png" />

          <div class="socialmedia col-12">
            <a href="https://www.instagram.com/ristaurantelunadellarosa/" class="mx-4 text-danger" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
            <a href="https://twitter.com/RistauranteDLR" class="mx-4 text-danger" target="_blank"><i class="fa-brands fa-x-twitter fa-2xl"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61553606555788" class="mx-4 text-danger" target="_blank"><i class="fa-brands fa-facebook fa-2xl"></i></i></a>
          </div>

          <nav class="container-fluid col-12 d-lg-none d-sm-block">
            <div class="row lobster">
              <a href="view/card.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Carta</a>
              <a href="view/offers.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Ofertas</a>
              <a href="view/reserve.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Reservas</a>
              <a href="view/login.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Iniciar Sesión</a>
            </div>
          </nav>
        </div>
      </header>

      <!--Menu carousel-->
      <section class="bg-dark p-5 my-5 container-fluid d-lg-block d-none">
        <h2 class="d-none">
          Manú carousel
        </h2>
        <div id="carousel" class="mb-5">


        <div class="prevLeftSecond card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\contactoImg.jpeg" class="card-img-top roundedBorder mt-auto" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h3 class="card-title lobster bg-danger container-fluid ">Datos de contacto</h3>
              <p class="card-text roboto text-justify">Teléfono: +34 333333333</p>
              <p class="card-text roboto text-justify">Correo electrónico: ristaurantelunadellarosa@gmail.com</p>
              <p class="card-text roboto text-justify">¡Puedes hablarnos al mensaje directo de todas nuestras redes!</p>
            </div>
          </div>

          <div class="prev card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder mt-auto" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h3 class="card-title lobster bg-danger container-fluid ">Ofertas</h3>
              <p class="card-text roboto text-justify">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
              <a href="view/offers.php" class="btn btn-primary rounded-2">Visitar ofertas</a>
            </div>
          </div>

          <div class="selected card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\cardImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h3 class="card-title lobster ">Carta</h3>
              <p class="card-text roboto text-justify">Comprueba toda una carta llena de platos variados para todo tipo de personas y estómagos</p>
              <a href="view/card.php" class="btn btn-primary rounded-2">Muéstrame</a>
            </div>
          </div>

          <div class="next card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\reserveImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h3 class="card-title lobster ">Reserva</h3>
              <p class="card-text roboto text-justify">¿Quieres asegurarte de no quedarte sin sitio? ¡Reserva ahora!</p>
              <a href="view\reserve.php" class="btn btn-primary rounded-2">Reserva ahora</a>
            </div>
          </div>

          <div class="nextRightSecond card bg-danger roundedBorder text-center text-light">
            <img src="img\stockImages\index\loginImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-danger roundedBorder">
              <h3 class="card-title lobster ">Cuentas de usuario</h3>
              <p class="card-text roboto">Inicia sesión para aprovechar todas nuestras ventajas</p>
              <a href="view/login.php" class="btn btn-primary rounded-2">Iniciar sesión</a>
            </div>
          </div>

        </div>

        <div class="buttons container-fluid row mt-5">
          <div class="row mt-5">
            <button id="prev" type="button" class="btn btn-danger col-1 me-auto rounded-pill">
              <i class="fa-solid fa-angle-left"></i>
            </button>
            <button id="next" type="button" class="btn btn-danger col-1 ms-auto rounded-pill">
              <i class="fa-solid fa-angle-right"></i>
            </button>
          </div>
        </div>
      </section>
      <script src='js/personalCarouselJQuery.js'></script>
      <script src="js/personalCarousel.js"></script>

      <!--About us-->
      <section id="aboutUs-<?php echo $CURRENT_PAGE; ?>" class="p-5 my-5 container-fluid">
        <h2 class="col-12  text-light lobster d-none">Sobre nosotros</h2>
        <article class="row m-0 p-0 justificar">
          <h3 class="col-12 text-light">
            ¿Te apetece saborear la auténtica cocina italiana, elaborada con los mejores ingredientes y el cariño de nuestra familia?
          </h3>
          <p class="col-12 text-light text-justify">
            Te esperamos en el siguiente enlace, donde podrás conocer más sobre nuestro restaurante, nuestra tradición y nuestra pasión por la gastronomía. En este sitio, podrás ver las fotos de nuestros platos, nuestro personal y nuestro ambiente. También podrás leer las opiniones de nuestros clientes, nuestras recetas y nuestras ofertas. No dejes pasar esta oportunidad de disfrutar de una experiencia única y deliciosa.
          </p>
          <div class="align-items-right col-12">
            <button type="button" class="btn btn-danger col-lg-3 col-sm-12 rounded-2 ms-auto" onclick="location.href='view/aboutUs.php'">Muéstrame</button>
          </div>
        </article>
      </section>

      <!--Feedback section-->
      <section class="bg-primary container-fluid p-5 my-5 col-12">
        <h2 class="d-none">Feed back</h2>
        <div class="row">
          <!--Comentaries description-->
          <article id="opinion-description" class="col-lg-3 border-end border-light pb-5">
            <h3 class="lobster pb-5">Tu opinión</h3>
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
              <button type="button" class="btn btn-danger col-lg-4 col-sm-12" onclick="location.href='view/feedback.php'">Quiero opinar</button>
            </div>
          </article>

          <!--Comentaries carousel-->
          <section id="carouselExampleAutoplaying" class="carousel container-fluid slide col-lg-9 col-sm-12" data-bs-ride="carousel">
            <div class="carousel-inner row">
              <!--Carousel items-->
              <article class="carousel-item active align-items-center justify-content-around">
                <div class="container-fluid w-75">
                  <div class="row align-items-center text-center mb-3">
                    <img class="col-lg-1 col-sm-12 w-sm-75" alt="Imagen de usuario" src="img\stockImages\defaultUserImage.png" />
                    <div class="col-lg-1 col-sm-12">Username</div>
                    <div class="container-fluid col-lg-8 col-sm-12 text-lg-start">
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                    </div>
                  </div>
                  <div>
                    <div class="row scrola justificar">
                      <p class="col-12">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis molestiae voluptas qui fugiat omnis placeat, cumque rerum amet, quo tenetur dolores esse aliquam reiciendis consequatur. Saepe, consequuntur? Reprehenderit, molestias nobis.
                      </p>
                    </div>
                  </div>
                </div>
              </article>

              <article class="carousel-item align-items-center justify-content-around">
                <div class="container-fluid w-75">
                  <div class="row align-items-center text-center mb-3">
                    <img class="col-lg-1 col-sm-12 w-sm-75" alt="Imagen de usuario" src="img\stockImages\defaultUserImage.png" />
                    <div class="col-lg-1 col-sm-12">Username</div>
                    <div class="container-fluid col-lg-9 col-sm-12 text-start">
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                    </div>
                  </div>
                  <div>
                    <div class="row justificar">
                      <p class="col-12">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ad consequuntur possimus?
                      </p>
                    </div>
                  </div>
                </div>
              </article>

              <article class="carousel-item align-items-center justify-content-around">
                <div class="container-fluid w-75">
                  <div class="row align-items-center text-center mb-3">
                    <img class="col-lg-1 col-sm-12 w-sm-75" alt="Imagen de usuario" src="img\stockImages\defaultUserImage.png" />
                    <div class="col-lg-1 col-sm-12">Username</div>
                    <div class="container-fluid col-lg-9 col-sm-12 text-start">
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-solid fa-star mx-auto text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                      <i class="fa-regular fa-star text-danger"></i>
                    </div>
                  </div>
                  <div>
                    <div class="row justificar">
                      <p class="col-12">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit dolor repellat dolores nostrum vitae eius. Reiciendis aliquid ea odio ipsum quia voluptatibus rerum quos, consequatur est accusamus ab libero, repellat accusantium quae qui magni at quas pariatur nisi veritatis vitae, quisquam aliquam labore perspiciatis? Obcaecati beatae quaerat, nobis nesciunt vitae adipisci maiores optio repudiandae. At corrupti neque dolorum repellendus accusamus ipsa modi, quod ea est enim sunt inventore dolorem sequi ipsam architecto, laboriosam fuga voluptates, blanditiis earum. Veritatis numquam quidem nobis illo odio excepturi adipisci, pariatur inventore repellat totam culpa vero tempore itaque accusantium fugit minus nihil tempora! Amet, unde!
                      </p>
                    </div>
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

      <script src="js/comentary.js"></script>


    </section>
    <?php include("includes/footer.php"); ?>

  </main>

</body>

</html>