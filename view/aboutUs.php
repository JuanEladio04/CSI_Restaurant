<?php include("../includes/a_config.php"); ?>
<!-- Including configuration file -->

<!doctype html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    <!-- Including head tag contents -->
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <!-- Including navigation bar -->
    <?php include("../includes/design-top.php"); ?>
    <!-- Including design-top file -->

    <div class="container-fluid">

        <section class="row mb-5 bg-danger margin">
            <article class="articulo col p-5">
                <!-- Section with a welcome message -->
                <p class="mt-3">Welcome to Luna della Rosa, where authentic Italian passion merges with elegance and charm in every dish. In our restaurant, we take pride in offering a unique culinary experience that transports our diners to the picturesque streets of Italy, where food is a celebration of fresh and authentic flavors. At Luna di Rosa, our history is as rich as our flavors. Founded by Italian cuisine enthusiasts with decades of experience, our restaurant was born from the passionate belief that the true essence of Italy can be conveyed through every bite.</p>
            </article>
        </section>


        <section class="row mb-5 bg-danger flex-lg-row margin">
            <article class="articulo col-lg-6 p-5">
                <!-- Section with a brief overview -->
                <h1>A Glimpse</h1>
                <p class="mt-5 d-none d-lg-block">
                    Here at Luna Della Rossa, we have a dream. It involves delighting our customers with the most exquisite food they have ever tasted. We meticulously craft all our dishes to ensure their quality is nothing short of excellent.
                </p>
            </article>
            <article class="col-lg-6 position-relative">
                <!-- Section with an embedded YouTube video -->
                <iframe class="w-100 h-100 border-0" src="https://www.youtube.com/embed/4pg7EaYo7hM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </article>
        </section>



        <section class="row mb-5 bg-danger margin">
            <article class="col articulo">
                <!-- Section with information about chefs -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                        <!-- Image of chefs -->
                        <img class="img-fluid" src="..\img\stockImages\aboutUs_StockImages\pexels-rene-asmussen-2544829 (1).jpg" style="width: 100%;" frameborder="0">
                    </div>
                    <div class="col-lg-6 p-5">
                        <!-- Details about chefs -->
                        <h1>Our Chefs</h1>
                        <p class="mt-5">
                            In our restaurant, we have the most successful and experienced chefs from Venice, capable of creating a variety of dishes in the purest Italian style.
                        </p>
                    </div>
                </div>
            </article>
        </section>

    </div>
    <?php include("../includes/footer.php"); ?>
    <!-- Including the footer -->
</body>

</html>