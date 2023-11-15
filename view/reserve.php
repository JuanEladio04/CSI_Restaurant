<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body id="background-<?php echo $CURRENT_PAGE; ?>">
    <?php include("../includes/navigation.php"); ?>

    <?php include("../includes/design-top.php"); ?>
    <!--Reserves formulary-->
    <section class="container-fluid bg-primary w-75 rounded rounded-25 rForm">
        <!--Presentation-->
        <h2 class="d-none">Formulario de reservas</h2>
        <div class="row">
            <div class="dropdown col-12 text-center p-0">
                <h3 class="p-5">
                    ¿Desea reservar mesa? Hágalo ahora mismo desde aqui.
                </h3>
                <!--Formulary-->
                <div class="container-fluid col-12 p-3 bg-info" aria-labelledby="dropdownMenuButton">
                    <div class="row justify-content-around alight-items-center">
                        <form class="col-12 row" action="" method="POST">
                            <div class="row col-lg-6 col-sm-12 rFormContent">
                                <label class="col-6" for="">Nombre</label>
                                <input class="col-6" type="text" name="ittName">
                            </div>

                            <div class="row col-lg-6 col-sm-12 rFormContent">
                                <label class="col-6" for="">Apellidos</label>
                                <input class="col-6" type="text" name="ittSecondName">
                            </div>

                            <div class="row col-lg-6 col-sm-12 rFormContent">
                                <label class="col-6" for="">Número de teléfono</label>
                                <input class="col-6" type="tel" name="ittelPhoneNumber">
                            </div>

                            <div class="row col-lg-6 col-sm-12 rFormContent">
                                <label class="col-12" for="">Comensales</label>
                                <label class="col-11" for="">¿Viene acompañado?</label>
                                <input class="col-1" type="checkbox" name="itcbNotAlone" id="notAlone">
                                <select name="sDinners" id="sDinners" class="col-6"></select>
                            </div>

                            <div class="row col-lg-6 col-sm-12 rFormContent">
                                <label class="col-6" for="">Fecha</label>
                                <input class="col-6" type="date" name="itdDate">
                            </div>

                            <div class="row col-lg-6 col-sm-12 rFormContent">
                                <label class="col-6" for="">Hora</label>
                                <input class="col-6" type="time" name="ittimeHour">
                            </div>

                            <div class="roow col-12 rFormContent">
                                <label for="">Especificaciones</label>
                                <textarea class="form-control z-depth-1" id="textarea" rows="4" name="taSpecifications"></textarea>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include("../includes/footer.php"); ?>
    <script src="../js/reserveFormulary.js"></script>

</body>

</html>