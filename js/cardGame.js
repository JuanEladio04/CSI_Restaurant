document.addEventListener('DOMContentLoaded', (event) => {
    var div = document.getElementsByClassName('card-text');
    var titulo = document.getElementsByClassName('card-title');
    

    for (var i = 0; i < div.length; i++) {
        var parrafos = div[i].getElementsByTagName('p');
        var texto = "";
        for (var j = 0; j < parrafos.length; j++) {
            parrafos[j].style.textAlign = 'justify';
            texto +="<p class='model'>" + parrafos[j].textContent + "</p>";
        }
        for (var j = 1; j < parrafos.length; j++) {
            parrafos[j].style.display = 'none';
        }
        div[i].insertAdjacentHTML('beforeend', '<a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#myModal' + i + '">Leer más</a>');
        document.body.insertAdjacentHTML('beforeend', `
        <div class="modal fade" id="myModal${i}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title mx-auto">${titulo[i].textContent}</h4>
                    </div>
                    <div class="modal-body text-justify">
                        ${texto}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        `);
    }
});