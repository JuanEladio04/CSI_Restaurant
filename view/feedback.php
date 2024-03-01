<?php
include("../includes/a_config.php");
require_once('../controller/sessionController.php');

$comentarios = comentarioController::getAllComentarios();



if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $reservasUsuario = reservaController::getReservasById($usuario->id);
}

if (isset($_POST['borrar'])) {
    $id = $_POST['id_comentario'];
    comentarioController::deleteComentario($id);
}

?>

<!DOCTYPE html>

<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>

</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/design-top.php"); ?>

    <?php
    if (isset($_SESSION['usuario'])) {
        ?>
        <section class="container-fluid crearOpiniones">
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

                        <h3 class="parrafo ">¿Quieres hablar?</h3>

                        <p class="parrafo roboto">
                            Deja tu opinión a continuación:
                        </p>
                    </div>

                    <div class="comentarybox">
                        <div>
                            <div class="arriba mt-4 mb-2">
                                <div class="img">
                                    <img class="vector-icon img-user rounded-circle" alt=""
                                        src="../<?php echo $usuario->imagen ?>" width="50px" height="50px" />
                                </div>

                                    <div class="username d-flex align-items-center justify-content-center">
                                        <?php echo $usuario->nombre . " " . $usuario->apellidos ?>
                                    </div>
                                <div id="crearCalificacion"
                                    class="stars d-flex align-items-center justify-content-center margen">
                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="1" tabindex="0"></i>

                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="2" tabindex="0"></i>

                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="3" tabindex="0"></i>

                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="4" tabindex="0"></i>

                                    <i class="fa-regular fa-2x fa-star text-danger estrella" id="5" tabindex="0"></i>
                                </div>

                                <label for="reservas"></label>
                                <select name="reservas" id="reservas" onchange="ocultarSeleccion(), habilitarBoton()">
                                    <option value="" id="reservas" selected>Seleccione una reserva</option>
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

                            <div class="boton_Contador">
                                <input type="submit" name="crear" id="crear" value="Crear Comentario"
                                    class="btn btn-danger mt-2" onclick="crear()" disabled>
                                <p id="caracteres">500</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <?php
    }
    ?>
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
                            <div class="username lobster d-flex align-items-center justify-content-center <?php if (isset($usuario) && $c->id_usuario == $usuario->id) {
                                echo "gold-pass";
                            } ?>">
                                <?php
                                if (isset($usuario) && $c->id_usuario == $usuario->id) {
                                    echo "<span class=''>";
                                    echo $c->nombre_usuario . " " . $c->apellidos_usuario;
                                    echo "</span>";
                                } else {
                                    echo $c->nombre_usuario . " " . $c->apellidos_usuario;
                                }
                                ?>
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
                            <div class="text-end">
                                <?php
                                if (isset($usuario)) {
                                    if ($c->id_usuario == $usuario->id || $usuario->admin == 1) {
                                        echo "<form action='' method='post'>";
                                        echo "<input type='hidden' name='id_comentario' value='$c->id'>";
                                        echo "<input type='submit'name='borrar' class='btn btn-danger btn-sm' value='Borrar Comentario'>";
                                        echo "</form>";
                                    }
                                }
                                ?>
                            </div>
                        </div>

                    </article>

                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Encabezado del modal -->
      <div class="modal-header">
        <h4 class="modal-title">Mensaje</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Contenido del modal -->
      <div class="modal-body">
        <p>Comentario guardado correctamente</p>
      </div>
      
      <!-- Pie del modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrar()">Cerrar</button>
      </div>
      
    </div>
  </div>
</div>



    <script src="../js/estrellas.js"></script>
    <script src="../js/opinion.js"></script>
    <script src="../js/crearComentario.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
    <?php include("../includes/footer.php"); ?>

</body>

</html>