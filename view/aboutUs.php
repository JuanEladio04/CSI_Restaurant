<?php include("../includes/a_config.php"); ?>
<!doctype html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

    <body id="background-<?php echo $CURRENT_PAGE; ?>">

        <?php include("../includes/navigation.php"); ?>


        <div class="container-fluid">
            <div class="p-5 mt-5"></div>
            
            <section class="row row-md-6 mb-5 bg-secondary p-5 bg-info mt-5">
                <article>
                    <p class="fs-1 mb-5 text-center text-white">Sobre nosotros...</p>
                </article>
                <article class="fs-3 roboto text-white">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
            </section>


            <div class="p-5"></div>


            <section class="row row-md-6 bg-secondary mb-5 bg-danger">
                <article class="col fs-1 text-white p-5">
                    <p>Un pequeño vistazo</p>
                    <p class="fs-3 mt-5 text-white roboto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </article>
                <aside class="col-md-6 align-items-center text-white roboto position-relative bg-dark">
                    <iframe class="position-absolute top-0 start-0 w-100 h-100 border-0"
                        src="https://www.youtube.com/embed/4pg7EaYo7hM" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </aside>
            </section>

            <div class="p-4"></div>

            <section class="row-12 row-md-6 mt-5">
                <section class="row bg-secondary mb-5 bg-danger">
                    <article class="col-md-6 align-items-center text-white roboto position-relative bg-dark">
                        <img class="position-absolute align-self-center top-0 start-0 w-100 h-100 border-0"
                            src="..\img\stockImages\aboutUs_StockImages\imagen-cocinero-aboutUs.jpg" frameborder="0">
                        </img>
                    </article>
                    <aside class="col-md-6 fs-1 text-white p-5">
                        <p>Nuestros chefs</p>
                        <p class="fs-3 mt-5 text-white roboto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </aside>
                </section>
            </section>
            <div class="p-5 mt-5"></div>
            <div class="mt-3">
                <?php include("../includes/footer.php"); ?>
            </div>
        </div>
    </body>

</html>