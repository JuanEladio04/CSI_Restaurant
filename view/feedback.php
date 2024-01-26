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
                                    <img class="vector-icon img-user rounded" alt="" src="../img/stockImages/defaultUserImage.png" />
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

                            <div id="standalone-container" class="crearComentario">
                                <div id="toolbar-container">
                                    <span class="ql-formats">
                                        <select class="ql-font"></select>
                                        <select class="ql-size"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-strike"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <select class="ql-color"></select>
                                        <select class="ql-background"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-script" value="sub"></button>
                                        <button class="ql-script" value="super"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-header" value="1"></button>
                                        <button class="ql-header" value="2"></button>
                                        <button class="ql-blockquote"></button>
                                        <button class="ql-code-block"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <button class="ql-indent" value="-1"></button>
                                        <button class="ql-indent" value="+1"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-direction" value="rtl"></button>
                                        <select class="ql-align"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-link"></button>
                                        <button class="ql-image"></button>
                                        <button class="ql-video"></button>
                                        <button class="ql-formula"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-clean"></button>
                                    </span>
                                </div>
                                <div id="editor-container"></div>
                            </div>



                            <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

                            <script src="../js/editorDeTexto/quill.min.js"></script>

                            <script>
                                var quill = new Quill('#editor-container', {
                                    modules: {
                                        formula: true,
                                        syntax: true,
                                        toolbar: '#toolbar-container'
                                    },
                                    placeholder: 'Escriba aqui su comentario...',
                                    theme: 'snow'
                                });
                            </script>

                            <div style="width: 100%; text-align: center;">
                                <button type="button" class="btn btn-primary btn-sm" aria-label="Close" onclick="JavaScript: alert(quill.root.innerHTML);">
                                    Obtener texto HTML mostrado en el editor
                                </button>
                                <p id="caracteres">500</p>
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
                                <img class="vector-icon img-user rounded" alt="" src="../img/stockImages/defaultUserImage.png" />
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
                                <img class="vector-icon img-user rounded" alt="" src="../img/stockImages/defaultUserImage.png" />
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
                                <img class="vector-icon img-user rounded" alt="" src="../img/stockImages/defaultUserImage.png" />
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
    <script src="../js/opinion.js"></script>
    <?php include("../includes/footer.php"); ?>

</body>

</html>