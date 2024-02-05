var canvas = document.getElementById("captchaCanvas");
var result;

function captcha() {
    event.preventDefault();

    var icon = document.querySelector('.content-input input[type="checkbox"]+i');
    // Obtener el elemento
    var contenedorCaptcha = document.getElementById("contenedorCaptcha");

    // Obtener el estilo computado del elemento
    var estiloComputado = window.getComputedStyle(contenedorCaptcha);

    // Obtener el valor del estilo "display"
    var displayValor = estiloComputado.getPropertyValue("display");


    if (!icon.classList.contains('checkbox-checked') && displayValor == "none") {
        let contenedorCaptcha = document.getElementById('contenedorCaptcha');
        contenedorCaptcha.style.display = 'block';
        document.querySelector(".captcha-image").src = '../includes/captcha.php?' + Date.now();

        let overlay = document.getElementById('overlay');
        overlay.style.display = 'block';

        // regenerarCaptcha();
        document.getElementById("resolverCaptcha").value = "";
    }
}

function cerrar() {
    event.preventDefault();

    let contenedorCaptcha = document.getElementById('contenedorCaptcha');
    contenedorCaptcha.style.display = 'none';
    let overlay = document.getElementById('overlay');
    overlay.style.display = 'none';

    var checkbox = document.querySelector('.content-input input[type="checkbox"]');
    var icon = document.querySelector('.content-input input[type="checkbox"]+i');
    var text = document.getElementById('resolverCaptcha');
    // let pregunta = false;
    // if (text.value.toUpperCase() == result) {
    //     pregunta = true;
    // }

    // if (pregunta) {
    //     icon.classList.add('checkbox-checked');
    // };
}

var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function () {
    document.querySelector(".captcha-image").src = '../includes/captcha.php?' + Date.now();
}

$(document).ready(function () {
    $("#resolver").click(function () {
        let inputCaptcha = document.getElementById('resolverCaptcha').value;
        $.ajax({
            url: '../controller/capchaController.php', // Nombre de tu archivo PHP
            type: 'POST',
            data: {
                funcion: 'verificar',
                variable: inputCaptcha
            }, // Nombre de la función PHP que deseas llamar
            success: function (response) {
                console.log(response);
                if (response == "true") {
                    var icon = document.querySelector('.content-input input[type="checkbox"]+i');
                    icon.classList.add('checkbox-checked');

                    var icon = document.querySelector('.content-input input[type="checkbox"]+i');
                    if (icon.classList.contains('checkbox-checked')) {
                        captchaCorrecto = 1;
                    } else {
                        captchaCorrecto = 0;
                    }
                    if (document.getElementById("terminos").checked == true) {
                        terminosAceptados = 1;
                    } else {
                        terminosAceptados = 0;
                    }
                    if (fechaCorrecta == 1 && contrasenaCorrecta == 1 && captchaCorrecto == 1 && terminosAceptados == 1) {
                        console.log("hola");
                        $boton = document.getElementById("crear");
                        $boton.disabled = false;
                    } else {
                        $boton = document.getElementById("crear");
                        $boton.disabled = true;
                    }
                }
            }
        });
    });
});

// var refreshButton = document.querySelector(".refresh-captcha");
// refreshButton.onclick = function () {
//     regenerarCaptcha();
// }



//CREAMOS EL CAPTCHA

// function regenerarCaptcha() {
//     if (!canvas) {
//         console.error("No se pudo encontrar el elemento canvas.");
//         return;
//     }

//     var ctx = canvas.getContext("2d");

//     // Limpia el lienzo y establece un fondo blanco
//     ctx.clearRect(0, 0, canvas.width, canvas.height);
//     ctx.fillStyle = "rgb(255, 255, 255)";
//     ctx.fillRect(0, 0, canvas.width, canvas.height);

//     // Configuración de caracteres permitidos
//     var permittedChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     var stringLength = 6;

//     // Genera una cadena de caracteres aleatoria
//     var captchaString = generateRandomString(stringLength, permittedChars);

//     // Dibuja el captcha en el lienzo
//     drawCaptcha(ctx, captchaString);
// }

// function generateRandomString(length, chars) {
//     result = '';
//     for (var i = 0; i < length; i++) {
//         result += chars.charAt(Math.floor(Math.random() * chars.length));
//     }
//     return result;
// }

// function drawCaptcha(ctx, captchaString) {
//     // Configuración de estilo
//     ctx.font = "bold 30px Arial";
//     ctx.fillStyle = "rgb(0, 0, 0)";
//     ctx.textAlign = "center";
//     ctx.textBaseline = "middle";

//     // Dibuja caracteres con distorsión
//     for (var i = 0; i < captchaString.length; i++) {
//         var xOffset = i * 30 + 20;
//         var yOffset = 25;
//         var angle = Math.random() * 0.4 - 0.2; // Ángulo aleatorio de distorsión
//         var scaleFactor = Math.random() * 0.5 + 0.8; // Factor de escala aleatorio

//         ctx.setTransform(scaleFactor, 0, Math.tan(angle), 1, xOffset, yOffset);
//         ctx.fillText(captchaString[i], 0, 0);
//         ctx.setTransform(1, 0, 0, 1, 0, 0); // Restablece la transformación
//     }

//     // Dibuja líneas de ruido
//     ctx.beginPath();
//     for (var i = 0; i < 10; i++) {
//         var x1 = Math.min(Math.random() * canvas.width, canvas.width); // Limita x1 al ancho del canvas
//         var y1 = Math.random() * canvas.height;
//         var x2 = Math.random() * canvas.width;
//         var y2 = Math.random() * canvas.height;

//         ctx.moveTo(x1, y1);
//         ctx.lineTo(x2, y2);
//     }

//     ctx.strokeStyle = "rgba(0, 0, 0, 0.3)"; // Cambiado a un tono más claro
//     ctx.stroke();
// }