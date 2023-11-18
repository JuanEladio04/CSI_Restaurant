<!-- Some parts of the code have been written using AI. -->
<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body class="bg-primary" id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <main class="container-fluid d-flex justify-content-center">
        <!-- Container for adding a new dish -->
        <div class="row addPlate roundedBorder">
            <!-- Title for the dish addition section -->
            <div class="col-12 titulo">
                <h1>Añadir plato</h1>
            </div>

            <!-- Form for adding a new dish -->
            <form>
                <!-- Row for dish name input -->
                <div class="row centered">
                    <div class="col-4">
                        <p>Nombre del plato</p>
                    </div>
                    <!-- Input field for entering the dish name -->
                    <div class="col-8 inputCentered">
                        <input type="text" class="roundedInput form-control" id="plato" name="plato">
                    </div>
                </div>

                <!-- Row for dish description input -->
                <div class="row centered description">
                    <div class="col">
                        Descripción del plato
                    </div>
                    <!-- Textarea for entering the dish description -->
                    <div class="col inputCentered">
                        <textarea class="roundedInput" id="foto" rows="4"></textarea>
                    </div>
                </div>

                <!-- Row for changing the dish photo -->
                <div class="row centered description">
                    <div class="col">
                        Imagen del plato
                    </div>
                    <div class="container">
                        <!-- Button to change the dish photo -->
                        <button class="btn text-light bg-danger roundedInput textNoWrap" type="submit">
                            Cambiar plato
                        </button>
                    </div>
                </div>

                <!-- Row for selecting the dish section -->
                <div class="row centered">
                    <div class="col-4">
                        Section
                    </div>
                    <!-- Dropdown menu for selecting the dish section -->
                    <div class="col-8 inputCentered">
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

            <!-- Button to submit the form and create the dish -->
            <button type="submit" value="" class="btn btn-danger p-3">
                Crear plato
            </button>

        </div>

    </main>

    <!-- Footer section -->
    <footer>
        <?php include("../includes/footer.php"); ?>
    </footer>

</body>

</html>