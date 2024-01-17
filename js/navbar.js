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

function mostrarSalir(){
    event.preventDefault();

    let cuadro = document.querySelector('.salir');
    if(cuadro.style.display === 'none'){
        cuadro.style.display = 'block';
    }else{
        cuadro.style.display = 'none';
        
    }
}