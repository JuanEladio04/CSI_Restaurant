<?php
include("includes/a_config.php");

use Abraham\TwitterOAuth\TwitterOAuth;

require_once('controller/sessionController.php');

// Manejo de la autenticación de Google
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
    exit; // Terminamos el script después de redirigir
  } else {
    $_SESSION['usuario'] = $usuario;
    header('location: index.php#menu');
    exit; // Terminamos el script después de redirigir
  }
}

// Manejo de la autenticación de Twitter
if (isset($_GET['oauth_verifier'])) {
  $request_token = [
    'oauth_token' => $_SESSION['oauth_token'],
    'oauth_token_secret' => $_SESSION['oauth_token_secret']
  ];
  if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
    die; // Terminate the script
  }
  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
  $access_token = $connection->oauth('oauth/access_token', ['oauth_verifier' => $_REQUEST['oauth_verifier'], 'include_email' => true]);
  $connectionUs = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
  $connectionUs->setApiVersion('1.1');
  $user = $connectionUs->get('account/verify_credentials', ['include_email' => true]);
  if ($connectionUs->getLastHttpCode() == 200) {
    $email = $user->email;
    $usuario = usuarioController::findByEmail($email);
    if ($usuario == null) {
      $_SESSION['emailTwitter'] = $email;
      header('location: /view/register.php');
      exit; // Terminamos el script después de redirigir
    } else {
      $_SESSION['usuario'] = $usuario;
      header('location: index.php');
      exit; // Terminamos el script después de redirigir
    }
  } else {
    print $connectionUs->getLastHttpCode();
  }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
  <?php include("includes/cookies.php"); ?>
  <main class="container-fluid p-0 m-0">
    <section class="row m-0 p-0">
      <!--Presentation-->
      <!--CF: No tiene sentido poner un container-fluid dentro de otro container-fluid-->
      <header class="container-fluid presentacion col-12 text-center">

        <nav class="container-fluid col-12 d-none d-lg-block">

          <div class="row lobster">
            <a href="view/card.php" class="btn btn-danger rounded-2 my-4 col-10 col-lg-2 mx-auto">Carta</a>
            <a href="view/offers.php" class="btn btn-danger rounded-2 my-4 col-10 col-lg-2 mx-auto">Ofertas</a>
            <a href="view/reserve.php" class="btn btn-danger rounded-2 my-4 col-10 col-lg-2 mx-auto">Reservas</a>
            <?php
            if (!isset($_SESSION["usuario"])) {
              print '<a href="view/login.php" class="btn btn-danger rounded-2 my-4 col-10 col-lg-2 mx-auto">Iniciar Sesión</a>';
            } else {
              print '<a href="view/userGestion.php" class="btn btn-danger rounded-2 my-4 col-11 col-lg-2 mx-auto">Mi cuenta</a>';
              print '<a href="/view/cerrarSesion.php" class="boton col-12 col-lg-2"><button type="button" class="btn btn-danger rounded-2 my-4 col-12 mx-auto">Cerrar Sesión</button></a>';
            }
            ?>
          </div>
        </nav>

        <div class="row align-items-center justify-content-around">
          <img class="col-12 headerLogo" alt="" src="img/logos/BigLogo.png" />
          <h1 class='text-light bg-dark py-3'>
            Ristorante luna della rossa
          </h1>

          <!--CF: ¿Dos break points? Tenéis tres layouts en la guía de estilos?-->
          <nav class="container-fluid col-12 d-lg-none">

            <div class="row lobster">
              <a href="view/card.php" class="btn btn-danger rounded-2 my-4 col-10 col-lg-2 mx-auto">Carta</a>
              <a href="view/offers.php" class="btn btn-danger rounded-2 my-4 col-10 col-lg-2 mx-auto">Ofertas</a>
              <a href="view/reserve.php" class="btn btn-danger rounded-2 my-4 col-10 col-lg-2 mx-auto">Reservas</a>
              <?php
              if (!isset($_SESSION["usuario"])) {
                print '<a href="view/login.php" class="btn btn-danger rounded-2 my-4 col-10 col-lg-2 mx-auto">Iniciar Sesión</a>';
              } else {
                print '<a href="view/userGestion.php" class="btn btn-danger rounded-2 my-4 col-11 col-lg-2 mx-auto">Mi cuenta</a>';
                print '<a href="/view/cerrarSesion.php" class="boton col-12 col-lg-2"><button type="button" class="btn btn-danger rounded-2 my-4 col-12 mx-auto">Cerrar Sesión</button></a>';
              }
              ?>
            </div>
          </nav>
        </div>
      </header>

      <!--About us-->
      <section id="aboutUs-<?php echo $CURRENT_PAGE; ?>" class="p-5 my-5 container-fluid bg-secondary">
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
            <button type="button" class="btn btn-danger col-lg-3 col-sm-12 rounded-2 ms-auto"
              onclick="location.href='view/aboutUs.php'">Muéstrame</button>
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
              <button type="button" class="btn btn-danger col-lg-4 col-sm-12"
                onclick="location.href='view/feedback.php'">Ver opiniones</button>
            </div>
          </article>

          <!--Comentaries carousel-->
          <section id="carouselExampleAutoplaying" class="carousel container-fluid slide col-lg-9 col-sm-12">
            <div class="carousel-inner row">
              <!--Carousel items-->
              <?php
              $comentaries = comentarioController::getIndexComentaries();
              foreach ($comentaries as $i => $comentary) {
                ?>
                <article
                  class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?> align-items-center justify-content-around">
                  <div class="container-fluid w-75">
                    <div class="row align-items-center text-center mb-3">
                      <img class="col-lg-1 col-sm-12 w-sm-75" alt="Imagen de usuario"
                        src="<?php echo $comentary->imagen_usuario; ?>" />
                      <div class="col-lg-2 col-sm-12">
                        <?php echo $comentary->nombre_usuario . " " . $comentary->apellidos_usuario; ?>
                      </div>
                      <div class="container-fluid col-lg-8 col-sm-12 text-center text-lg-start">
                        <?php
                        for ($j = 0; $j < 5; $j++) {
                          if ($j < $comentary->valoracion) {
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
                        <?php echo $comentary->comentario; ?>
                      </p>
                    </div>
                  </div>
                </article>
                <?php
              }
              ?>
            </div>
            <div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </section>
        </div>
      </section>
    </section>
  </main>

  <?php include("includes/footer.php"); ?>

  <script src='js/personalCarouselJQuery.js'></script>
  <script src="js/personalCarousel.js"></script>
  <script src="js/comentary.js"></script>
</body>

</html>

<?php
if (isset($_GET['reservado']) && $_GET['reservado'] == true) {
  ?>
  <div class="modal fade" id="modalReserva" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content bg-success">
        <div class="modal-header">
          <h2 class="modal-title">ALERTA</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mt-4 fs-5 d-flex justify-content-center align-text-center">Reserva registrada con éxito</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="botonNoticias">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $('#modalReserva').modal('show');
    });
  </script>
  <?php
}
?>

<?php
if (isset($_GET['registrado']) && $_GET['registrado'] == true) {
  ?>
  <div class="modal fade" id="modalReserva" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content bg-success">
        <div class="modal-header">
          <h2 class="modal-title">ALERTA</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mt-4 fs-5 d-flex justify-content-center align-text-center">El usuario ha sido registrado con éxito</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="botonNoticias">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      $('#modalReserva').modal('show');
    });
  </script>
  <?php
}
?>