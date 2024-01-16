<?php
include "../controller/sessionController.php";
if (!isset($_SESSION["usuario"])) {
    header("location: index.php");
}
session_unset();
session_destroy();
setcookie("PHPSESSID", " ", time() - 60, "/");
header("location: ../index.php")
?>