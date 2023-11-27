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
        <article class="bg-danger">
            <h1 class="p-5 text-light">
                ¡Bienvenidos a nuestra sección de minijuegos! Aquí encontrarás todo lo que necesitas para sumergirte en mundos virtuales. Deleitate con los los diferentes minijuegos clásicos de los que disponemos en nuestra página.
            </h1>
        </article>

        <article class="row justify-content-around">

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Game tittle</h5>
                    <p class="card-text">Game description</p>
                </div>
            </div>
            
            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Game tittle</h5>
                    <p class="card-text">Game description</p>
                </div>
            </div>

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Game tittle</h5>
                    <p class="card-text">Game description</p>
                </div>
            </div>

            <div class="card col-lg-2 col-10 my-5">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Game tittle</h5>
                    <p class="card-text">Game description</p>
                </div>
            </div>

        </article>

    </section>

    <?php include("../includes/footer.php"); ?>

</body>

</html>