    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

        <div class="container-fluid contenido">
            <div class=" todo1">
                <a class="navbar-brand" href="../index.php"><img src="../img/logos/SmallLogo.png" alt="Logo"></a>
            </div>

            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon "></span>

            </button>

            <div class="navbar-collapse collapse  todo" id="navbarResponsive">

                <ul class="navbar-nav w-100 menu">

                    <li class="nav-item  w-100  text-center  <?php if ($CURRENT_PAGE == "reserve") {?>active<?php }?>">
                        <a class="nav-link " href="../view/reserve.php">Reserva</a>
                    </li>

                    <li class="nav-item  w-100  text-center <?php if ($CURRENT_PAGE == "card") {?>active<?php }?>">
                        <a class="nav-link" href="../view/card.php">Carta</a>
                    </li>

                    <li class="nav-item  w-100  text-center <?php if ($CURRENT_PAGE == "aboutus") {?>active<?php }?>">
                        <a class="nav-link" id="invisible" href="../view/aboutUs.php">Sobre <!--<span id="invisible">_</span>--> Nosotros</a>
                    </li>

                    <li class="nav-item  w-100  text-center <?php if ($CURRENT_PAGE == "offers") {?>active<?php }?>">
                        <a class="nav-link" href="../view/offers.php">Ofertas</a>
                    </li>

                    <li class="nav-item  w-100  text-center <?php if ($CURRENT_PAGE == "feedback") {?>active<?php }?>">
                        <a class="nav-link" href="../view/feedback.php">Opiniones</a>
                    </li>

                    <li class="nav-item  w-100  text-center  <?php if ($CURRENT_PAGE == "games") {?>active<?php }?>">
                        <a class="nav-link " href="../view/games.php">Minijuegos</a>
                    </li>

                    <li class="nav-item  w-100  text-center  <?php if ($CURRENT_PAGE == "login") {?>active<?php }?>">
                        <a class="nav-link " href="../view/login.php">Identificarse</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>