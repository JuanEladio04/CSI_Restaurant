<?php 
include("../includes/a_config.php");
require_once('../controller/sessionController.php');
 ?>

<!DOCTYPE html>

<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/design-top.php"); ?>

    <!--CF: Error grave, la página carece de una estructura row/col-->
    <section class="container-fluid crearOpiniones">
        <div class="row">
        <div class="titulo">
            <h2>Deja tu opinión</h2>
        </div>


        <article class="contenedor">
            <div class="texto column p-5 tituloh2">

                <h3 class="col-6 opinion ">Tu opinión</h3>

                <div class="col-6 parrafo-container p">

                    <p class="parrafo ">
                        En nuestro restaurante tu voz importa.
                    </p>

                    <p class="parrafo ">¿Quieres hablar?</p>

                    <p class="parrafo roboto">
                        Deja tu opinión a continuación:
                    </p>

                </div>

                <div class="comentarybox">
                    <div>
                        <div class="arriba mt-4 mb-2">
                            <div class="img">
                                <img class="vector-icon img-user rounded" alt=""
                                    src="../img/stockImages/defaultUserImage.png" />
                            </div>

                            <div class="username">Nombre de Usuario</div>

                            <div id="crearCalificacion" class="stars">
                                <i class="fa-regular fa-2x fa-star text-danger estrella" id="1"></i>

                                <i class="fa-regular fa-2x fa-star text-danger estrella" id="2"></i>

                                <i class="fa-regular fa-2x fa-star text-danger estrella" id="3"></i>

                                <i class="fa-regular fa-2x fa-star text-danger estrella" id="4"></i>

                                <i class="fa-regular fa-2x fa-star text-danger estrella" id="5"></i>
                            </div>
                        </div>
                        <div class="crearComentario">
                            <label class="roboto" id="label">Escriba su comentario:</label>
                            <form>
                                <textarea class="form-control z-depth-1" id="textarea" rows="4"></textarea>
                                <div id="boton">
                                    <button type="button" class="btn btn-danger">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        </div>
    </section>
    <section class="opinionUsuario ">
        <div class="contenedor-titulo titulo">
            <h2>Opiniones de Nuestros Clientes</h2>
        </div>
        <div class="opinionesclientes p-5">
            <div class="frame-interior">
                <article>
                    <div>
                        <div class="arriba">
                            <div class="img">
                                <img class="vector-icon img-user rounded" alt=""
                                    src="../img/stockImages/defaultUserImage.png" />
                            </div>
                            <div class="username lobster">Nombre de Usuario</div>

                            <div class="stars">
                                <i class="fa-solid fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-solid fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-solid fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-solid fa-2x fa-star text-danger"></i>

                                <i class="fa-solid fa-2x fa-star text-danger"></i>
                            </div>
                        </div>
                        <div class="comentario">
                            Lorem Ipsum es simplemente el texto de relleno de las
                            imprentas y archivos de texto. Lorem Ipsum ha sido el texto de
                            relleno estándar de las industrias desde el año 1500, cuando
                            un impresor (N. del T. persona que
                            se dedica a la imprenta) desconocido usó una galería de textos
                            y los mezcló de tal manera que logró hacer un libro de textos
                            especimen. No sólo sobrevivió 500 años, sino que tambien
                            ingresó como texto de relleno en documentos electrónicos,
                            quedando esencialmente igual al original. Fue popularizado en
                            los 60s con la creación de las hojas "Letraset", las cuales
                            contenian pasajes de Lorem Ipsum, y más recientemente con
                            software de autoedición, como por ejemplo Aldus PageMaker, el
                            cual incluye versiones de Lorem Ipsum.
                        </div>
                    </div>
                </article>
                <article>
                    <div>
                        <div class="arriba">
                            <div class="img">
                                <img class="vector-icon img-user rounded" alt=""
                                    src="../img/stockImages/defaultUserImage.png" />
                            </div>

                            <div class="username lobster">Nombre de Usuario</div>

                            <div class="stars">
                                <i class="fa-solid fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-solid fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-solid fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-solid fa-2x fa-star text-danger"></i>

                                <i class="fa-solid fa-2x fa-star text-danger"></i>
                            </div>
                        </div>
                        <div class="comentario">
                            Lorem Ipsum es simplemente el texto de relleno de las
                            imprentas y archivos de texto. Lorem Ipsum ha sido el texto de
                            relleno estándar de las industrias desde el año 1500, cuando
                            un impresor (N. del T. persona que
                            se dedica a la imprenta) desconocido usó una galería de textos
                            y los mezcló de tal manera que logró hacer un libro de textos
                            especimen. No sólo sobrevivió 500 años, sino que tambien
                            ingresó como texto de relleno en documentos electrónicos,
                            quedando esencialmente igual al original. Fue popularizado en
                            los 60s con la creación de las hojas "Letraset", las cuales
                            contenian pasajes de Lorem Ipsum, y más recientemente con
                            software de autoedición, como por ejemplo Aldus PageMaker, el
                            cual incluye versiones de Lorem Ipsum.
                        </div>
                    </div>
                </article>
                <article>
                    <div>
                        <div class="arriba">
                            <div class="img">
                                <img class="vector-icon img-user rounded" alt=""
                                    src="../img/stockImages/defaultUserImage.png" />
                            </div>

                            <div class="username lobster">Nombre de Usuario</div>

                            <div class="stars">
                                <i class="fa-solid fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-regular fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-regular fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-regular fa-2x fa-star mx-auto text-danger"></i>

                                <i class="fa-regular fa-2x fa-star mx-auto text-danger"></i>
                            </div>
                        </div>
                        <div class="comentario">
                            Lorem Ipsum es simplemente el texto de relleno de las
                            imprentas y archivos de texto. Lorem Ipsum ha sido el texto de
                            relleno estándar de las industrias desde el año 1500, cuando
                            un impresor (N. del T. persona que
                            se dedica a la imprenta) desconocido usó una galería de textos
                            y los mezcló de tal manera que logró hacer un libro de textos
                            especimen. No sólo sobrevivió 500 años, sino que tambien
                            ingresó como texto de relleno en documentos electrónicos,
                            quedando esencialmente igual al original. Fue popularizado en
                            los 60s con la creación de las hojas "Letraset", las cuales
                            contenian pasajes de Lorem Ipsum, y más recientemente con
                            software de autoedición, como por ejemplo Aldus PageMaker, el
                            cual incluye versiones de Lorem Ipsum.
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <script src="../js/estrellas.js"></script>
    <?php include("../includes/footer.php"); ?>

</body>

</html>