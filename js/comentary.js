function updateText() {
    // Primero, elimina todos los modales existentes
    document.querySelectorAll('.modal').forEach(modal => modal.remove());

    var ps = document.querySelectorAll('.scrola p');

    ps.forEach((p, index) => {
        var maxLength;
        if (window.innerWidth <= 576) { 
            maxLength = 200;
        } else { 
            maxLength = 400;
        }

        if (p.textContent.length > maxLength) {
            var shortText = p.textContent.substring(0, maxLength) + '... ';
            var fullText = p.textContent;
            p.textContent = shortText;

            var modalId = 'myModal' + Date.now() + index;
            p.insertAdjacentHTML('beforeend', '<a href="#" class="text-light" data-bs-toggle="modal" data-bs-target="#' + modalId + '">Leer más</a>');

            document.body.insertAdjacentHTML('beforeend', `
                <div class="modal fade" id="${modalId}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Comentario completo</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                ${fullText}
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
}

document.addEventListener('DOMContentLoaded', updateText);
window.addEventListener('resize', updateText);
