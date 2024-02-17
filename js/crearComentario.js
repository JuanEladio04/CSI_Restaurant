function crear() {
    event.preventDefault();
    var valorSelect = document.getElementById("reservas").value;
    var contenidoHTML = quill.root.innerHTML;
    var contenedorEstrellas = document.getElementById('crearCalificacion');
    var estrellas = contenedorEstrellas.querySelectorAll('.fa-solid');
    var cantidadEstrellas = estrellas.length;


    // Enviar solicitud AJAX al servidor con datos
    $.ajax({
        type: 'POST',
        url: '../includes/newComentario.php', 
        data: {
            valorEstrellas: cantidadEstrellas,
            reserva: valorSelect,
            comentario: contenidoHTML
        },
        success: function(response) {
            // Acciones a realizar en caso de éxito
            console.log('Éxito:', response);
            $('#myModal').modal('show');
          },
          error: function(xhr, status, error) {
            console.error('Error:', error);
          }
    });
}

function habilitarBoton(){
    document.getElementById("crear").removeAttribute("disabled");
}

function cerrar(){
    $('#myModal').modal('hide');
    location.reload();
}