<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body class="greyBg">

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 d-flex flex-column align-items-center">

            <img src="/img/logos/BigLogo.png" width="300px">


            <div class="container mt-5 pt-5 d-flex flex-column align-items-center">
                <div class="card bg-danger text-light roundedBorder" style="width:500px;">
                    <div class="card-header">
                        <h1 class="text-center lobster">Crear cuenta</h1>
                    </div>
                    <div class="card-body roboto">
                        <div class="mb-3 mt-3">
                            <form action="/action_page.php">

                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="FirstN" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="LastN">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="LastN" class="form-label">Apellidos</label>
                                        <input type="text" class="form-control" name="LastN">
                                    </div>
                                </div>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Correo electrónico</label>
                            <input type="Email" class="form-control" id="pwd" name="Email">
                        </div>

                        <div class="col mb-3">
                            <label for="Password1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="col mb-3">
                            <label for="Passwordw" class="form-label">Confirmar contraseña</label>
                            <input type="password" class="form-control" name="Password1">
                        </div>
                        <input type="checkbox" name="mayor" value="mayorEdad" class="rounded-checkbox"> <label
                            for="mayor">Soy mayor de 18</label>
                        <br>
                        <input type="checkbox" name="acepto" value="Aceptar términos" class="rounded-checkbox"> <label
                            for="acepto">Acepto términos y condiciones</label>


                        <div class="d-grid mt-3">
                            <button type="button" class="btn btn-primary btn-block roundedButton roboto">Crear
                                cuenta</button>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="login.php" class="nav-link text-light">Ya tengo cuenta</a>
                    </div>

                    </form>
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

    <?php include("includes/footer.php"); ?>

</body>

</html>