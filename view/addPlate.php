<!--Algunas partes del código han sido escritas mediante IA.-->
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-primary" id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <main class="container-fluid d-flex justify-content-center">
        <div class="row addPlate roundedBorder">
            <div class="col-12 titulo">
                <h1>Añadir plato</h1>
            </div>
            <form>
                <div class="row centrado">
                    <div class="col-4">
                        <p>Nombre del plato</p>
                    </div>
                    <div class="col-8 inputCentrado">
                        <input type="text" class="roundedInput form-control" id="plato" name="plato">
                    </div>
                </div>

                <div class="row centrado descripcion">
                    <div class="col">
                        Descripción del plato:
                    </div>
                    <div class="col inputCentrado">
                        <textarea class="roundedInput" id="foto" rows="4"></textarea>
                    </div>
                </div>

                <div class="row centrado descripcion">
                    <div class="col">
                        Imagen del plato:
                    </div>
                    <div class="container">
                        <button class="btn text-light bg-danger roundedInput textoNoWrap" type="submit">
                            Cambiar foto
                        </button>
                    </div>

                    <div class="row centrado">
                        <div class="col-4">
                            Sección
                        </div>
                        <div class="col-8 inputCentrado">
                            <select class="" name="seccion">
                                <option value="ensalada">Ensaladas</option>
                                <option value="pizza">Pizza</option>
                                <option value="pastas">Pastas</option>
                                <option value="postres">Postres</option>
                                <option value="carnes">Carnes</option>
                            </select>
                        </div>
                    </div>

            </form>

            <button type="submit" value="" class="btn btn-danger p-3">
                    Crear plato
                </button>

        </div>

    </main>

    <footer>
        <?php include("../includes/footer.php"); ?>
    </footer>

</body>

</html>