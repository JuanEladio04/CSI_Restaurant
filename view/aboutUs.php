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

    <div class="container-fluid">

        <section class="row mb-5 bg-danger">
            <article class="articuloSN col p-5">
                <!-- Section with welcome message -->
                <p class="mt-3">Bienvenido a Luna della Rosa, donde la auténtica pasión italiana se fusiona con la
                    elegancia y el encanto en cada plato. En nuestro restaurante, nos enorgullece ofrecer una
                    experiencia culinaria única que transporta a nuestros comensales a las pintorescas calles de Italia,
                    donde la comida es una celebración de sabores frescos y auténticos. En Luna di Rosa, nuestra
                    historia es tan rica como nuestros sabores. Fundado por amantes de la cocina italiana con décadas de
                    experiencia, nuestro restaurante nació de la creencia apasionada de que la verdadera esencia de
                    Italia puede ser transmitida a través de cada bocado.</p>
            </article>
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
            <article class="col-lg-6 position-relative videoAU">
                <!-- Section with a youtube video -->
                <iframe class="w-100 h-100 border-0" src="https://www.youtube.com/embed/4pg7EaYo7hM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                <!-- Video Controls -->
                <div id="video-controls">
                    <button type="button" id="play-pause">Play</button>
                    <input type="range" id="seek-bar" value="0">
                    <button type="button" id="mute">Mute</button>
                    <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
                    <button type="button" id="full-screen">Full-Screen</button>
                </div>
            </article>

        </section>



        <section class="row mb-5 bg-danger">
            <article class="col articuloSN">
                <!-- Section with information about chefs -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                        <!-- Image of the chef -->
                        <img class="img-fluid" src="..\img\stockImages\aboutUs_StockImages\aboutUsCocineros.png"
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