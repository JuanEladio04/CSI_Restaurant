<?php include("../includes/a_config.php"); ?>
<!doctype html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <div class="container-fluid">

        <section class="row row-md-6 mb-5 bg-secondary p-5 bg-info mt-5">
            <article class="articulo">
                <h1 class="mb-5 text-center">Sobre nosotros...</h1>
            </article>
            <article class="articulo ">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </article>
        </section>


        <section class="row row-md-6 mb-5 bg-danger">
            <article class="articulo col p-5">
                <h1>Un pequeño vistazo</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
            </article>
            <aside class="col-md-6 align-items-center roboto position-relative bg-dark">
                <iframe class="position-absolute top-0 start-0 w-100 h-100 border-0"
                    src="https://www.youtube.com/embed/4pg7EaYo7hM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </aside>
        </section>



        <section class="row mb-5 bg-danger">
            <article class="col-md-6 align-items-center position-relative">
                <img class="position-absolute align-self-center top-0 start-0 w-100 h-100 border-0"
                    src="..\img\stockImages\aboutUs_StockImages\imagen-cocinero-aboutUs.jpg" frameborder="0">
                </img>
            </article>
            <article class="articulo col-md-6 p-5">
                <h1>Nuestros chefs</h1>
                <p class=" mt-5 roboto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
            </article>
        </section>

    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>