
<?php

if (isset($_COOKIE['noticiasSemanales'])) {

  ?>

        <div class="modal fade" id="modalPagina" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content  bg-success">
              <div class="modal-header">
                <h2 class="modal-title">Noticias</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="fs-3">¡ACTUALIZACIÓN!</p>
                <p class="mt-4 fs-5">Nueva bebida añadida a la carta: <a class="text-danger"
                    href="../view/card.php?tipo=Bebidas">Bidón de plasma</a></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="botonNoticias">Close</button>
              </div>
            </div>
          </div>
        </div>
        <script>
          var modalPagina = new bootstrap.Modal(document.getElementById('modalPagina'));
          var noticia = document.getElementById("botonNoticias");

          var modalPagina = new bootstrap.Modal(
            document.getElementById("modalPagina")
          );

          document.addEventListener("DOMContentLoaded", function () {
            <?php
            if(isset($_COOKIE['noticiaAceptada'])){
              ?>
              modalPagina.hide();
              <?php
            } else {
              ?>
              modalPagina.show();
              <?php
            }
            ?>
          });

          noticia.addEventListener("click", function () {
            setCookie("noticiaAceptada", true, 30);
          });

          function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
          }  
        </script>
        <?php


}

if (!isset($_COOKIE['cookiesAceptadas'])) {
  if (!isset($_COOKIE['noticiasSemanales'])) {
    ?>

            <div class="overlay" id="ol"></div>
            <div class="container fs-4 cookies roundedBorder" role="alert" id="cookieAlert">
                <p class="fs-4 mt-2">Esta página web utiliza las <a href="termsAndConditions.php">cookies</a> para recordar las acciones del usuario</p>
                <button type="button" class="button" id="enviar" onclick="desaparecerBanner()">
                    Acepto las cookies
                </button>
                <button type="button" class="buttonClose" id="enviar" onclick="regresarGoogle()">
                    Denegar
                </button>
            </div>
            <script>
              document.addEventListener('DOMContentLoaded', function () {
                var cookieAlert = document.getElementById('cookieAlert');

                cookieAlert.classList.remove('hidden');
                cookieAlert.classList.add('shown');

                document.getElementById('enviar').addEventListener('click', function () {
                  cookieAlert.classList.remove('shown');
                  cookieAlert.classList.add('hidden');
                });
              });
            </script>
        <script src="../js/cookies.js"></script>
  
      <?php
  }
}
  

?>
