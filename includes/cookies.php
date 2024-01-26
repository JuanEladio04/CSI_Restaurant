
<?php

if(isset($_COOKIE['noticiasSemanales'])){
    ?>
    
  <div class="modal fade" id="modalPagina" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content  bg-danger">
        <div class="modal-header">
          <h5 class="modal-title text-white">Noticias</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-white">
          <p>¡ACTUALIZACIÓN! Bebida añadida recientemente: Bidón de plasma</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    var myModal = new bootstrap.Modal(document.getElementById('modalPagina'), {
    });
    myModal.show();
  </script>
    <?php
}

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
