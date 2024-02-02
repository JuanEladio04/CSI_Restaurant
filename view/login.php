<?php

include("../includes/a_config.php");

require_once "../controller/sessionController.php";

use Abraham\TwitterOAuth\TwitterOAuth;

if (isset($_SESSION["usuario"])) {
    header('location: userGestion.php');
}
if (isset($_POST["xIdentify"])) {

    # Especificar el 'scope' al solicitar el token de solicitud
    $request_token = $connection->oauth('oauth/request_token', ['oauth_callback' => OAUTH_CALLBACK]);

    $_SESSION['oauth_token'] = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

    $url = $connection->url('oauth/authorize', ['oauth_token' => $request_token['oauth_token']]);
    header('location:' . $url);
}
if (isset($_POST['identificarse'])) {
    $connex = ConnectionManager::getConnectionInstance();
    $resultado = usuarioController::findByEmail($_POST['Email']);
    if ($resultado == null) {
        $error = "El correo electrónico o la contraseña es incorrecta";
    } else {
        if ($resultado->contrasena == $_POST["password"]) {
            $_SESSION['usuario'] = $resultado;
            header('location: ../index.php#menu');
        } else {
            $error = "El correo electrónico o la contraseña es incorrecta";
        }
    }
}
if (isset($_POST["gIdentify"])) {
    header('location:' . $google_client->createAuthUrl());
}


?>
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
        <!-- Restaurant logo -->
        <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>
    </header>

    <!-- Main content container -->

    <main class="container-fluid">
        <div class="row">


            <!--CF2: Esto no es un article, es un form-->

            <article class="col d-flex justify-content-center align-items-center">

                <!--CF2: el container no se pone aquí sino antes de la estructura row/col-->
                <div class="container formUser">

                    <div class="card bg-danger text-light roundedBorder col-lg-5 col-sm-4">
                        <div class="card-header">
                            <h1 class="text-center">Identificarse</h1>
                        </div>
                        <div class="card-body">

                            <!-- Form ---------------------------------------------------------------------------------------------->
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
                                    <input type="password" name="password"
                                        class="roundedInput form-control margenInferior" required>
                                    <p class="text-center">
                                        <?php
                                        if (isset($error)) {
                                            print "<span class='material-symbols-outlined'> warning </span>  " .
                                                $error .
                                                "  <span class='material-symbols-outlined'> warning </span>";
                                        }
                                        ?>
                                    </p>
                                </div>
                        </div>

                        <!-- Footer with links and login button ---------------------------------------------------------------------------------------->
                        <div class="card-footer text-center">
                            <a href="forgottenPassword.php" class="nav-link text-light col-sm-12 text-center">Contraseña
                                olvidada</a>
                            <div class="text-center ">
                                <a href="register.php" class="nav-link text-light textoNoWrap">No estoy
                                    registrado</a>
                                <div id="fb-root"></div>
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-primary roundedInput" name="identificarse"
                                    value="Identificarse">
                            </div>
                            </form>
                        </div>

                        <!-- External loggins ---------------------------------------------------------------------------------------->
                        <form action="" method="POST" class="row justify-content-around card-footer text-center">
                            <p>
                                O inicia sesión con otra plataforma:
                            </p>
                            <!-- Facebook -->
                            <div class="fb-login-button col-2 eLogin-button" data-width="400" data-size=""
                                data-button-type="" data-layout="" data-auto-logout-link="false"
                                data-use-continue-as="false" onlogin="checkLoginState()">
                                
                            </div>

                            <!-- Google -->
                            <button class="col-2 border-secondary eLogin-button" type="submit" name="gIdentify">
                                <img class="img-fluid" src="/img/stockImages/login_register/googleLogo.png" alt="">
                            </button>

                            <!-- X -->
                            <button name="xIdentify" class="col-2 eLogin-button">
                                <img class="img-fluid" src="/img/stockImages/login_register/xLogo.png" alt="">
                            </button>
                        </form>

                    </div>
                </div>
        </div>

        </div>

    </main>

    <?php include("../includes/footer.php"); ?>

</body>

<script src="../js/facebook.js"></script>

</html>