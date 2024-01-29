<?php
include("../includes/a_config.php");
require_once('../controller/sessionController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valorEstrellas = $_POST['valorEstrellas'];
    $id_reserva = $_POST['reserva'];
    $comen = $_POST['comentario'];

    $Comentario = new Comentario(0, $id_reserva, $comen, time(), $valorEstrellas);
    comentarioController::newComentario($Comentario);
    
}