<?php
include("../includes/a_config.php");
require_once("../controller/sessionController.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../incNoludes/navigation.php"); ?>
    <?php include("../includes/design-top.php"); ?>
    

    <!--Carta-->
    <section class=" cardMenu">
        <!--Card Menu------------------------------------------------>

        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="mainNav">

            <div class="container-fluid contenido">
                <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#cardResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse collapse col-10 todo" id="cardResponsive">
                    <ul class="navbar-nav w-100 lobster menu">

                        <li class="nav-item  w-100 h-100 text-center  ">
                            <a class="nav-link text-light " href="?tipo=Entrantes">Entrantes</a>
                        </li>

                        <li class="nav-item  w-100 h-100 text-center ">
                            <a class="nav-link text-light" href="?tipo=Ensaladas">Ensaladas</a>
                        </li>

                        <li class="nav-item  w-100 h-100 text-center ">
                            <a class="nav-link text-light" href="?tipo=Pizzas">Pizzas</a>
                        </li>

                        <li class="nav-item  w-100 h-100 text-center ">
                            <a class="nav-link text-light" href="?tipo=Pastas">Pastas</a>
                        </li>

                        <li class="nav-item  w-100 h-100 text-center ">
                            <a class="nav-link text-light" href="?tipo=Carnes">Carnes</a>
                        </li>

                        <li class="nav-item  w-100 h-100 text-center  ">
                            <a class="nav-link text-light " href="?tipo=Postres">Postres</a>
                        </li>
                        <li class="nav-item  w-100 h-100 text-center  ">
                            <a class="nav-link text-light " href="?tipo=Bebidas">Bebida</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!--Card content----------------------------------------------->

        <article class="container-fluid bg-success">
            <div class="row p-5 justify-content-around">

                <?php
                if(isset($_GET['tipo'])){
                    $tipo = $_GET['tipo'];
                }
                else{
                    $tipo = 'Entrantes';
                }
                $platos = platoController::getPlatoByTipo($tipo);

                for ($i = 0; $i < count($platos); $i++) {
                ?>
                    <div class="container-fluid col-lg-3 col-sm-12 m-2 cardItem">
                        <div class="row bg-secondary">
                            <div class="col-lg-8 col-sm-12 p-2">
                                <h3><?php echo $platos[$i]->nombre; ?></h3>
                                <p><?php echo $platos[$i]->descripcion; ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-12 text-center p-0">
                                <img src="<?php echo "/" . $platos[$i]->imagen; ?>" alt="Imagen de: <?php echo $platos[$i]->nombre; ?>">
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </article>
    </section>
    

    <script src="../js/cardItem.js"></script>


    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/cookies.php"); ?>
</body>

</html>