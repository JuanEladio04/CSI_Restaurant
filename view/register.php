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
                    <div class="container  d-flex flex-column align-items-center">
                        <div class="card formUser bg-danger text-light roundedBorder">
                            <div class="card-header">
                                <h1 class="text-center lobster">Crear cuenta</h1>
                            </div>
                            <div class="card-body roboto">
                                <div class="">
                                    <!-- Form -->
                                    <form action="/action_page.php">
                                        <!-- Name and Last Name inputs -->
                                        <div class="row">
                                            <div class="col-sm-6 mb-1">
                                                <label for="FirstN" class="form-label">Nombre</label>
                                                <input type="text" class="roundedInput form-control" name="FirstN">
                                            </div>
                                            <div class="col-sm-6 mb-2">
                                                <label for="LastN" class="form-label">Apellidos</label>
                                                <input type="text" class="roundedInput form-control" name="LastN">
                                            </div>
                                        </div>
                                        <!-- Email input -->
                                        <div class="margenInferior">
                                            <label for="Email" class="form-label">Correo electrónico</label>
                                            <input type="email" class="roundedInput form-control" id="email"
                                                name="Email">
                                        </div>
                                        <!-- Password inputs -->
                                        <div class="col margenInferior">
                                            <label for="Password1" class="form-label">Contraseña</label>
                                            <input type="password" class="roundedInput form-control" name="Password1">
                                        </div>
                                        <div class="col margenInferior">
                                            <label for="Passwordw" class="form-label">Confirmar contraseña</label>
                                            <input type="password" class="roundedInput form-control" name="Password2">
                                        </div>
                                        <!-- Checkboxes for age and terms acceptance -->
                                        <input type="checkbox" name="mayor" value="mayorEdad" class="rounded-checkbox">
                                        <label for="mayor">Soy mayor de 18</label>
                                        <br>
                                        <input type="checkbox" name="acepto" value="Aceptar términos"
                                            class="rounded-checkbox"> <label for="acepto">Acepto términos</label>

                                        <!-- Create account button -->
                                        <div class="d-grid mt-3">
                                            <button type="button"
                                                class="btn btn-primary btn-block roundedInput roboto">Crear
                                                cuenta</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Footer with link to login -->
                            <div class="card-footer text-center">
                                <a href="login.php" class="nav-link text-light">Ya tengo cuenta</a>
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