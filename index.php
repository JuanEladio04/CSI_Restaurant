<?php
include("includes/a_config.php");


use Abraham\TwitterOAuth\TwitterOAuth;

require_once('controller/sessionController.php');

if (isset($_GET['code'])) {

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
  $google_client->setAccessToken($token['access_token']);
  $google_oauth = new Google_Service_Oauth2($google_client);
  $google_account_info = $google_oauth->userinfo->get();
  $email = $google_account_info->email;
  $name = $google_account_info->given_name;
  $apellidos = $google_account_info->family_name;
  $usuario = usuarioController::findByEmail($google_account_info->email);
  if ($usuario == null) {
    $_SESSION['nombre'] = $name;
    $_SESSION['apellido'] = $apellidos;
    $_SESSION['emailGoogle'] = $google_account_info->email;
    header('location: /view/register.php');
  } else {
    $_SESSION['usuario'] = $usuario;
    header('location: index.php#menu');
  }
}

if (isset($_GET['oauth_verifier'])) {
  $request_token = [];
  $request_token['oauth_token'] = $_SESSION['oauth_token'];
  $request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];
  if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
    die;
  }
  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
  $access_token = $connection->oauth('oauth/access_token', ['oauth_verifier' => $_REQUEST['oauth_verifier'], 'include_email' => true]);
  $connectionUs = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
  $connectionUs->setApiVersion('1.1'); // Agrega esta línea
  $user = $connectionUs->get('account/verify_credentials', ['include_email' => true]);
  if ($connectionUs->getLastHttpCode() == 200) {
    $email =  $user->email;
    $usuario = usuarioController::findByEmail($email);
    if ($usuario == null) {
      $_SESSION['emailTwitter'] = $email;
      header('location: /view/register.php');
    } else {
      $_SESSION['usuario'] = $usuario;
      header('location: index.php');
    }
  } else {
    print $connectionUs->getLastHttpCode();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("includes\head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
  <main class="container-fluid p-0 m-0">
    <section class="row m-0 p-0">
      <!--Presentation-->
      <!--CF: No tiene sentido poner un container-fluid dentro de otro container-fluid-->
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

          <!--CF: ¿Dos break points? Tenéis tres layouts en la guía de estilos?-->
          <nav class="container-fluid col-12 d-lg-none d-sm-block">
            <div class="row lobster">
              <a href="view/card.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Carta</a>
              <a href="view/offers.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Ofertas</a>
              <a href="view/reserve.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Reservas</a>
              <?php
              if (!isset($_SESSION["usuario"])) {
                print '<a href="view/login.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Iniciar Sesión</a>';
              } else {
                print '<a href="view/userGestion.php" class="btn btn-secondary rounded-2 my-4 col-10 mx-auto">Mi cuenta</a>';
              }
              ?>
            </div>
          </nav>
        </div>
      </header>

      <!--Menu carousel-->
      <section id="menu" class="bg-dark p-5 my-5 container-fluid d-lg-block d-none">
        <h2 class="d-none">
          Manú carousel
        </h2>
        <div id="carousel" class="mb-5">
          <div class="prevLeftSecond card bg-danger roundedBorder text-center text-dark">
            <img src="img\stockImages\index\gamesImage.png" class="card-img-top roundedBorder mt-auto" alt="reseravs">
            <div class="card-body container-fluid bg-success roundedBorder">
              <h3 class="card-title lobster container-fluid ">Minijuegos</h3>
              <p class="card-text roboto text-justify">¿Necesitas entretenerte?</p>
              <p class="card-text roboto text-justify">No te pierdas nuestra colección de minijuegos, ideales para pasar
                el tiempo mientras esperas o saboreas tu comida.</p>
              <a href="view\games.php" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
            </div>
          </div>

          <div class="prev card bg-danger roundedBorder text-center text-dark">
            <img src="img\stockImages\index\ofertImg.png" class="card-img-top roundedBorder mt-auto" alt="reseravs">
            <div class="card-body container-fluid bg-success roundedBorder">
              <h3 class="card-title lobster container-fluid ">Ofertas</h3>
              <p class="card-text roboto text-justify">¡Mira nuestras ofertas diarias y semanales! Hazle un favor a tu
                bolsillo.</p>
              <a href="view/offers.php" class="btn btn-danger rounded-2">Visitar ofertas</a>
            </div>
          </div>

          <div class="selected card bg-danger roundedBorder text-center text-dark">
            <img src="img\stockImages\index\cardImg.png" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-success roundedBorder">
              <h3 class="card-title lobster ">Carta</h3>
              <p class="card-text roboto text-justify">Comprueba toda una carta llena de platos variados para todo tipo
                de personas y estómagos</p>
              <a href="view/card.php" class="btn btn-danger rounded-2">Muéstrame</a>
            </div>
          </div>

          <div class="next card bg-danger roundedBorder text-center text-dark">
            <img src="img\stockImages\index\reserveImg.png" class="card-img-top roundedBorder" alt="reseravs">
            <div class="card-body container-fluid bg-success roundedBorder">
              <h3 class="card-title lobster ">Reserva</h3>
              <p class="card-text roboto text-justify">¿Quieres asegurarte de no quedarte sin sitio? ¡Reserva ahora!</p>
              <a href="view\reserve.php" class="btn btn-danger rounded-2">Reserva ahora</a>
            </div>
          </div>

          <?php
          if (!isset($_SESSION["usuario"])) {
          ?>
            <div class="nextRightSecond card bg-danger roundedBorder text-center text-dark">
              <img src="img\stockImages\index\loginImg.png" class="card-img-top roundedBorder" alt="reseravs">
              <div class="card-body container-fluid bg-success roundedBorder">
                <h3 class="card-title lobster ">Cuentas de usuario</h3>
                <p class="card-text roboto">Inicia sesión para aprovechar todas nuestras ventajas</p>
                <a href="view/login.php" class="btn btn-danger rounded-2">Iniciar sesión</a>
              </div>
            </div>
          <?php
          } else {
          ?>
            <div class="nextRightSecond card bg-danger roundedBorder text-center text-dark">
              <img src="<?php echo $_SESSION['usuario']->imagen ?>" class="card-img-top roundedBorder" alt="reseravs">
              <div class="card-body container-fluid bg-success roundedBorder">
                <h3 class="card-title lobster ">Cuenta de usuario</h3>
                <p class="card-text roboto">Modifica tu cuenta e incluye una foto</p>
                <a href="view/userGestion.php" class="btn btn-danger rounded-2">
                  Mi cuenta
                </a>
                <a class="btn btn-danger rounded-2" type="button" href="#" data-bs-toggle="modal" data-bs-target="#salir">
                  Cerrar sesión
                </a>

              </div>
            </div>
          <?php
          }
          ?>

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
            ¿Te apetece saborear la auténtica cocina italiana, elaborada con los mejores ingredientes y el cariño de
            nuestra familia?
          </h3>
          <p class="col-12 text-light text-justify">
            Te esperamos en el siguiente enlace, donde podrás conocer más sobre nuestro restaurante, nuestra tradición y
            nuestra pasión por la gastronomía. En este sitio, podrás ver las fotos de nuestros platos, nuestro personal
            y nuestro ambiente. También podrás leer las opiniones de nuestros clientes, nuestras recetas y nuestras
            ofertas. No dejes pasar esta oportunidad de disfrutar de una experiencia única y deliciosa.
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
              <?php
              $comentaries = comentarioController::getIndexComentaries();

              for ($i = 0; $i < count($comentaries); $i++) {
              ?>
                <article class="carousel-item <?php if ($i == 0)
                                                echo 'active'; ?> align-items-center justify-content-around">
                  <div class="container-fluid w-75">
                    <div class="row align-items-center text-center mb-3">
                      <img class="col-lg-1 col-sm-12 w-sm-75" alt="Imagen de usuario" src="<?php echo $comentaries[$i]->imagen_usuario; ?>" />
                      <div class="col-lg-2 col-sm-12">
                        <?php echo $comentaries[$i]->nombre_usuario . " " . $comentaries[$i]->apellidos_usuario; ?>
                      </div>
                      <div class="container-fluid col-lg-8 col-sm-12 text-center text-lg-start">
                        <?php
                        for ($j = 0; $j < 5; $j++) {
                          if ($j < $comentaries[$i]->valoracion) {
                            echo '<i class="fa-solid fa-star mx-auto text-danger"></i>';
                          } else {
                            echo '<i class="fa-regular fa-star text-danger"></i>';
                          }
                        }
                        ?>
                      </div>
                    </div>
                    <div class="row scrola justificar">
                      <p class="col-12 userCommentText">
                        <?php echo $comentaries[$i]->comentario; ?>
                      </p>
                    </div>
                  </div>
                </article>

              <?php
              }
              ?>

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
    <?php include("includes/sessionCloseModal.php"); ?>

  </main>

</body>

</html>

<?php
if (isset($_GET['reservado'])) {
  if ($_GET['reservado'] == true) {
?>
    <script>
      alert("La reserva ha sido registrada con éxito");
    </script>
  <?php
  }
}

if (isset($_GET['registrado'])) {
  if ($_GET['registrado'] == true) {
  ?>
    <script>
      alert("El usuario ha sido registrado correctamente");
    </script>
<?php
  }
}
?>