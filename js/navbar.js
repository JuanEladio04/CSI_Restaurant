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