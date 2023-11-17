<?php include("../includes/a_config.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina opiniones del restaurante">
    <meta name="author" content="CSI">

    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">

    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/design-top.php"); ?>

    <section class="ofertasDia">
        <article class="tituloOffers">
            <div>
                <h2>OFERTAS DEL DIA</h2>
            </div>
        </article>
        <div class="container-fluid">
            <div class="row">
                <article class="articuloOferta col-lg-3 col-sm-6">
                    <div class="img">
                        <img alt="" src="../img/dish/Lentejas_de_Fernando_Alonso.png" />
                        <div class="container-fluid contenedor">
                            <div class="row fila">
                                <div class="col-4 precio">33,33€</div>
                                <div class="col-8 nombrePlato">Lentejas de Fernando Alonso</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="articuloOferta col-lg-3 col-sm-6">
                    <div class="img">
                        <img alt="" src="../img/dish/Lentejas_de_Fernando_Alonso.png" />
                        <div class="container-fluid contenedor">
                            <div class="row fila">
                                <div class="col-4 precio">33,33€</div>
                                <div class="col-8 nombrePlato">Lentejas de Fernando Alonso</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="articuloOferta col-lg-3 col-sm-6">
                    <div class="img">
                        <img alt="" src="../img/dish/Pasta_a_lo_Doraemon.png" />
                        <div class="container-fluid contenedor">
                            <div class="row fila">
                                <div class="col-4 precio">06,33€</div>
                                <div class="col-8 nombrePlato">Pasta al Doraemon</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="articuloOferta col-lg-3 col-sm-6">
                    <div class="img">
                        <img alt="" src="../img/dish/Pasta_a_lo_Doraemon.png" />
                        <div class="container-fluid contenedor">
                            <div class="row fila">
                                <div class="col-4 precio">06,33€</div>
                                <div class="col-8 nombrePlato">Pasta al Doraemon</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <div class="container-fluid">
        <div class="row">
            <section class="ofertasSemana izquierda col-lg-6 col-12">
                <article class="tituloOffers">
                    <div>
                        <h2>OFERTAS DE LA SEMANA</h2>
                    </div>
                </article>
                <div class="container-fluid ">
                    <div class="row">
                        <article class="articuloOferta2 col-sm-6">
                            <div class="img">
                                <img alt="" src="../img/dish/Lentejas_de_Fernando_Alonso.png" />
                                <div class="container-fluid contenedor">
                                    <div class="row fila">
                                        <div class="col-4 precio">33,33€</div>
                                        <div class="col-8 nombrePlato">Lentejas de Fernando Alonso</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="articuloOferta2 col-sm-6">
                            <div class="img">
                                <img alt="" src="../img/dish/Pasta_a_lo_Doraemon.png" />
                                <div class="container-fluid contenedor">
                                    <div class="row fila">
                                        <div class="col-4 precio">06,33€</div>
                                        <div class="col-8 nombrePlato">Pasta al Doraemon</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="ofertasMes derecha col-lg-6 col-12">
                <article class="tituloOffers">
                    <div>
                        <h2>OFERTAS DEL MES</h2>
                    </div>
                </article>
                <div class="container-fluid justify-content-around">
                    <div class="row ">
                        <article class="articuloOferta2 col-sm-6">
                            <div class="img">
                                <img alt="" src="../img/dish/Lentejas_de_Fernando_Alonso.png" />
                                <div class="container-fluid contenedor">
                                    <div class="row fila">
                                        <div class="col-4 precio">33,33€</div>
                                        <div class="col-8 nombrePlato">Lentejas de Fernando Alonso</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="articuloOferta2 col-sm-6">
                            <div class="img">
                                <img alt="" src="../img/dish/Pasta_a_lo_Doraemon.png" />
                                <div class="container-fluid contenedor">
                                    <div class="row fila">
                                        <div class="col-4 precio">06,33€</div>
                                        <div class="col-8 nombrePlato">Pasta al Doraemon</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <?php include("../includes/footer.php"); ?>
</body>

</html>