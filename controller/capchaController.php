<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["funcion"]) && function_exists($_POST["funcion"])) {
        $funcion = $_POST["funcion"];
        $variable = isset($_POST["variable"]) ? $_POST["variable"] : null;

        // Llama a la función PHP especificada pasando la variable
        call_user_func($funcion, $variable);
    } else {
        echo "Error: Función no especificada o no existe.";
    }
}

function verificar($text)
{
    $text_captcha = $_SESSION['captcha_text'];
    $text_captcha_minuscula = strtolower($text_captcha);
    $text_minuscula = strtolower($text);
    if ($text_captcha_minuscula == $text_minuscula) {
        echo "true";
    } else {
        echo "false";
    }
}
