<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("includes\head-tag-contents.php"); ?>
</head>

<body>
  <div id="background-<?php echo $CURRENT_PAGE; ?>" class="container-fluid row">
    <!--Presentation-->
    <div class="presentacion col-12 text-center my-5">
      <img class="logo-icon" alt="" src="img\logos\BigLogo.png" />

      <div class="socialmedia col-12">
        <img class="icon-facebook-icon" alt="" src="./public/-icon-facebook-icon.svg" />

        <img class="icon-instagram-icon" alt="" src="./public/-icon-instagram-icon.svg" />

        <img class="icon-facebook-icon" alt="" src="./public/-icon-twitter.svg" />
      </div>
    </div>
    
    <!--Menu carousel-->
    <div id="carouselExampleAutoplaying" class="carousel slide col-12 d-sm-none d-lg-block row p-5 bg-dark my-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!--Carousel items-->
        <div class="carousel-item px-5 active align-items-center">
          <div class="card bg-danger roundedBorder text-center p-0 w-25 text-light m-auto">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body">
              <h5 class="card-title lobster">Ofertas</h5>
              <p class="card-text roboto">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
              <a href="#" class="btn btn-primary">Reserva ahora</a>
            </div>
          </div>
        </div>

        <div class="carousel-item px-5">
          <div class="card bg-danger roundedBorder text-center p-0 w-25 text-light m-auto">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body">
              <h5 class="card-title lobster">Ofertas</h5>
              <p class="card-text roboto">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
              <a href="#" class="btn btn-primary">Reserva ahora</a>
            </div>
          </div>
        </div>

        <div class="carousel-item px-5">
          <div class="card bg-danger roundedBorder text-center p-0 w-25 text-light m-auto">
            <img src="img\stockImages\index\ofertImg.jpg" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body">
              <h5 class="card-title lobster">Ofertas</h5>
              <p class="card-text roboto">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu bolsillo.</p>
              <a href="#" class="btn btn-primary">Reserva ahora</a>
            </div>
          </div>
        </div>

      </div>
      <div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
      </div>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!--About us-->
  <div class="bg-secondary row p-5">
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
      <button type="button" class="btn btn-danger col-3" onclick="location.href='view/about-us.php'">Opina</button>
    </div>
  </div>

  <!--Comentaries-->
  <div class="bg-primary row container-fluid p-5 m-0">
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
      </div>
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