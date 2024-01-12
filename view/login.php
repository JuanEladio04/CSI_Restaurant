<?php
require "../vendor/autoload.php"; // Incluye la biblioteca
require "../controller/ConnectionManager.php"; // Incluye"
use Abraham\TwitterOAuth\TwitterOAuth;

session_start();
if (isset($_POST["xIdentify"])) {
    define('CONSUMER_KEY', "lEpsRim68CZIFbFTWdJhxO5eV");
    define('CONSUMER_SECRET', "z1EDNXshWUS780EmUX0aLkxBxomMhdBAHv3xuc5AAmHOYSJNZ8");
    define('OAUTH_CALLBACK', 'http://localhost:10000/view/register.php');
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
    $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
    $_SESSION['oauth_token'] = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
    $url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
    header('location:' . $url);
}
if (isset($_POST['identificarse'])) {
    $connex = ConnectionManager::getConnectionInstance();
    $resultado = $connex->query('SELECT * FROM usuarios WHERE email = "' . $_POST['Email'] . '"');
    if ($resultado->rowCount() == 0) {
        $error = "El correo electrónico o la contraseña es incorrecta";
    } else {
        $usuario = $resultado->fetchObject();
        if ($usuario->contrasena == $_POST["password"]) {
            $_SESSION['usuario'] = $usuario;
            header('location: ../index.php');
        } else {
            $error = "El correo electrónico o la contraseña es incorrecta";

        }
    }
}
?>
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v18.0&appId=351483897629787"
        nonce="zVvRb6qN"></script>
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">

    <header class="col-12 text-center">
        <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>
    </header>


    <main class="container-fluid">
        <div class="row">

            <!-- Main content container -->

            <!-- Restaurant logo -->

            <!-- Form in a card -->

            <!--CF2: Esto no es un article, es un form-->

            <article class="col d-flex justify-content-center align-items-center">

                <!--CF2: el container no se pone aquí sino antes de la estructura row/col-->
                <div class="container formUser">

                    <div class="card bg-danger text-light roundedBorder col-lg-5 col-sm-4">
                        <div class="card-header">
                            <h1 class="text-center">Identificarse</h1>
                        </div>
                        <div class="card-body">
                            <!-- Form -->
                            <form action="" method="POST">
                                <!-- Email input -->
                                <div class="margenInferior">
                                    <label for="Email" class="form-label">Correo electrónico</label>
                                    <input type="Email" class="roundedInput form-control" id="pwd" name="Email"
                                        pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                                </div>
                                <!-- Password input -->
                                <div class="col margenInferior">
                                    <label for="Password1" class="form-label">Contraseña</label>
                                    <input type="password" name="password" class="roundedInput form-control" required>
                                </div>
                        </div>

                        <!-- Footer with links and login button -->
                        <div class="card-footer text-center">
                            <a href="forgottenPassword.php" class="nav-link text-light col-sm-12 text-center">Contraseña
                                olvidada</a>
                            <div class="text-center ">
                                <a href="register.php" class="nav-link text-light textoNoWrap">No estoy
                                    registrado</a>
                                <div id="fb-root"></div>



                            </div>

                            <div class="text-center">
                                <?php
                                if (isset($error)) {
                                    print $error;
                                }
                                ?>
                                <input type="submit" class="btn btn-primary roundedInput" name="identificarse"
                                    value="Identificarse">
                            </div>
                            </form>

                            <div class="fb-login-button" data-width="400" data-size="" data-button-type=""
                                data-layout="" data-auto-logout-link="false" data-use-continue-as="false"
                                onlogin="checkLoginState()"></div>
                            <form action="" method="POST">
                                <input type="submit" class="btn btn-dark" value="Identificarse con X" name="xIdentify">
                            </form>

                        </div>
                    </div>
                </div>
        </div>

        </div>

    </main>

    <?php include("../includes/footer.php"); ?>

</body>

<script src="../js/facebook.js"></script>
<script src="../js/twitter.js"></script>

</html>