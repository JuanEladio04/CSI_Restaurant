<?php
require_once('../controller/sessionController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../../../includes/head-tag-contents.php"); ?>
    <script src="https://unpkg.com/konva@9/konva.min.js"></script>
</head>

<body class="bg-primary text-center">
    <?php include("../../../includes/navigation.php"); ?>

    <img src="../../../img/games/pizzanoid/Logo.png" alt="Pizzanoid game logo" class="w-50 my-3">

    <!-- Videogame -->
    <article class="container p-5">
        <div class="row bg-danger">
            <div class="col-12 col-lg-2 text-light my-auto">
                <h2>
                    Controles
                </h2>
                <p>
                    Movimiento:
                </p>
                <p>
                    <span class="material-symbols-outlined">
                        arrow_left_alt
                    </span>
                    <span class="material-symbols-outlined">
                        arrow_right_alt
                    </span>
                </p>
                <p>
                    Lanzar la pelota:
                </p>
                <p>
                    <span class="material-symbols-outlined">
                        space_bar
                    </span>
                </p>
            </div>
            <div id="arkanoidContainer" class="d-inline-block p-none col-12 col-lg-5"></div>
            <div class="col-12 col-lg-5 text-light my-auto" p-5>
                <p>
                    "Pizzanoid" es un emocionante juego de estilo arcade inspirado en el clásico juego de romper ladrillos, pero con un toque único y delicioso. El objetivo principal del juego es destruir todos los ladrillos en la pantalla utilizando una pelota especial de pizza, mientras te defiendes con una nave espacial que funciona como paleta.
                </p>
                <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/" class="mt-auto"><span property="dct:title">Pizzanoid</span> by <span property="cc:attributionName">Juan Eladio</span> is licensed under <a href="http://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"></a></p>
            </div>
        </div>
        <script src="assets/script/arkanoid.js"></script>
    </article>
    <?php include("../../../includes/footer.php"); ?>

</body>

</html>