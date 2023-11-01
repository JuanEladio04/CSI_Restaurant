<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-primary">

    <?php include("../includes/navigation.php"); ?>


    <div class="container-fluid my-5">


        <!--Div en el que va el formulario y el contenido.-->
        <div class="row justify-content-between">


            <div class="col-3 mt-3 p-5 mb-1 d-flex align-items-center gestionUser">
                <div class="card bg-danger text-dark anchoTarjetas roundedBorder gestionUser bg-light">
                    <div class="card-body roboto my-auto">
                        <h1 class="text-center lobster">Nombre de usuario</h1>

                        <div class="mb-3 mt-3">
                            <form action="/action_page.php">


                        </div>
                        <div class="mb-3">
                            <input type="text" class="roundedInput form-control" id="userName" name="userName">
                        </div>




                        <!--Meto un footer, para que se cree una barra dividiendo los input de texto de los links de identificarse y del registro.
                Sin embargo, no cierro el formulario, para que el botón se incluya en el formulario.-->

                    </div>
                    <div class="container d-flex justify-content-center my-2">

                        <button class="btn text-light bg-danger roundedInput" type="submit">Cambiar nombre de
                            usuario</button>


                    </div>

                    </form>
                </div>

            </div>

            <div class="col-3 mt-3 p-5 mb-1 d-flex align-items-center gestionUser">
                <div class="card bg-danger text-dark roundedBorder gestionUser bg-light">
                    <div class="card-body roboto my-auto">

                        <h1 class="text-center lobster">Correo electrónico:</h1>

                        <div class="mb-3 mt-3">
                            <form action="/action_page.php">


                        </div>
                        <div class="mb-3">
                            <input type="Email" class="roundedInput form-control" id="email" name="Email">
                        </div>




                        <!--Meto un footer, para que se cree una barra dividiendo los input de texto de los links de identificarse y del registro.
                Sin embargo, no cierro el formulario, para que el botón se incluya en el formulario.-->

                    </div>

                    <div class="container d-flex justify-content-center my-2">

                        <button class="btn text-light bg-danger roundedInput" type="submit">Cambiar correo
                            electrónico</button>


                    </div>



                    </form>
                </div>

            </div>

        </div>

        <div class="col-12 mt-3 p-5 mb-1 d-flex align-items-center">
                <div class="card bg-danger text-dark anchoTarjetas roundedBorder bg-light">
                    <div class="card-body roboto my-auto">
                        <h1 class="text-center lobster">Cambiar contraseña:</h1>

                        <div class="mb-3 mt-3">
                            <form action="/action_page.php">


                        </div>
                        <div class="mb-3">
                            <p>Contraseña actual:<p>
                            <input type="password" class="roundedInput form-control" id="conAct" name="conAct">
                        </div>
                        <div class="mb-3">
                            <p>Contraseña nueva:<p>
                            <input type="password" class="roundedInput form-control" id="conNue" name="conNue">
                        </div>
                        <div class="mb-3">
                            <p>Repetir contraseña:<p>
                            <input type="password" class="roundedInput form-control" id="conRep" name="conRep">
                        </div>




                        <!--Meto un footer, para que se cree una barra dividiendo los input de texto de los links de identificarse y del registro.
                Sin embargo, no cierro el formulario, para que el botón se incluya en el formulario.-->

                    </div>
                    <div class="container d-flex justify-content-center my-2">

                        <button class="btn text-light bg-danger roundedInput" type="submit">Cambiar contraseña</button>


                    </div>

                    </form>
                </div>

            </div>
    </div>

    </div>
    </main>

    <br>
    <br>
    <br>

    <?php include("../includes/footer.php"); ?>






</body>

</html>