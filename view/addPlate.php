<!--Algunas partes del código han sido escritas mediante IA.-->
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>
<!--CF2: El diseño responsivo de esta página no ha quedado bien-->
<body class="bg-primary" id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/cookies.php"); ?>
    <main class="container-fluid d-flex justify-content-center">
        <!-- Container for adding a new dish -->
        <div class="row addPlate roundedBorder">
            <!-- Title for the dish addition section -->
            <div class="col-12 titulo">
                <h1>Añadir plato</h1>
            </div>
            <form>
                <!-- Form for adding a new dish -->
                <div class="row centrado">
                    <!-- Row for dish name input -->
                    <div class="col-4">
                        <p>Nombre del plato</p>
                    </div>
                    <!-- Input field for entering the dish name -->
                    <div class="col-8 inputCentrado">
                        <input type="text" class="roundedInput form-control" id="plato" name="plato">
                    </div>
                </div>
                <!-- Row for dish description input -->
                <div class="row centrado descripcion">
                    <div class="col">
                        <p>Descripción del plato:</p>
                    </div>
                    <!-- Textarea for entering the dish description -->
                    <div class="col inputCentrado">
                        <textarea class="roundedInput" id="foto" rows="4"></textarea>
                    </div>
                </div>
                <!-- Row for changing the dish photo -->
                <div class="row centrado descripcion">
                    <div class="col">
                        <p>Imagen del plato:</p>
                    </div>
                    <div class="container">
                        <button class="btn text-light bg-danger roundedInput textoNoWrap" type="submit">
                            Cambiar foto
                        </button>
                    </div>
                    <!-- Button to change the dish photo -->
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
                                <option value="entrantes">Entrantes</option>

                            </select>
                        </div>
                    </div>
                    <!-- Button to submit the form and create the dish -->
                    <button type="submit" value="" class="btn btn-danger p-3">
                        Crear plato
                    </button>

            </form>



        </div>

    </main>
    <!-- Footer section -->
    <footer>
        <?php include("../includes/footer.php"); ?>
    </footer>

</body>

</html>