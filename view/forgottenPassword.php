

<!-- Some parts of the code have been written using AI. -->
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Include head content -->
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">

    <!-- Header with a link to the homepage and a restaurant logo -->
    <header class="text-center">
        <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>
    </header>

    <main class="container-fluid">
        <div class="row">

            <!-- Main content container -->

            <!-- Restaurant logo -->

            <!-- Form in a card -->
            <article class="col d-flex justify-content-center align-items-center">

                <!-- User form container -->
                <div class="formUser">

                    <!-- Card for the password recovery form -->
                    <div class="card bg-danger text-light roundedBorder">
                        <div class="card-header">
                            <!-- Title for the password recovery section -->
                            <h1 class="text-center textoNoWrap">Contraseña olvidada</h1>
                        </div>

                        <!-- Card body containing the form -->
                        <div class="card-body my-auto">
                            <div class="mt-3">
                                <!-- Form -->
                                <form action="/action_page.php">
                                    <!-- Email input -->
                                    <div class="margenInferior">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="roundedInput form-control" id="email" name="Email"
                                            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                                    </div>
                            </div>
                        </div>

                        <!-- Card footer with links to login and registration -->
                        <div class="card-footer text-center">
                            <!-- Link to registration page -->
                            <a href="register.php" class="nav-link text-light col-sm-12 text-center">No tengo cuenta</a>
                            <div class="text-center">
                                <!-- Link to login page -->
                                <a href="login.php" class="nav-link text-light textoNoWrap">Identificarse</a>
                            </div>
                            <div class="text-center">
                                <!-- Submit button for sending the password recovery email -->
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

    <!-- Footer section -->
    <footer>
        <?php include("../includes/footer.php"); ?>
    </footer>

</body>

</html>
