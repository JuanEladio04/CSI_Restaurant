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
                        <label class="col-12" for="">Nombre:</label>
                        <input class="col-12" type="text" name="ittName" required pattern="^[A-Za-z]+$">
                    </div>

                    <div class="row col-lg-6 col-sm-12 rFormContent">
                        <label class="col-12" for="">Apellidos:</label>
                        <input class="col-12" type="text" name="ittSecondName"  required pattern="^[A-Za-z]+$">
                    </div>

                    <div class="row col-lg-6 col-sm-12 rFormContent">
                        <label class="col-12" for="">Número de teléfono:</label>
                        <input class="col-12" type="tel" name="ittelPhoneNumber"  required pattern="^\\+?[0-9]{1,4}?[-.\\s]?\\(?[0-9]{1,3}?\\)?[-.\\s]?[0-9]{1,4}[-.\\s]?[0-9]{1,9}$">
                    </div>

                    <div class="row col-lg-6 col-sm-12 rFormContent">
                        <label class="col-4" for="">Comensales:</label>
                        <label class="col-lg-6 col-sm-11" for="">¿Viene acompañado?</label>
                        <input class="col-sm-1" type="checkbox" name="itcbNotAlone" id="notAlone">
                        <select name="sDinners" id="sDinners" class="col-12"></select>
                    </div>  

                    <div class="row col-lg-6 col-sm-12 rFormContent">
                        <label class="col-12" for="">Fecha:</label>
                        <input class="col-12" type="date" name="itdDate">
                    </div>

                    <div class="row col-lg-6 col-sm-12 rFormContent">
                        <label class="col-12" for="">Hora:</label>
                        <input class="col-12" type="time" name="ittimeHour">
                    </div>

                    <div class="row col-12 rFormContent">
                        <label for="">Especificaciones:</label>
                        <textarea class="form-control z-depth-1" id="textarea" rows="4" name="taSpecifications"></textarea>
                    </div>
                </div>
                <button type="submit" value="" class="btn btn-danger p-3">
                    Confirmar reserva
                </button>
            </form>
        </div>
    </section>

    <?php include("../includes/footer.php"); ?>
    <script src="../js/reserveFormulary.js"></script>

</body>

</html>