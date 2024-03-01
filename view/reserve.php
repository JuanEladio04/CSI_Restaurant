<?php
include("../includes/a_config.php");
require_once "../controller/sessionController.php";
date_default_timezone_set('Europe/Madrid');

sessionRedirect();
if (isset($_POST['enviarReserva'])) {
    if (
        !empty($_POST['ittName']) && !empty($_POST['ittSecondName']) && !empty($_POST['ittelPhoneNumber']) && !empty($_POST['sDinners']) && !empty($_POST['itdDate']) && !empty($_POST['ittimeHour'])
    ) {
        if (isset($_POST['itcbNotAlone'])) {
            $texto = "¿Cuántos comensales vienen además de usted?";
            $comen = $_POST['itcbNotAlone'];
            if ($_POST['sDinners'] == $texto) {
                $comen = 1;
            } else {
                $comen = $_POST['sDinners'] + 1;
            }
        } else {
            $comen = 1;
        }
        $id = $_SESSION['usuario']->id;
        $nombre = $_POST['ittName'];
        $apell = $_POST['ittSecondName'];
        $telef = $_POST['ittelPhoneNumber'];
        $timestamp = strtotime($_POST['itdDate']);
        $timestamp2 = strtotime($_POST['ittimeHour']);
        $fecha = $_POST['itdDate'] . " " . $_POST['ittimeHour'];
        $milis = DateTime::createFromFormat('Y-m-d H:i', $fecha);
        $espec = $_POST['taSpecifications'];

        $reserva = reservaController::insertReserva($id, $nombre, $apell, $telef, $comen, $milis->getTimestamp(), $espec);

        if ($reserva != null) {
            header("Location: ../index.php?reservado='true'");
        }
    } else {
        echo "Algún dato no se ha pasado correctamente";
    }
} else {
    ?>
    <html lang="es">

    <head>
        <?php include("../includes/head-tag-contents.php"); ?>
    </head>

    <body id="background-<?php echo $CURRENT_PAGE; ?>">
        <?php include("../includes/navigation.php"); ?>

        <?php include("../includes/design-top.php"); ?>

        <!--Reserves formulary-->
        <section class="container-fluid bg-danger rForm">
            <!--Presentation-->
            <!--CF: ¿Dónde está el h1?-->
            <!-- el siguiente elemento no se ve por d-none, por qué ponerlo-->
            <h2 class="d-none">Formulario de reservas</h2>
            <div class="row justify-content-around text-center">
                <h3 class="p-5 text-light">
                    ¿Desea reservar mesa? Hágalo ahora mismo desde aqui.
                </h3>
                <!--Formulary-->
                <!--CF: ERROR GRAVE: No se puede usar row y col en un mismo elemento!-->
                <form class="col-12 row bg-primary p-0 form row" action="" method="POST">
                    <div class="row p-3 text-center mx-auto justify-content-around col-10">
                        <div class="row col-lg-6 col-sm-12 rFormContent">
                            <label class="col-12" for="nombre">Nombre:</label>
                            <input class="col-12 text-start" type="text" name="ittName" id="nombre" required
                                pattern="^[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+$"
                                value="<?php if (isset($_SESSION['usuario'])) {
                                    echo $_SESSION['usuario']->nombre;
                                } ?>">

                        </div>

                        <div class="row col-lg-6 col-sm-12 rFormContent">
                            <label class="col-12" for="apell">Apellidos:</label>
                            <input class="col-12" type="text" name="ittSecondName" id="apell" required
                                pattern="^[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+$"
                                value="<?php if (isset($_SESSION['usuario'])) {
                                    echo $_SESSION['usuario']->apellidos;
                                } ?>">
                        </div>

                        <div class="row col-lg-6 col-sm-12 rFormContent">
                            <label class="col-12" for="tel">Número de teléfono:</label>
                            <input class="col-12" type="tel" name="ittelPhoneNumber" id="tel" maxlength="14" required
                                onkeyup="this.value = this.value.replace(/[^0-9-]/g, '');"
                                placeholder="+34 000 000 000"
                                value="<?php if (isset($_SESSION['usuario'])) {
                                    echo $_SESSION['usuario']->numero_telefono;
                                } ?>">

                        </div>

                        <div class="row col-lg-6 col-sm-12 rFormContent">
                            <label class="col-4" for="ssDinners">Comensales:</label>
                            <select name="sDinners" id="ssDinners" class="col-12">
                                <?php 
                                for ($i = 1; $i <= 3333; $i++) {
                                    echo '<option value="'. $i. '">'. $i. '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="row col-lg-6 col-sm-12 rFormContent">
                            <label class="col-12" for="fecha">Fecha:</label>
                            <input class="col-12" type="date" name="itdDate" min="<?php echo date('Y-m-d'); ?>" id="fecha" min required>
                        </div>

                        <div class="row col-lg-6 col-sm-12 rFormContent">
                            <label class="col-12" for="hora">Hora:</label>
                            <input class="col-12" type="time" name="ittimeHour" min="<?php echo date('H:i'); ?>" id="hora" required>
                        </div>

                        <div class="row col-12 rFormContent">
                            <label for="textarea">Especificaciones:</label>
                            <textarea class="form-control z-depth-1" id="textarea" rows="4"
                                name="taSpecifications"></textarea>
                        </div>
                    </div>
                    <button type="submit" value="" name="enviarReserva" class="btn btn-danger p-3">
                        Confirmar reserva
                    </button>
                </form>
            </div>
        </section>

        <?php include("../includes/footer.php"); ?>
        <?php include("../includes/cookies.php"); ?>
        <script src="../js/reserveFormulary.js"></script>

    </body>
    <?php
}
?>



</html>