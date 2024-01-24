<div class="modal fade" id="salir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-item-center justify-content-center">
                <h5 class="modal-title" id="exampleModalLabel">¿Deseas
                    cerrar Sesión
                    <?php echo $usuario->nombre; ?>?
                </h5>
            </div>
            <div class="modal-body d-flex align-item-center justify-content-center">
                <img src="../<?php echo $usuario->imagen; ?>" width="150px" alt="Foto Perfil" class="rounded-circle">
            </div>
            <div class="modal-footer d-flex">
                <a href="/view/cerrarSesion.php" class="boton"><button type="button"
                        class="btn btn-outline-danger w-100">Cerrar Sesión</button></a>
                <button type="button" class="btn btn-outline-danger boton" data-bs-dismiss="modal">Volver</button>
            </div>
        </div>
    </div>
</div>