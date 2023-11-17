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
        <!--PC menu card------------------------------------------------>
        <article class="d-lg-block d-none">
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

        <!--small devices menu------------------------------------------------>
        <article class="container-fluid">
            <div class="dropdown row d-lg-none d-block">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Carta
                </button>
                <ul class="dropdown-menu bg-info text-center text-light" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item text-light p-2" href="#">Entrantes</a></li>
                    <li><a class="dropdown-item text-light p-2" href="#">Ensaladas</a></li>
                    <li><a class="dropdown-item text-light p-2" href="#">Pizzas</a></li>
                    <li><a class="dropdown-item text-light p-2" href="#">Pastas</a></li>
                    <li><a class="dropdown-item text-light p-2" href="#">Carnes</a></li>
                    <li><a class="dropdown-item text-light p-2" href="#">Postres</a></li>
                </ul>
            </div>
        </article>

        <!--Card content------------------------------------------------>

        <article class="container-fluid bg-primary">
            <div class="row p-4 justify-content-around">

                <div class="row bg-info col-3 m-2">
                    <div class="col-8 p-3">
                        <h5 class="card-title">Plato</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <img class="col-3 rounded-right m-0 p-0" src="../img/backgrounds/aboutUsIndex.png" alt="Card image cap">
                </div>

                <div class="row bg-info col-3 m-2 p-0">
                    <div class="col-8 p-3">
                        <h5 class="card-title">Plato</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <img class="col-3" src="..." alt="Card image cap">
                </div>

                <div class="row bg-info col-3 m-2">
                    <div class="col-8 p-3">
                        <h5 class="card-title">Plato</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <img class="col-3" src="..." alt="Card image cap">
                </div>

                <div class="row bg-info col-3 m-2">
                    <div class="col-8 p-3">
                        <h5 class="card-title">Plato</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <img class="col-3" src="..." alt="Card image cap">
                </div>

            </div>
        </article>
    </section>


    <?php include("../includes/footer.php"); ?>
</body>

</html>