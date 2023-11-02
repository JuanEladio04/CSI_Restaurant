<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-primary">

    <?php include("../includes/navigation.php"); ?>


    <div class="row">
        <div class="col-4"></div>

        <!--Div en el que va el formulario y el contenido.-->

        <div class="col-4 d-flex flex-column align-items-center">

            <!--Foto del logo del restaurante, que se queda arriba del formulario.-->

            <!--Meto el formulario en una carta, en el "header" pongo un texto para especificar el apartado.-->

            <div class="container mt-5 pt-5 d-flex flex-column align-items-center justify-content-center">
                <div class="col-3 p-5 mb-1 d-flex align-items-center gestionUser">
                    <div class="card bg-danger text-dark  roundedBorder  bg-light">
                        <div class="card-body roboto my-auto">
                            <h1 class="text-center lobster">Nombre de usuario</h1>

                            <div class="mb-3 mt-3">
                                <form action="/action_page.php">


                            </div>
                            <div class="mb-3">
                                <input type="text" class="roundedInput form-control" id="userName" name="userName">
                            </div>
                            <div class="container d-flex justify-content-center my-2">

                                <button class="btn text-light bg-danger roundedInput" type="submit">Cambiar nombre de
                                    usuario</button>


                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container  d-flex flex-column align-items-center justify-content-center">
                <div class="col-3 p-5 mb-1 d-flex align-items-center gestionUser">
                    <div class="card bg-danger text-dark  roundedBorder  bg-light">
                        <div class="card-body roboto my-auto">
                            <h1 class="text-center lobster">Correo electrónico</h1>

                            <div class="mb-3">
                                <form action="/action_page.php">


                            </div>
                            <div class="mb-3">
                                <input type="text" class="roundedInput form-control" id="userName" name="userName">
                            </div>
                            <div class="container d-flex justify-content-center my-2">

                                <button class="btn text-light bg-danger roundedInput" type="submit">Cambiar correo
                                    electrónico</button>


                            </div>

                        </div>

                    </div>
                </div>



            </div>

            <div class="container  d-flex flex-column align-items-center justify-content-center">
                <div class="col-3 p-5 mb-1 d-flex align-items-center gestionUser">
                    <div class="card bg-danger text-dark  roundedBorder  bg-light">
                        <div class="card-body roboto my-auto">
                            <h1 class="text-center lobster">Cambiar contraseña</h1>

                            <div class="mb-3">
                                <form action="/action_page.php">


                            </div>
                            <div class="mb-3">
                                <p class="lobster">Contraseña actual:
                                <p>
                                    <input type="password" class="roundedInput form-control" id="conAct" name="conAct">
                            </div>
                            <div class="mb-3">
                                <p class="lobster">Contraseña actual:
                                <p>
                                    <input type="password" class="roundedInput form-control" id="conAct" name="conAct">
                            </div>
                            <div class="mb-3">
                                <p class="lobster">Contraseña actual:
                                <p>
                                    <input type="password" class="roundedInput form-control" id="conAct" name="conAct">
                            </div>
                            <div class="container d-flex justify-content-center my-2">

                                <button class="btn text-light bg-danger roundedInput" type="submit">Cambiar correo
                                    electrónico</button>


                            </div>

                        </div>

                    </div>
                </div>



            </div>


        </div>
        <div class="col-4"></div>
    </div>
    </main>

    <br>
    <br>
    <br>

    <?php include("../includes/footer.php"); ?>







</body>

</html>