<!--Algunas partes del código han sido escritas mediante IA.-->
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">

    <header class="col-12 text-center">
        <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>
    </header>


    <main class="container-fluid">
        <div class="row">

            <!-- Main content container -->

            <!-- Restaurant logo -->

            <!-- Form in a card -->
            <!--CF2: Esto no es un article, es un form-->    

            <article class="col d-flex justify-content-center align-items-center">
                
                <!--CF2: el container no se pone aquí sino antes de la estructura row/col-->
                <div class="container formUser">
                    
                    <div class="card bg-danger text-light roundedBorder col-lg-5 col-sm-4">
                        <div class="card-header">
                            <h1 class="text-center">Identificarse</h1>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <!-- Form -->
                                <form action="/action_page.php" method="post">
                                    <!-- Email input -->
                                    <div class="margenInferior">
                                        <label for="Email" class="form-label">Correo electrónico</label>
                                        <input type="Email" class="roundedInput form-control" id="pwd" name="Email"
                                            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                                    </div>
                                    <!-- Password input -->
                                    <div class="col margenInferior">
                                        <label for="Password1" class="form-label">Contraseña</label>
                                        <input type="password" class="roundedInput form-control" required>
                                    </div>
                            </div>
                        </div>
                        <!-- Footer with links and login button -->
                        <div class="card-footer text-center">
                            <a href="forgottenPassword.php" class="nav-link text-light col-sm-12 text-center">Contraseña
                                olvidada</a>
                            <div class="text-center ">
                                <a href="register.php" class="nav-link text-light textoNoWrap">No estoy
                                    registrado</a>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary roundedInput" value="Identificarse">
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </article>

        </div>
    </main>

    <?php include("../includes/footer.php"); ?>

</body>

</html>