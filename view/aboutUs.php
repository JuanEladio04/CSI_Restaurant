<?php include("../includes/a_config.php"); ?>
<!doctype html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/design-top.php"); ?>

    <div class="container-fluid">

        <section class="row mb-5 bg-danger">
            <article class="articulo col p-5">
                <p class="mt-3">Bienvenido a Luna della Rosa, donde la auténtica pasión italiana se fusiona con la
                    elegancia y el encanto en cada plato. En nuestro restaurante, nos enorgullece ofrecer una
                    experiencia culinaria única que transporta a nuestros comensales a las pintorescas calles de Italia,
                    donde la comida es una celebración de sabores frescos y auténticos.
                    En Luna di Rosa, nuestra historia es tan rica como nuestros sabores. Fundado por amantes de la
                    cocina italiana con décadas de experiencia, nuestro restaurante nació de la creencia apasionada de
                    que la verdadera esencia de Italia puede ser transmitida a través de cada bocado.
                </p>
            </article>
        </section>


        <section class="row mb-5 bg-danger flex-lg-row ">
            <article class="articulo col-lg-6 p-5">
                <h1>Un pequeño vistazo</h1>
                <p class="mt-5 d-none d-lg-block">
                    Aquí en Luna Della Rossa tenemos un sueño. El cual, consiste en deleitar a nuestros clientes con la
                    comida más exquisita que hayan podido saborear.
                    Todos nuestros platos los hacemos al dedillo para asegurarnos de que su calidad sea más que
                    excelente.
                </p>
            </article>
            <article class="col-lg-6 position-relative">
                <iframe class="w-100 h-100 border-0" src="https://www.youtube.com/embed/4pg7EaYo7hM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </article>
        </section>



        <section class="row mb-5 bg-danger">
            <article class="col articulo">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                        <img class=""
                            src="..\img\stockImages\aboutUs_StockImages\pexels-rene-asmussen-2544829 (1).jpg" frameborder="0">
                        </img>
                    </div>
                    <div class="col-lg-6 p-5">
                        <h1>Nuestros chefs</h1>
                        <p class=" mt-5">
                            En nuestro restaurante, contamos con los chefs más exitosos y experimentados de Venecia,
                            capaces de hacer toda variedad de platos al más puro estilo italiano.
                        </p>
                    </div>
                </div>
            </article>
        </section>

    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>