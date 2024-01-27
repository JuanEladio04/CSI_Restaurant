let d = document;
let limite = 500
$caracteres = d.getElementById("caracteres");

d.addEventListener("input", function (e) {
    console.log(e.data);    
    if (quill.getText().length > limite) {
        quill.deleteText(limite, quill.getText().length);
    }
    $caracteres.innerText = 500 - quill.getText().length;
    if (parseInt($caracteres.innerText) < 0) {
        $caracteres.innerText = 0;
    }

});

d.addEventListener("keydown", function (e) {
    
    $caracteres.innerText = 502 - quill.getText().length - 1;

    if (parseInt($caracteres.innerText) < 0) {
        $caracteres.innerText = 0;
    }

})

var primeraSeleccion = true;

function ocultarSeleccion() {
    if (primeraSeleccion) {
        // Elimina la opción "Seleccione una reserva" después de la primera selección
        var select = document.getElementById("reservas");
        select.remove(0);
        primeraSeleccion = false;  // Marca que ya se ha realizado la primera selección
    }
}