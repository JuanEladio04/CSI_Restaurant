<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>

    <?php include("../includes/design-top.php"); ?>

    <section>
        <h2 class="d-none">Formulario de reservas</h2>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menú desplegable
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Opción 1</a>
                <a class="dropdown-item" href="#">Opción 2</a>
                <a class="dropdown-item" href="#">Opción 3</a>
            </div>
        </div>

    </section>

    <?php include("../includes/footer.php"); ?>

</body>

</html>