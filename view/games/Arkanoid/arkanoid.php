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
    <article class="container-fluid bg-danger justify-content-around p-none">
        <div class="row mx-auto">
            <div class="col-3 text-light">
                <h2>
                    Controles
                </h2>
                <p>
                    Movimiento: teclas de dirección
                </p>
                <p>
                    Sacar l pelota: espacio
                </p>
            </div>
            <div class="col-6 text-center">
                <div id="arkanoidContainer" class="d-inline-block p-none"></div>
            </div>
            <div class="col-3"></div>
        </div>
        <script src="assets/script/arkanoid.js"></script>
    </article>

    <?php include("../../../includes/footer.php"); ?>

</body>

</html>