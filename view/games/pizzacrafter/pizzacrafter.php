<?php include("../../../includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../../includes/head-tag-contents.php"); ?>
    <script src="https://unpkg.com/konva@9.2.3/konva.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="juego.css">
</head>
<body background="assets/background.png" class="pizzaCraft">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2" id="botones">
                <select id="tamano">
                    <option value="p">Pequeña</option>
                    <option value="m">Mediana</option>
                    <option value="g">Grande</option>
                </select>
                <table class="table table-bordered bg-primary oculto tabla" id="toppings">
                    <tr>
                        <td>
                            <button type="button" class="btn bg-transparent" name="addPepperoni" id="addPepperoni"><img
                                    class="ingrediente" id="addPepperoni" src="assets/pepperoni.png"></img></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn bg-transparent" name="addBacon" id="addBacon"><img
                                    class="ingrediente" id="addBacon" src="assets/bacon.png"></img></button>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn bg-transparent" name="addChampinon" id="addChampinon"><img
                                    class="ingrediente" id="addChampinon" src="assets/champinon.png"></img></button>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn bg-transparent" name="addTomate" id="addTomate"><img
                                class="ingrediente" id="addTomate" src="assets/tomate.png"></img></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn bg-danger" name="calcularPrecio" id="calcularPrecio">Calcular precio</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-8" id="container">
            </div>
            <div class="col-2" id="container">
                <table class="table bg-transparent borderless mb-5 pizzaCraft" id="precio">
                    <tr>
                        <td>Ingrediente</td>
                        <td>Precio</td>
                    </tr>
                </table>
                <p class="blanco">El precio de los ingredientes es <span id="precioTotal">0</span>€</p>


            </div>
        </div>
    </div>


    <script src="../../../js/pizzacrafter.js"></script>
</body>

</html>