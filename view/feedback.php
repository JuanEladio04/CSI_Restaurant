<?php
include("../includes/a_config.php");
require_once('../controller/sessionController.php');

$usuario = $_SESSION['usuario'];
$reservasUsuario = reservaController::getReservasById($usuario->id);
$comentarios = comentarioController::getAllComentarios();

if(isset($_POST['borrar'])){
    $id = $_POST['id_comentario'];
    comentarioController::deleteComentario($id);
}

if(isset($_POST['crear'])){
    $texto = $_POST['comentario'];
    echo $texto;
}

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
                                    <img class="vector-icon img-user rounded-circle" alt=""
                                        src="../<?php echo $usuario->imagen ?>" width="50px" height="50px"/>
                                </div>

                                <div class="username d-flex align-items-center justify-content-center"><?php echo $usuario->nombre." ".$usuario->apellidos ?></div>

                                <div id="crearCalificacion" class="stars d-flex align-items-center justify-content-center margen">
                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="1"></i>

                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="2"></i>

                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="3"></i>

                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="4"></i>

                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="5"></i>
                                </div>

                                <select name="reservas" id="reservas" onchange="ocultarSeleccion()">
                                    <option value="" selected>Seleccione una reserva</option>

                                    <?php
                                    foreach ($reservasUsuario as $r) {
                                        $fecha = date("d M Y - H:i:s", $r->fecha);
                                        echo "<option value=" . $r->id . ">" . $fecha . "</option>";
                                    }
                                    ?>
                                </select>
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
                                <form action="" method="post">
                                    <input type="hidden" name="comentario" id="comentario" value="quill.root.innerHTML">
                                    <input type="submit" name="crear" value="Crear Comentario" class="btn btn-danger btn-lg">
                                </form>
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
                <?php foreach ($comentarios as $c) { ?>
                    <article>
                        <div class="arriba">
                            <div class="img">
                                <img class="vector-icon img-user rounded-circle" alt=""
                                    src="../<?php echo $c->imagen_usuario ?>" width="40px" height="50px" />
                            </div>
                            <div class="username lobster d-flex align-items-center justify-content-center">
                                <?php echo $c->nombre_usuario . " " . $c->apellidos_usuario ?>
                            </div>
                            <div class="stars d-flex align-items-center justify-content-center">
                                <?php
                                for ($j = 0; $j < 5; $j++) {
                                    if ($j < $c->valoracion) {
                                        echo '<i class="fa-solid fa-2x fa-star text-danger"></i>';
                                    } else {
                                        echo '<i class="fa-regular fa-2x fa-star text-danger"></i>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="comentario">
                            <?php echo $c->comentario; ?>
                            <div class="d-flex align-items-end justify-content-end">
                                <?php
                                  if($c->id_usuario == $usuario->id || $usuario->admin == 1){
                                    echo "<form action='' method='post'>";
                                    echo "<input type='hidden' name='id_comentario' value='$c->id'>";
                                    echo "<input type='submit'name='borrar' class='btn btn-danger btn-sm' value='Borrar Comentario'>";
                                    echo "</form>";
                                  }  
                                ?>
                            </div>
                        </div>

                    </article>

                <?php } ?>
            </div>
        </div>
    </section>

    <script src="../js/estrellas.js"></script>
    <script src="../js/opinion.js"></script>
    <?php include("../includes/footer.php"); ?>

</body>

</html>