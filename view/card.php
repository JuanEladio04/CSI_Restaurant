<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/design-top.php"); ?>

    <!--Carta-->
    <section class=" cardMenu">
        <h2 class="d-none">Menú de la carta</h2>
        <!--PC menu card-->
        <article>
            <div class="container-fluid">
                <div class="row bg-danger text-light justify-content-around">
                    <div class="col-2 menuSection">
                        <h3>
                            Entrantes
                        </h3>
                    </div>
                    <div class="col-2 menuSection">
                        <h3>
                            Ensaladas
                        </h3>
                    </div>
                    <div class="col-2 menuSection">
                        <h3>
                            Pizzas
                        </h3>
                    </div>
                    <div class="col-2 menuSection">
                        <h3>
                            Pastas
                        </h3>
                    </div>
                    <div class="col-2 menuSection">
                        <h3>
                            Carnes
                        </h3>
                    </div>
                    <div class="col-2 menuSection">
                        <h3>
                            Postres
                        </h3>
                    </div>
                </div>
            </div>
        </article>

    </section>


    <?php include("../includes/footer.php"); ?>
</body>

</html>