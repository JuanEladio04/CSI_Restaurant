// Asignar el evento directamente al botón o elemento que activa la función mostrar
document.getElementById('desplegable').addEventListener('click', mostrar);

// Asignar el evento directamente al botón o elemento que activa la función mostrarSalir
// document.getElementById('botonSalir').addEventListener('click', function (event) {
//     event.preventDefault();
//     mostrarSalir();
// });

function mostrar(){
    let menu = document.querySelector('.dropdown-menu');
    let estilo = window.getComputedStyle(menu);

    if (estilo.display === 'block') {
        menu.style.display = 'none';
    }
    else{
        menu.style.display = 'block';
    }

}

// function mostrarSalir(){
//     event.preventDefault();

//     let cuadro = document.querySelector('.salir');
//     let botonSalir = document.getElementById('botonSalir');

//     if(cuadro.style.display === 'none'){
//         cuadro.style.display = 'block';
//         botonSalir.classList.remove('colorFondoClick');
//         botonSalir.classList.add('colorFondo');
//     }else{
//         cuadro.style.display = 'none';
//         botonSalir.classList.remove('colorFondo');
//         botonSalir.classList.add('colorFondoClick');
//     }
// }
