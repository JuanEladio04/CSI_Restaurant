<?php
if($_COOKIE['cookiesAceptadas'] == null){

    ?>
    <div class="overlay" id="ol"></div>
    <div class="container fs-4 cookies roundedBorder" role="alert" id="cookieAlert">
        <p class="fs-4">Esta página web utiliza las <a href="termsAndConditions.php">cookies</a> para recordar las acciones del usuario</p>
        <button type="button" class="button" id="enviar" onclick="desaparecerBanner()">
            OK
        </button>
    </div>

<script src="../js/cookies.js"></script>
    <?php
    
}
?>
