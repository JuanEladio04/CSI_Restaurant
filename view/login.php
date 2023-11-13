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
                    <div class="container mt-5 mb-5 pt-5 d-flex flex-column align-items-center">
                        <div class="card formUser bg-danger text-light roundedBorder col-lg-12 col-sm-6">
                            <div class="card-header">
                                <h1 class="text-center">Identificarse</h1>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 mt-3">
                                    <!-- Form -->
                                    <form action="/action_page.php">
                                        <!-- Email input -->
                                        <div class="mb-3">
                                            <label for="Email" class="form-label">Correo electrónico</label>
                                            <input type="Email" class="roundedInput form-control" id="pwd" name="Email">
                                        </div>
                                        <!-- Password input -->
                                        <div class="col mb-3">
                                            <label for="Password1" class="form-label">Contraseña</label>
                                            <input type="password" class="roundedInput form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Footer with links and login button -->
                            <div class="card-footer text-start">
                                <a href="forgottenPassword.php" class="nav-link text-light">Contraseña olvidada</a>
                                <div class="row">
                                    <div class="col-4">
                                        <a href="register.php" class="nav-link text-light textoNoWrap">No estoy
                                            registrado</a>
                                    </div>
                                    <div class="col-8 text-center d-flex justify-content-end">
                                        <button type="button"
                                            class="btn btn-primary px-5 roundedInput">Entrar</button>
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