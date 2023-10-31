<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="greyBg">

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 d-flex flex-column align-items-center">

            <img src="../img/logos/BigLogo.png" width="300px">


            <div class="container mt-5 pt-5 d-flex flex-column align-items-center justify-content-center">
                <div class="card bg-danger text-light roundedBorder divUserForm" style="width:500px;">
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





                    </div>
                    <div class="card-footer text-start">
                        <a href="login.php" class="nav-link text-light">Identificarse</a>
                        <div class="row">
                            <div class="col-6">
                                <a href="register.php" class="nav-link text-light">No estoy registrado</a>
                            </div>
                            <div class="col-6 text-center">
                                <button type="button" class="btn btn-primary roundedInput roboto">Entrar</Input>
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
    </main>

    <br>
    <br>
    <br>

    <?php include("../includes/footer.php"); ?>

</body>

</html>