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
            </div>
        </div>
        <script src="assets/script/arkanoid.js"></script>
    </article>

    <?php include("../../../includes/footer.php"); ?>

</body>

</html>