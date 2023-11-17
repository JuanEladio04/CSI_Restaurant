<!--Algunas partes del código han sido escritas mediante IA.-->
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">

    <header class="text-center">
        <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>
    </header>
    <main class="container-fluid">

        <div class="row">

            <!-- Main content container -->

            <!-- Restaurant logo -->

            <!-- Form in a card -->
            <article class="col d-flex justify-content-center align-items-center">

                <div class="formUser">
                    <div class="card bg-danger text-light roundedBorder">
                        <div class="card-header">
                            <h1 class="text-center textoNoWrap">Contraseña olvidada</h1>
                        </div>
                        <div class="card-body my-auto">
                            <div class="mt-3">
                                <!-- Form -->
                                <form action="/action_page.php">
                                    <!-- Email input -->
                                    <div class="margenInferior">
                                        <label for="Email" class="form-label">Correo electrónico</label>
                                        <input type="email" class="roundedInput form-control" id="email" name="Email"
                                            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                                    </div>
                            </div>
                        </div>

                        <!-- Footer with links to login and registration -->
                        <div class="card-footer text-center">
                            <a href="register.php" class="nav-link text-light col-sm-12 text-center">No tengo
                                cuenta</a>
                            <div class="text-center">
                                <a href="login.php" class="nav-link text-light textoNoWrap">Identificarse</a>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary roundedInput" name="enviarCorreo"
                                    value="Enviar correo">
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </article>

        </div>
    </main>

    <footer>
        <?php include("../includes/footer.php"); ?>
    </footer>

</body>

</html>