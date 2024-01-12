<?php
require "../vendor/autoload.php"; // Incluye la biblioteca
use Abraham\TwitterOAuth\TwitterOAuth;

session_start();


if (isset($_GET['oauth_verifier'])) {
    define('CONSUMER_KEY', "lEpsRim68CZIFbFTWdJhxO5eV");
    define('CONSUMER_SECRET', "z1EDNXshWUS780EmUX0aLkxBxomMhdBAHv3xuc5AAmHOYSJNZ8");
    define('OAUTH_CALLBACK', 'http://localhost:10000/view/register.php');
    define('ACCESS_TOKEN', 'OfVTTFrZJWEO0dH38ckLcXvRsy6L1de13di2fwU');
    define('ACCES_TOKEN_SECRET', 'OfVTTFrZJWEO0dH38ckLcXvRsy6L1de13di2fwU');
    $request_token = [];
    $request_token['oauth_token'] = $_SESSION['oauth_token'];
    $request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

    if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
        die;
    }
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
    $access_token = $connection->oauth('oauth/access_token', ['oauth_verifier' => $_REQUEST['oauth_verifier']]);
    $connectionUs = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
    $connectionUs->setApiVersion('1.1'); // Agrega esta línea
    $user = $connectionUs->get('account/verify_credentials', ['tweet_mode' => 'extended', 'include_entities' => 'true']);
    if ($connectionUs->getLastHttpCode() == 200) {
        echo '<script>console.log(' . json_encode($user) . ')</script>';
    } else {
        print $connectionUs->getLastHttpCode();
    }
}
?>
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">

    <!-- Link to the home page with the restaurant logo -->
    <header class="col-12 text-center">
        <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>
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
                            <form action="/action_page.php">
                                <!-- Name and Last Name inputs in a row -->
                                <div class="row">
                                    <!--CF2: ¿Por qué usas sm-6 si tus compañeros usan md y lg-->
                                    <div class="col-sm-6 margenInferior">
                                        <label for="FirstN" class="form-label">Nombre</label>
                                        <input type="text" class="roundedInput form-control" name="FirstN"
                                            pattern="^[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+$" required>
                                    </div>
                                    <div class="col-sm-6 margenInferior">
                                        <label for="LastN" class="form-label">Apellidos</label>
                                        <input type="text" class="roundedInput form-control" name="LastN"
                                            pattern="^[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+$" required>
                                    </div>
                                </div>

                                <!-- Email input with margin -->
                                <div class="margenInferior">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="roundedInput form-control" id="email" name="Email"
                                        pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                                </div>
                                <!-- Password inputs with margin -->
                                <div class="col margenInferior">
                                    <label for="Password1" class="form-label"> Contraseña:</label>
                                    <ul class="listaError" id="errores"></ul>
                                    <input type="password" class="roundedInput form-control" name="Password1" id="clave"
                                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{8,}$" required
                                        oninput="verificarClave()">
                                </div>
                                <div class="col margenInferior">
                                    <label for="Passwordw" class="form-label">Confirmar contraseña</label>
                                    <input type="password" class="roundedInput form-control" id="claveRep"
                                        name="Password2" required>
                                </div>
                                <p class="oculto" id="passIncorrecta">Las contraseñas no coinciden</p>
                                <div class="row">
                                    <div class="col-sm-6 margenInferior">
                                        <label for="date" class="form-label">Fecha de nacimiento</label>
                                        <input type="date" class="roundedInput form-control" id="fecha" name="date"
                                            min="1900-01-01" max="<?php print date("Y-m-d"); ?>" required>
                                    </div>
                                    <div class="col-sm-6 margenInferior phoneCountries">
                                        <label for="phone" class="form-label">Teléfono</label>
                                        <input type="tel" class="roundedInput form-control d-block" name="phone"
                                            id="phone" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <!--CF2: ¿Por qué usas sm-6 si tus compañeros usan md y lg-->
                                    <div class="col-sm-6 margenInferior">
                                        <label for="country" class="form-label">País</label>
                                        <select type="text" class="roundedInput form-control country" id="country"
                                            name="country" pattern="^[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+$" required></select>
                                    </div>
                                    <div class="col-sm-6 margenInferior">
                                        <label for="postalCode" class="form-label">Código postal</label>
                                        <input id="codPostal" type="text" class="roundedInput form-control"
                                            name="postalCode" pattern="^[0-9]+$" required>
                                    </div>
                                </div>
                                <!-- Checkboxes for age and terms acceptance -->

                                <div class="d-block">
                                    <input type="checkbox" name="acepto" value="Aceptar términos"
                                        class="rounded-checkbox" required>
                                    <label for="acepto">Acepto los términos</label>
                                </div>

                                <!-- Captcha -->
                                <div class="captcha mb-3">
                                    <div class="fondoCaptcha">
                                        <div class="checkboxCaptcha">
                                            <label class="content-input">
                                                <input type="checkbox" name="captcha" class="checkbox">
                                                <i></i>
                                            </label>
                                        </div>
                                        <div class="textoCaptcha">
                                            <p class="text">No eres un robot</p>
                                        </div>
                                        <div class="imgCaptcha"><img src="../img/logos/SmallLogo.png" class="img"
                                                ></div>
                                    </div>
                                </div>


                                <!-- Create account button -->
                                <div class="d-grid margenSuperior">
                                    <input type="submit" value="Crear cuenta" name="crear" id="crear"
                                        class="btn btn-primary btn-block roundedInput textoNoWrap" disabled>
                                </div>
                            </form>
                        </div>

                        <!-- Card footer with a link to the login page -->
                        <div class="card-footer text-center">
                            <a href="login.php" class="nav-link text-light">Ya estoy registrado</a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </main>


    <!-- Include the footer -->
    <?php include("../includes/footer.php"); ?>


</body>

<script src="../js/countries.js"></script>
<script src="../js/verificar.js"></script>

</html>