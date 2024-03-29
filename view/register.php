<?php


require_once "../controller/sessionController.php";
include("../includes/a_config.php");


use Abraham\TwitterOAuth\TwitterOAuth;

if (isset($_POST["resolver"])) {
    header('location: ../index.php');
}

if (isset($_GET["emailFacebook"])) {
    $usuario = usuarioController::findByEmail($_GET["emailFacebook"]);
    if ($usuario != null) {
        $_SESSION['usuario'] = $usuario;
        header('location: ../index.php#menu');
    }
}
if (isset($_POST['crear'])) {
    $nombre = $_POST['FirstN'];
    $apellidos = $_POST['LastN'];
    $email = $_POST['Email'];
    $contraseña = $_POST['Password1'];
    $fechaNac = $_POST['date'];
    $telef = $_POST['phone'];
    $pais = $_POST['country'];
    $codPostal = $_POST['postalCode'];
    $usuario = usuarioController::findByEmail($email);
    if ($usuario != null) {
        $error = "Ya existe un usuario con ese correo";
    } else {
        $i = usuarioController::insertUser($nombre, $apellidos, $email, $contraseña, $fechaNac, $telef, $pais, $codPostal);
        if ($i != null) {
            if ($i == true) {
                $usuario = usuarioController::findByEmail($email);
                $_SESSION['usuario'] = $usuario;
                header("Location: ../index.php?registrado='true'");
            }
        } else {
            echo "No se ha podido encontrar el usuario";
        }
    }
} 
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <?php include("../includes/head-tag-contents.php"); ?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
            crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    </head>

    <body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">

        <header class="col-12 text-center">
            <a href="../index.php"><img alt="logo restaurante Pizzeria Luna Della Rossa" src="../img/logos/BigLogo.png" width="300px"></a>
        </header>

        <!-- Main section containing the registration form -->
        <main class="container-fluid">
            <div class="row">
                <!-- Form wrapped in a card with styling -->

                <!--CF2: Esto no sería un article, es un form-->
                <article class="col d-flex justify-content-center align-items-center">

                    <!--CF2: ¿Container dentro de otro container?-->
                    <div class="container formUser">
                        <div class="card bg-danger text-light roundedBorder">
                            <!-- Card header with a centered title -->
                            <div class="card-header">
                                <h1 class="text-center">Registro</h1>
                            </div>
                            <!-- Card body containing the registration form -->
                            <div class="card-body">
                                <!-- Registration form -->
                                <form action="" method="POST">
                                    <!-- Name and Last Name inputs in a row -->
                                    <div class="row">
                                        <!--CF2: ¿Por qué usas sm-6 si tus compañeros usan md y lg-->
                                        <div class="col-sm-6 margenInferior">
                                            <label for="FirstN" class="form-label">Nombre</label>
                                            <input id="FirstN"  type="text" class="roundedInput form-control" name="FirstN"
                                                pattern="^[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+$" value="<?php
                                                if (isset($_SESSION['nombre'])) {
                                                    print $_SESSION['nombre'];
                                                    $_SESSION['nombre'] = "";
                                                }
                                                if (isset($_GET['nombre'])) {
                                                    print $_GET['nombre'];
                                                }
                                                if(isset($_POST['FirstN'])) {
                                                    print $_POST['FirstN'];
                                                }
                                                ?>" required>
                                        </div>
                                        <div class="col-sm-6 margenInferior">
                                            <label for="LastN" class="form-label">Apellidos</label>

                                            <input id="LastN" type="text" class="roundedInput form-control" name="LastN"
                                                pattern="^[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+$" value="<?php
                                                if (isset($_SESSION['apellido'])) {
                                                    print $_SESSION['apellido'];
                                                    $_SESSION['apellido'] = "";
                                                }
                                                if(isset($_POST['LastN'])) {
                                                    print $_POST['LastN'];
                                                }
                                                ?>" required>
                                        </div>
                                    </div>

                                    <!-- Email input with margin -->
                                    <div class="margenInferior">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="roundedInput form-control" id="email" name="Email"
                                            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" value="<?php
                                            if (isset($_SESSION['emailGoogle'])) {
                                                print $_SESSION['emailGoogle'];
                                                $_SESSION['emailGoogle'] = "";
                                            }
                                            if (isset($_SESSION['emailTwitter'])) {
                                                print $_SESSION['emailTwitter'];
                                                $_SESSION['emailTwitter'] = "";
                                            }
                                            if (isset($_GET['emailFacebook'])) {
                                                print $_GET['emailFacebook'];
                                            }
                                            ?>" required>
                                    </div>
                                    <!-- Password inputs with margin -->
                                    <div class="col margenInferior">
                                        <label for="clave" class="form-label"> Contraseña:</label>
                                        <ul class="listaError" id="errores"></ul>
                                        <input type="password" class="roundedInput form-control" name="Password1" id="clave"
                                            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{8,}$" required
                                            oninput="verificarClave()">
                                    </div>
                                    <div class="col margenInferior">
                                        <label for="claveRep" class="form-label">Confirmar contraseña</label>
                                        <input type="password" class="roundedInput form-control" id="claveRep"
                                            name="Password2" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{8,}$"
                                            required oninput="verificarClave()" required>
                                    </div>

                                    <p class="oculto" id="passIncorrecta">Las contraseñas no coinciden</p>
                                    <div class="row">
                                        <div class="col-sm-6 margenInferior">
                                            <label for="fecha" class="form-label">Fecha de nacimiento</label>
                                            <input type="date" class="roundedInput form-control" id="fecha" name="date"
                                                min="1900-01-01" max="<?php print date("Y-m-d"); ?>" value="<?php if(isset($_POST['date'])){print $_POST['date'];} ?>" required>
                                        </div>
                                        <div class="col-sm-6 margenInferior phoneCountries">
                                            <label for="phone" class="form-label">Teléfono</label>
                                            <input type="tel" class="roundedInput form-control d-block" name="phone"
                                                id="phone" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 margenInferior">
                                            <label for="country" class="form-label">País</label>
                                            <select type="text" class="roundedInput form-control country" id="country"
                                                name="country" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+$" required></select>
                                        </div>
                                        <div class="col-sm-6 margenInferior mb-3">
                                            <label for="codPostal" class="form-label">Código postal</label>
                                            <input id="codPostal" type="text" class="roundedInput form-control"
                                                name="postalCode" pattern="^[0-9]+$" required value="<?php
                                                    if(isset($_POST['postalCode'])) {
                                                        print $_POST['postalCode'];
                                                    }
                                                ?>">
                                        </div>
                                    </div>
                                    <!-- Checkboxes for age and terms acceptance -->

                                    <div class="d-block mb-3">
                                        <input type="checkbox" name="acepto" id="terminos" value="Aceptar términos"
                                            class="rounded-checkbox" required>
                                        <label for="terminos">Acepto los términos</label>
                                    </div>

                                    <!-- Captcha -->
                                    <div class="captcha mb-3">
                                        <div class="fondoCaptcha">
                                            <div class="checkboxCaptcha">
                                                <label for="checkbox" class="content-input">
                                                  checkbox  
                                                </label>
                                                <input type="checkbox" name="captcha" class="checkbox" id="checkbox">
                                                    <i onclick="captcha()" id="icono" <?php if (isset($_POST['resolverCaptcha'])) {
                                                        if ($_SESSION['captcha_text'] == $_POST['resolverCaptcha']) {
                                                            echo "class='checkbox-checked'";
                                                        }
                                                        ;
                                                    }
                                                    ; ?>></i>
                                            </div>
                                            <div class="textoCaptcha">
                                                <p class="text">No eres un robot</p>
                                            </div>
                                            <div class="imgCaptcha"><img alt="logo pizzeria" src="../img/logos/SmallLogo.png" class="img"></div>
                                        </div>
                                        <div class="overlay" id="overlay"></div>
                                        <div id="contenedorCaptcha" class="oculto row">
                                            <div class="col-12 tituloCaptcha">
                                                <img alt="logo pizzeria" src="../img/logos/SmallLogo.png" width="100px">
                                                <h2>Completa el CAPTCHA</h2>
                                            </div>
                                            <div class="col-12">
                                                <!-- Esto es un captcha realizado con js -->
                                                <!-- <canvas id="captchaCanvas" width="200px" height="50px"
                                                    class="col-12"></canvas> -->

                                                <!-- Aqui esta el capcha con php -->
                                                <img alt="imgaen del captcha" src="../includes/captcha.php" class="captcha-image">
                                                <i class="fas fa-redo refresh-captcha col-12"></i>
                                            </div>
                                            <div class="col-12 form-captcha">
                                                <label for="resolverCaptcha">´Código</label>
                                                <input type="text" name="resolverCaptcha" id="resolverCaptcha"
                                                    class="tamaño">

                                                <button id="resolver" name="resolver"
                                                    class="btn btn-outline-danger btn-lg btn-block"
                                                    onclick="cerrar()">Calcular</button>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Create account button -->
                                    <div class="d-grid margenSuperior">
                                        <div>
                                            <p class="text-center">
                                                <?php
                                                if (isset($error)) {
                                                    print "<span class='warning'> " .
                                                        "<span class='material-symbols-outlined'>warning</span>" .
                                                        $error .
                                                        "<span class='material-symbols-outlined'>warning</span>" .
                                                        "  </span>";
                                                    unset($error);
                                                }
                                                ?>
                                            </p>
                                        </div>
                                        <input type="submit" value="Crear cuenta" name="crear" id="crear"
                                            class="btn btn-primary btn-block roundedInput textoNoWrap" disabled>
                                    </div>
                                </form>
                            </div>
                            <!-- Card footer with a link to the login page -->
                            <div class="card-footer text-center">
                                <a href="login.php" class="nav-link text-light"><span class="material-symbols-outlined">link</span>Ya estoy registrado</a>
                            </div>

                        </div>
                    </div>
            </div>
            </div>
        </main>




        <!-- Include the footer -->
        <?php include("../includes/footer.php"); ?>


    </body>

    <?php



?>

<script src="../js/countries.js"></script>
<script src="../js/verificar.js"></script>
<script src="../js/captcha.js"></script>

</html>