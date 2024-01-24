<div class="overlay" id="ol"></div>

<div class="container fs-4 cookies roundedBorder" role="alert" id="cookieAlert">
    <p class="fs-4">Esta página web utiliza las <a href="termsAndConditions.php">cookies</a> para recordar las acciones del usuario</p>
    <button type="button" class="button" id="enviar" onclick="desaparecerBanner()">
        OK
    </button>
</div>

<script>
    

    function desaparecerBanner(){
        var enviar = document.getElementById("enviar");
        var overlay = document.getElementById("ol");
        var cookie = document.getElementById("cookieAlert");

        overlay.style.display = "none";
        cookie.style.display = "none";   
    }
</script>