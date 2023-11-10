<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE; ?>">


    <!--Creo un div row en el que meto 3 divs que ocupen un tercio del espacio cada uno. Con el fin de que el div en el que estará el cuestionario se quede en el centro.-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>

            <!--Div en el que va el formulario y el contenido.-->

            <div class="col-4 d-flex flex-column align-items-center">

                <!--Foto del logo del restaurante, que se queda arriba del formulario.-->

                <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>



                <!--Meto el formulario en una carta, en el "header" pongo un texto para especificar el apartado.-->
                <div class="container mt-5 mb-5 pt-5 d-flex flex-column align-items-center">
                    <div class="card bg-danger text-light roundedBorder col-lg-12 col-sm-6">
                        <div class="card-header">
                            <h1 class="text-center lobster">Identificarse</h1>
                        </div>
                        <div class="card-body roboto">
                            <div class="mb-3 mt-3">
                                <!--Formulario-->
                                <form action="/action_page.php">


                            </div>
                            <div class="mb-3">
                                <label for="Email" class="form-label">Correo electrónico</label>
                                <input type="Email" class="roundedInput form-control" id="pwd" name="Email">
                            </div>

                            <div class="col mb-3">
                                <label for="Password1" class="form-label">Contraseña</label>
                                <input type="password" class="roundedInput form-control">
                            </div>
                        </div>
                        <!--Meto un footer, para que se cree una barra dividiendo los input de texto de los links de contraseña olvidada y del registro.
                Sin embargo, no cierro el formulario, para que el botón se incluya en el formulario.-->
                        <div class="card-footer text-start">
                            <a href="forgottenPassword.php" class="nav-link text-light">Contraseña olvidada</a>
                            <div class="row">
                                <div class="col-4">
                                    <a href="register.php" class="nav-link text-light textoNoWrap">No estoy
                                        registrado</a>
                                </div>
                                <div class="col-8 text-center d-flex justify-content-end">
                                    <button type="button"
                                        class="btn btn-primary px-5 roundedInput roboto">Entrar</button>
                                </div>

                                </form>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    </div>


    <?php include("../includes/footer.php"); ?>

</body>

</html>