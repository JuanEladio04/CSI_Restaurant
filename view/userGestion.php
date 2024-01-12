<?php
require "../controller/sessionController.php";

if (!isset($_SESSION["usuario"])) {
    header('location: ../index.php');
}
include("../includes/a_config.php");
if (isset($_POST["cambiarNombre"])) {
    $resultadoConsulta = usuarioController::cambiarNombre($_SESSION["usuario"]->id, $_POST["userName"], $_POST["userSubname"]);
    $_SESSION["usuario"]->nombre = $_POST["userName"];
    $_SESSION["usuario"]->apellidos = $_POST["userSubname"];
    if ($resultadoConsulta != null) {
        print "Ha habido un fallo en la consulta, para más información, informa al administrador y dale el siguiente error" . $resultadoConsulta;
    }

}
if (isset($_POST["cambiarCorreo"])) {
    $resultadoConsulta = usuarioController::cambiarEmail($_SESSION["usuario"]->id, $_POST["userEmail"]);
    $_SESSION["usuario"]->email = $_POST["userEmail"];
    if ($resultadoConsulta != null) {
        print "Ha habido un fallo en la consulta, para más información, informa al administrador y dale el siguiente error" . $resultadoConsulta;
    }
}
if (isset($_POST["cambiarPass"])) {
    if ($_POST["conAct"] == $_SESSION["usuario"]->contrasena) {
        $resultadoConsulta = usuarioController::cambiarPass($_SESSION["usuario"]->id, $_POST["Password1"]);
        $_SESSION["usuario"]->contrasena = $_POST["Password1"];
        if ($resultadoConsulta != null) {
            print "Ha habido un fallo en la consulta, para más información, informa al administrador y dale el siguiente error" . $resultadoConsulta;
        }
    } else {
        $error = "La contaseña actual no coincide";
    }


}
if (isset($_POST["cambiarNombre"])) {
    
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-primary" id="background-<?php echo $CURRENT_PAGE; ?>">


    <?php include("../includes/navigation.php"); ?>

    <div class="container-fluid mt-5">
        <section>
            <div class="row">
                <div class="col-4"></div>

                <!-- Main content container -->
                <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                    <!-- User photo container -->
                    <div class="formUserGestion mt-5 pt-5 d-flex flex-column align-items-center">
                        <div class="card bg-danger text-dark roundedBorderUserGestion bg-light">
                            <div class="card-body my-auto">
                                <h1 class="text-center">Foto de perfil</h1>

                                <div class="">
                                    <!-- Form -->
                                    <form action="" method="POST">
                                        <div class="d-flex justify-content-center">
                                            <img class="" width="200vh" alt="Imagen de usuario"
                                                src="../img/stockImages/defaultUserImage.png" />
                                        </div>
                                        <div class="container d-flex justify-content-center margenSuperior">
                                            <button class="btn text-light bg-danger roundedInput textoNoWrap"
                                                type="submit">
                                                Cambiar foto de perfil
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User name change form -->
                    <div class="container formUserGestion">
                        <div class="card bg-danger text-dark roundedBorderUserGestion bg-light">
                            <div class="card-body  my-auto">
                                <h1 class="text-center lobster">Nombre de usuario</h1>

                                <div class="">
                                    <!-- Form -->
                                    <form action="" method="POST">
                                        <div class="">
                                            <input type="text" class="roundedInput form-control mb-2" id="userName"
                                                name="userName" value="<?php
                                                print $_SESSION["usuario"]->nombre;
                                                ?>">
                                        </div>
                                        <div class="">
                                            <input type="text" class="roundedInput form-control" id="userSubname"
                                                name="userSubname" value="<?php
                                                print $_SESSION["usuario"]->apellidos;
                                                ?>">
                                        </div>
                                        <div class="container d-flex justify-content-center margenSuperior">
                                            <input class="btn text-light bg-danger roundedInput textoNoWrap"
                                                type="submit" name="cambiarNombre" value="Cambiar nombre de usuario">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User email change form -->
                    <div class="container formUserGestion">
                        <div class="card bg-danger text-dark roundedBorderUserGestion bg-light">
                            <div class="card-body my-auto">
                                <h1 class="text-center lobster">Correo electrónico</h1>

                                <div class="">
                                    <!-- Form -->
                                    <form action="" method="POST">
                                        <div class="">
                                            <input type="text" class="roundedInput form-control" id="userEmail"
                                                name="userEmail" value="<?php
                                                print $_SESSION['usuario']->email;
                                                ?>" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                                required>
                                        </div>
                                        <div class="container d-flex justify-content-center margenSuperior">
                                            <input class="btn text-light bg-danger roundedInput textoNoWrap"
                                                type="submit" name="cambiarCorreo" value="Cambiar correo electrónico">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Password change form -->
                    <div class="container-fluid formUserGestion">
                        <div class="card bg-danger text-dark roundedBorderUserGestion bg-light">
                            <div class="card-body my-auto">
                                <h1 class="text-center lobster">Cambiar contraseña</h1>

                                <div class="margenInferior">
                                    <!-- Form -->
                                    <form action="" method="POST">
                                        <div class="margenInferior">
                                            <p class="lobster">Contraseña actual:</p>
                                            <input type="password" class="roundedInput form-control" id="conAct"
                                                name="conAct" required>
                                        </div>
                                        <div class="margenInferior">
                                            <label for="Password1" class="form-label"> Contraseña nueva:</label>
                                            <ul class="listaError" id="errores"></ul>
                                            <input type="password" class="roundedInput form-control" name="Password1"
                                                id="clave" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{8,}$"
                                                required oninput="verificarClave()">
                                        </div>
                                        <div class="margenInferior">
                                            <label for="Passwordw" class="form-label">Repetir contraseña</label>
                                            <input type="password" class="roundedInput form-control" id="claveRep"
                                                name="Password2" required>
                                        </div>
                                        <div class="container d-flex justify-content-center margenSuperior">
                                            <input class="btn text-light bg-danger roundedInput" type="submit"
                                                id="cambiarPass" value="Cambiar contraseña" name="cambiarPass" disabled>

                                        </div>
                                    </form>
                                    <?php
                                    if (isset($error)) {
                                        print $error;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-4"></div>
            </div>
        </section>
    </div>
    

    <?php include("../includes/footer.php"); ?>

</body>


<script src="../js/cambiarPass.js"></script>


</html>