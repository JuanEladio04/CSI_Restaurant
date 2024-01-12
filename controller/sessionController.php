<?php
spl_autoload_register(function ($class_name) {
    $model_path = $_SERVER['DOCUMENT_ROOT'] . '/model/' . $class_name . '.php';
    $controller_path = $_SERVER['DOCUMENT_ROOT'] . '/controller/' . $class_name . '.php';

    if (file_exists($model_path)) {
        require_once $model_path;
    } elseif (file_exists($controller_path)) {
        require_once $controller_path;
    }
});

session_start();

function sessionRedirect(){
    if(!isset($_SESSION['usuario'])){
        header('Location: /view/register.php');
    }
}
?>
