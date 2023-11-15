<!--Algunas partes del código han sido escritas mediante IA.-->
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">


    <section>
        <!-- Creating a row div with 3 divs to center the form -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-4"></div>

                <!-- Main content container -->
                <article class="col-4 d-flex flex-column align-items-center">

                    <!-- Restaurant logo -->
                    <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>

                    <!-- Form in a card -->
                    <div class="container formUser">
                        <div class="card bg-danger text-light roundedBorder col-lg-12 col-sm-6">
                            <div class="card-header">
                                <h1 class="text-center">Identificarse</h1>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <!-- Form -->
                                    <form action="/action_page.php">
                                        <!-- Email input -->
                                        <div class="margenInferior">
                                            <label for="Email" class="form-label">Correo electrónico</label>
                                            <input type="Email" class="roundedInput form-control" id="pwd" name="Email">
                                        </div>
                                        <!-- Password input -->
                                        <div class="col margenInferior">
                                            <label for="Password1" class="form-label">Contraseña</label>
                                            <input type="password" class="roundedInput form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Footer with links and login button -->
                            <div class="card-footer text-center">
                                <a href="forgottenPassword.php"
                                    class="nav-link text-light col-sm-12 text-center">Contraseña olvidada</a>
                                <div class="row">
                                    <div class="col-sm-12 text-center ">
                                        <a href="register.php" class="nav-link text-light textoNoWrap">No estoy
                                            registrado</a>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="button" class="btn btn-primary roundedInput">Identificarse</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <div class="col-4"></div>
            </div>
        </div>
    </section>

    <?php include("../includes/footer.php"); ?>

</body>

</html>