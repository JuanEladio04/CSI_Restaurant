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
    <!-- Including navigation bar -->
    <?php include("../includes/design-top.php"); ?>
    <!-- Including superior design file -->
    <!--CF2: ¿Por qué usas aquí container-fluid y termsAndConditios.php usas container?-->
    <div class="container-fluid">

        <section class="row articuloSN p-5 mb-5 bg-danger">
            <!-- Section with welcome message -->
            <p class="mt-3">Bienvenido a Luna della Rosa, donde la auténtica pasión italiana se fusiona con la
                elegancia y el encanto en cada plato. En nuestro restaurante, nos enorgullece ofrecer una
                experiencia culinaria única que transporta a nuestros comensales a las pintorescas calles de Italia,
                donde la comida es una celebración de sabores frescos y auténticos. En Luna di Rosa, nuestra
                historia es tan rica como nuestros sabores. Fundado por amantes de la cocina italiana con décadas de
                experiencia, nuestro restaurante nació de la creencia apasionada de que la verdadera esencia de
                Italia puede ser transmitida a través de cada bocado.
            </p>
        </section>


        <section class="row mb-5 bg-danger flex-lg-row">
            <article class="articuloSN col-lg-6 p-5">
                <!-- Section with a short description -->
                <h1>Un Vistazo</h1>
                <p class="mt-5 d-none d-lg-block">
                    Aquí en Luna Della Rossa, tenemos un sueño. Consiste en deleitar a nuestros clientes con la comida
                    más exquisita que hayan probado jamás. Elaboramos meticulosamente todos nuestros platos para
                    asegurar que su calidad sea nada menos que excelente.
                </p>
            </article>
            <article class="col-lg-6 justify-content-end">
                <!-- Video Player START -->
                <div class="videoplayer" id="player-9">
                    <div class="ratio ratio-16x9 bg-dark">
                        <video class="video"
                            src="..\videos\videoPizza.mp4"></video>
                    </div>
                    <div class="controls">
                        <button class="btn btn-lg btn-video-playpause" data-bs-toggle="tooltip" title="Play Video"
                            type="button"><i class="bi bi-play-fill text-dark"><img src="..\img\logos\tocar.png"/></i><i
                                class="bi bi-pause-fill d-none text-dark"><img src="..\img\logos\pausa.png"/></i></button>
                        <div class="p-0 w-100">
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <button class="btn btn-lg text-dark btn-video-pip" title="Play picture in picture"><img src="..\img\logos\minimizar.png"/><i
                                class="bi bi-pip"></i></button><button class="btn btn-lg btn-video-fullscreen p-1"><i
                                class="bi bi-arrows-fullscreen"><img src="..\img\logos\pantalla-completa.png"/></i></button>
                        <div class="dropup">
                            <button class="btn btn-lg" data-bs-toggle="dropdown" title="Volume"><i
                                    class="bi bi-volume-mute-fill"><img src="..\img\logos\audio.png"/></i></button>
                            <div class="dropdown-menu dropdown-menu-end dropup-volume">
                                <input class="form-range form-range-volume" type="range">
                            </div>
                        </div>
                        <div class="dropup">
                            <button class="btn btn-lg" data-bs-toggle="dropdown" title="More..."><img src="..\img\logos\about.png"/><i
                                    class="bi bi-three-dots-vertical"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i class="bi bi-info-circle-fill"></i> About</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video Player END -->
            </article>
            <script src="..\js\videoplayer.js"></script>
            <script src="..\js\videoFunction.js"></script>
        </section>



        <section class="row mb-5 bg-danger">
            <article class="col articuloSN">
                <!-- Section with information about chefs -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                        <!-- Image of the chef -->
                        <img class="img-fluid" src="..\img\stockImages\aboutUs_StockImages\cocineroFoto.png"
                            style="width: 100%;" frameborder="0">
                    </div>
                    <div class="col-lg-6 p-5">
                        <!-- Details about the chefs-->
                        <h1>Nuestros Chefs</h1>
                        <p class="mt-5">
                            En nuestro restaurante, contamos con los chefs más exitosos y experimentados de Venecia,
                            capaces de crear una variedad de platos en el más puro estilo italiano.
                        </p>
                    </div>
                </div>
            </article>
        </section>

    </div>
    <?php include("../includes/footer.php"); ?>
    <!-- Including footer -->
</body>

</html>