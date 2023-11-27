<?php include("../includes/a_config.php"); ?>
<!-- Including configuration file -->

<!doctype html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    <!-- Including head tago contents -->
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/design-top.php"); ?>

    <section class="container-fluid bg-primary text-center my-5">
        <article class="bg-danger row">
            <h1 class="p-5 text-light">
                ¡Bienvenidos a nuestra sección de minijuegos! Aquí encontrarás todo lo que necesitas para sumergirte en mundos virtuales. Deleitate con los los diferentes minijuegos clásicos de los que disponemos en nuestra página.
            </h1>
        </article>

        <article class="row justify-content-around">

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top" src="../img/games/arkanoidImage.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Arkanoid</h5>
                    <p class="card-text">Arkanoid es un juego de romper ladrillos con una bola y una base que se mueven. Debes intentar romper todos los ladrillos sin que la bola caiga. ¡Juega gratis ahora!</p>
                    <a href="view\games.php" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
                </div>
            </div>
            
            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top" src="../img/games/spaceInvaders.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Space Invaders</h5>
                    <p class="card-text">Space Invaders es un juego de arcade clásico que consiste en disparar a los alienígenas que intentan invadir la Tierra. Salva la tierra jugando aqui mismo.</p>
                    <a href="view\games.php" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
                </div>
            </div>

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top" src="../img/games/dinousaurGame.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dinosaur Game</h5>
                    <p class="card-text">Dinosaur Game o Chrome Dino es un juego de saltar y esquivar obstaculos. Es divertido y simple. Juega este divertidisimo juego inspirado en el famoso juego de Google Chorme.</p>
                    <a href="view\games.php" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
                </div>
            </div>

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Food Drop</h5>
                    <p class="card-text">Este juego consiste en instentar recoger toda la comida que puedas mientras esta cae a la par que esquivas objetos no comestibles. ¡Juega este divertido juego y come tanto como puedas!</p>
                    <a href="view\games.php" class="btn btn-danger rounded-2">¡Jugar ahora!</a>
                </div>
            </div>

        </article>

    </section>

    <?php include("../includes/footer.php"); ?>

</body>

</html>