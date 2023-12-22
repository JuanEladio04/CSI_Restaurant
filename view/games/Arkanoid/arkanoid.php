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
                    <span class="material-symbols-outlined">
                        arrow_upward_alt
                    </span>
                    <span class="material-symbols-outlined">
                        arrow_downward_alt
                    </span>
                </p>
                <p>
                    Sacar la pelota:
                </p>
                <p>
                    <span class="material-symbols-outlined">
                        space_bar
                    </span>
                </p>
            </div>
            <div id="arkanoidContainer" class="d-inline-block p-none col-12 col-lg-5"></div>
            <div class="col-12 col-lg-5 text-light my-auto">
                <p>
                    Bienvenido a Pizzanoid, donde la emoción del clásico Arkanoid se fusiona con la deliciosa
                    esencia de la cocina italiana. En este juego, tu misión es más sabrosa que nunca: rebotar
                    una deliciosa porción de pizza contra cajas de pizza dispuestas en patrones desafiantes.
                </p>

                <p>
                    Cada caja de pizza que golpees desencadenará una explosión de sabor, revelando increíbles
                    power-ups y sorpresas culinarias. ¡Prepárate para enfrentarte a niveles repletos de desafíos,
                    donde la velocidad y la estrategia son clave para convertirte en el maestro pizzero!
                </p>
            </div>
        </div>
        <script src="assets/script/arkanoid.js"></script>
    </article>

    <?php include("../../../includes/footer.php"); ?>

</body>

</html>