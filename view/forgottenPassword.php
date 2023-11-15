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
                        <div class="card bg-danger text-light roundedBorder col-lg-12 col-sm-6 ">
                            <div class="card-header">
                                <h1 class="text-center">Contraseña olvidada</h1>
                            </div>
                            <div class="card-body my-auto">
                                <div class="mt-3">
                                    <!-- Form -->
                                    <form action="/action_page.php">
                                        <!-- Email input -->
                                        <div class="margenInferior">
                                            <label for="Email" class="form-label">Correo electrónico</label>
                                            <input type="email" class="roundedInput form-control" id="email"
                                                name="Email">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Footer with links to login and registration -->
                            <div class="card-footer text-center">
                                <a href="register.php" class="nav-link text-light col-sm-12 text-center">No tengo cuenta</a>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <a href="login.php" class="nav-link text-light textoNoWrap">Identificarse</a>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="button"
                                            class="btn btn-primary roundedInput">Enviar correo</button>
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

    <footer>
        <?php include("../includes/footer.php"); ?>
    </footer>

</body>

</html>
