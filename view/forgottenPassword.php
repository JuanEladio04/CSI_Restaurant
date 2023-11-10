<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-dark" id="background-<?php echo $CURRENT_PAGE;?>">

    <!--Creo un div row en el que meto 3 divs que ocupen un tercio del espacio cada uno. Con el fin de que el div en el que estará el cuestionario se quede en el centro.-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>

            <!--Div en el que va el formulario y el contenido.-->

            <div class="col-4 d-flex flex-column align-items-center">

                <!--Foto del logo del restaurante, que se queda arriba del formulario.-->


                <a href="../index.php"><img src="../img/logos/BigLogo.png" width="300px"></a>


                <!--Meto el formulario en una carta, en el "header" pongo un texto para especificar el apartado.-->

                <div class="container mt-5 mb-5 pt-5 d-flex flex-column align-items-center justify-content-center">
                    <div class="card bg-danger text-light roundedBorder col-lg-12 col-sm-6 ">
                        <div class="card-header">
                            <h1 class="text-center lobster">Contraseña olvidada</h1>
                        </div>
                        <div class="card-body roboto my-auto">
                            <div class="mb-3 mt-3">
                                <form action="/action_page.php">


                            </div>
                            <div class="mb-3">
                                <label for="Email" class="form-label">Correo electrónico</label>
                                <input type="Email" class="roundedInput form-control" id="pwd" name="Email">
                            </div>




                            <!--Meto un footer, para que se cree una barra dividiendo los input de texto de los links de identificarse y del registro.
                Sin embargo, no cierro el formulario, para que el botón se incluya en el formulario.-->

                        </div>
                        <div class="card-footer text-start">
                            <a href="login.php" class="nav-link text-light">Identificarse</a>
                            <div class="row">
                                <div class="col-6">
                                <a href="register.php" class="nav-link text-light">No estoy registrado</a>
                                </div>
                                <div class="col-6 text-center d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary px-3 roundedInput roboto">Enviar correo </Input>
                                </div>

                            </div>

                        </div>

                        </form>
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