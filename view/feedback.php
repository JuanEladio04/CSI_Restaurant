<?php include("../includes/a_config.php"); ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina opiniones del restaurante">
    <meta name="author" content="CSI">
    <title>Opiniones</title>

    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="opinion">
    <?php include("../includes/navigation.php"); ?>

    <div class="container-fluid crearOpiniones">
        <div class="titulo">
            <h1 class="lobster">DEJA TU OPINIÓN</h1>
        </div>
        <div class="contenedor">
            <div class="texto column p-5">
                <div class="col-6 tu-opinin lobster">Tu opinión</div>

                <div class="col-6 en-nuestro-restaurante-container">

                    <p class="en-nuestro-restaurante roboto">
                        En nuestro restaurante tu voz importa.
                    </p>

                    <p class="en-nuestro-restaurante roboto">¿Quieres hablar?</p>

                    <p class="en-nuestro-restaurante roboto">
                        Deja tu opinión a continuación:
                    </p>

                </div>
                <div class="comentarybox">
                    <div class="comment1">
                        <div class="arriba">
                            <img class="vector-icon" alt="" src="./public/undefined20.png" />

                            <div class="username">Username</div>
                            <div class="stars">
                                <img class="estrella-3-selecionada" alt="" src="./public/undefined21.png" />

                                <img class="estrella-3-selecionada" alt="" src="./public/undefined22.png" />

                                <img class="estrella-3-selecionada" alt="" src="./public/undefined23.png" />

                                <img class="estrella-3-selecionada" alt="" src="./public/undefined24.png" />

                                <img class="estrella-3-selecionada" alt="" src="./public/undefined25.png" />
                            </div>
                        </div>
                        <div class="rectangle-parent7">
                            <div class="frame-child14"></div>
                            <div class="escriba-su-comentario">Escriba su comentario</div>
                        </div>
                    </div>
                </div>
                <div class="opinionUsuario">

                </div>
            </div>
        </div>
</body>

</html>