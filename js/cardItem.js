document.addEventListener('DOMContentLoaded', (event) => {
    var ps = document.querySelectorAll('p');

    ps.forEach((p, index) => {
        var lineHeight = parseInt(getComputedStyle(p).lineHeight);
        var lines = p.offsetHeight / lineHeight;

        if (lines > 3) {
            var shortText = p.textContent.substring(0, 70) + '... ';
            var fullText = p.textContent;
            p.textContent = shortText;
            p.insertAdjacentHTML('beforeend', '<a href="#" class="text-light" data-bs-toggle="modal" data-bs-target="#myModal' + index + '">Leer más</a>');

            document.body.insertAdjacentHTML('beforeend', `
                <div class="modal fade" id="myModal${index}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Pizza 4 quesos</h4>
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
});
