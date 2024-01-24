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

