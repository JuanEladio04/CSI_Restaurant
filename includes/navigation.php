<script src="../js/navbar.js"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    <div class="container-fluid contenido">
        <div class=" todo1">
            <a class="navbar-brand" href="/index.php"><img src="/img/logos/SmallLogo.png" alt="Logo"></a>
        </div>

        <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon "></span>

        </button>

        <div class="navbar-collapse collapse  todo" id="navbarResponsive">

            <ul class="navbar-nav w-100 menu">

                <li class="nav-item  w-100  text-center  <?php if ($CURRENT_PAGE == "reserve") { ?>active<?php } ?>">
                    <a class="nav-link " href="/view/reserve.php">Reserva</a>
                </li>

                <li class="nav-item  w-100  text-center <?php if ($CURRENT_PAGE == "card") { ?>active<?php } ?>">
                    <a class="nav-link" href="/view/card.php">Carta</a>
                </li>

                <li class="nav-item  w-100  text-center <?php if ($CURRENT_PAGE == "aboutus") { ?>active<?php } ?>">
                    <a class="nav-link" id="invisible" href="/view/aboutUs.php">Sobre
                        <!--<span id="invisible">_</span>--> Nosotros</a>
                </li>

                <li class="nav-item  w-100  text-center <?php if ($CURRENT_PAGE == "offers") { ?>active<?php } ?>">
                    <a class="nav-link" href="/view/offers.php">Ofertas</a>
                </li>

                <li class="nav-item  w-100  text-center <?php if ($CURRENT_PAGE == "feedback") { ?>active<?php } ?>">
                    <a class="nav-link" href="/view/feedback.php">Opiniones</a>
                </li>

                <li class="nav-item  w-100  text-center  <?php if ($CURRENT_PAGE == "games") { ?>active<?php } ?>">
                    <a class="nav-link " href="/view/games.php">Minijuegos</a>
                </li>

                <li class="nav-item  w-100  text-center desplegable <?php if ($CURRENT_PAGE == "userGestion") { ?>active<?php } ?>"
                    id="desplegable">
                    <?php
                    if (isset($_SESSION["usuario"])) {
                        $usuario = $_SESSION['usuario'];
                        ?>
                        <div class="dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="mostrar()">
                                <img src="../<?php echo $usuario->imagen; ?>" width="70px" alt="Foto Perfil"
                                    class="rounded-circle">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item nav-link" href="../view/userGestion.php">
                                    <?php echo $usuario->nombre; ?>
                                </a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Launch demo modal
                                </button>

                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <a class="nav-link " href="/view/login.php">Identificarse</a>
                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- <div class="salir">
    <div class="col-12 tituloSalir row">
        <img src="../img/logos/SmallLogo.png">
        <h2>¿Desea Salir?</h2>
    </div>
    <div class="col-12 botonSalir">
        <button type="button" class="btn btn-outline-danger"><a href="../view/cerrarSesion.php">Salir</a></button>
        <button type="button" class="btn btn-outline-danger" onclick="mostrarSalir()">Volver</button>
    </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-item-center justify-content-center">
            <img src="../<?php echo $usuario->imagen; ?>" width="150px" alt="Foto Perfil" class="rounded-circle">
            </div>
            <div class="modal-body">
                <h5 class="modal-title d-flex align-item-center justify-content-center" id="exampleModalLabel">¿Deseas salir <?php echo $usuario->nombre; ?>?</h5>
            </div>
            <div class="modal-footer">
            <a href="../view/cerrarSesion.php" class="w-100"><button type="button" class="btn btn-outline-danger w-100">Salir</button></a>
            <button type="button" class="btn btn-outline-danger w-100"data-bs-dismiss="modal">Volver</button>
            </div>
        </div>
    </div>
</div>