<!--Algunas partes del código han sido escritas mediante IA.-->
<?php include("../includes/a_config.php"); ?>
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
                    <div class="container formUserGestion mt-5 pt-5 d-flex flex-column align-items-center">
                        <div class="card bg-danger text-dark roundedBorderUserGestion bg-light">
                            <div class="card-body my-auto">
                                <h1 class="text-center">Foto de perfil</h1>

                                <div class="">
                                    <!-- Form -->
                                    <form action="/action_page.php">
                                        <div class="d-flex justify-content-center">
                                            <img class="" width="200vh" alt="Imagen de usuario"
                                                src="../img/stockImages/defaultUserImage.png" />
                                        </div>
                                        <div class="container d-flex justify-content-center margenSuperior">
                                            <button class="btn text-light bg-danger roundedInput textoNoWrap" type="submit">
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
                                    <form action="/action_page.php">
                                        <div class="">
                                            <input type="text" class="roundedInput form-control" id="userName"
                                                name="userName">
                                        </div>
                                        <div class="container d-flex justify-content-center margenSuperior">
                                            <button class="btn text-light bg-danger roundedInput textoNoWrap" type="submit">
                                                Cambiar nombre de usuario
                                            </button>
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
                                    <form action="/action_page.php">
                                        <div class="">
                                            <input type="text" class="roundedInput form-control" id="userEmail"
                                                name="userEmail">
                                        </div>
                                        <div class="container d-flex justify-content-center margenSuperior">
                                            <button class="btn text-light bg-danger roundedInput textoNoWrap" type="submit">
                                                Cambiar correo electrónico
                                            </button>
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
                                    <form action="/action_page.php">
                                        <div class="margenInferior">
                                            <p class="lobster">Contraseña actual:</p>
                                            <input type="password" class="roundedInput form-control" id="conAct"
                                                name="conAct">
                                        </div>
                                        <div class="margenInferior">
                                            <p class="lobster">Contraseña nueva:</p>
                                            <input type="password" class="roundedInput form-control" id="conNue"
                                                name="conNue">
                                        </div>
                                        <div class="margenInferior">
                                            <p class="lobster">Repetir contraseña:</p>
                                            <input type="password" class="roundedInput form-control" id="conNueRep"
                                                name="conNueRep">
                                        </div>
                                        <div class="container d-flex justify-content-center margenSuperior">
                                            <button class="btn text-light bg-danger roundedInput" type="submit">
                                                Cambiar contraseña
                                            </button>
                                        </div>
                                    </form>
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

</html>