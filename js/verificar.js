let contrasenaIncorrecta = null;
let contrasenaCorrecta = 0;
let fechaCorrecta = 0;

function verificarClave() {
    let clave = document.getElementById("clave");
    let minusculas;
    let mayusculas;
    let caracterNoAlfanumerico;
    let minimo;


    if (/[a-z]/.test(clave.value)) {
        minusculas = true;

    } else {
        minusculas = false;
    };

    if (/[A-Z]/.test(clave.value)) {
        mayusculas = true;

    } else {
        mayusculas = false;
    };

    if (/[^a-zA-Z0-9]/.test(clave.value)) {
        caracterNoAlfanumerico = true;
    } else {
        caracterAlfanumerico = false;
    }

    if (clave.value.length >= 8) {
        minimo = true
    } else {
        minimo = false;
    }

    if (!minusculas || !mayusculas || !caracterNoAlfanumerico || !minimo) {
        let lista = document.getElementById("errores");
        lista.style.display = "block"


        // LE DECIMOS AL USUARIO SI ESTE NO HA INTRODUCIDO MINUSCULAS
        if (minusculas) {
            var li = document.getElementById("minusculas");
            if (li != null) {
                lista.removeChild(li);
            }

        } else {
            var li = document.getElementById("minusculas");

            if (li == null) {
                var liMinusculas = document.createElement("li");
                liMinusculas.textContent = "Debe contener caracteres en minuscula";
                liMinusculas.setAttribute("id", "minusculas");
                lista.appendChild(liMinusculas);
            }
        }

        //LE DECIMOS AL USUARIO SI ESTE NO HA INTRODUCIDO MAYUSCULAS
        if (mayusculas) {
            var li = document.getElementById("mayusculas");
            if (li != null) {
                lista.removeChild(li);
            }

        } else {
            var li = document.getElementById("mayusculas");

            if (li == null) {
                var liMayusculas = document.createElement("li");
                liMayusculas.textContent = "Debe contener caracteres en mayusculas";
                liMayusculas.setAttribute("id", "mayusculas");
                lista.appendChild(liMayusculas);
            }
        }

        //LE DECIMOS AL USUARIO SI ESTE NO HA INTRODUCIDO CARACTER NO ALFANUMERICO
        if (caracterNoAlfanumerico) {
            var li = document.getElementById("caracterNoAlfanumerico");
            if (li != null) {
                lista.removeChild(li);
            }

        } else {
            var li = document.getElementById("caracterNoAlfanumerico");

            if (li == null) {
                var liNoAlfanumerico = document.createElement("li");
                liNoAlfanumerico.textContent = "Debe contener al menos 1 caracter no alfanumerico";
                liNoAlfanumerico.setAttribute("id", "caracterNoAlfanumerico");
                lista.appendChild(liNoAlfanumerico);
            }
        }

        //LE DECIMOS AL USUARIO SI ESTE NO HA INTRODUCIDO MAS DE 8 CARACTERES)
        if (minimo) {
            var li = document.getElementById("minimo");
            if (li != null) {
                lista.removeChild(li);
            }

        } else {
            var li = document.getElementById("minimo");

            if (li == null) {
                var liNoAlfanumerico = document.createElement("li");
                liNoAlfanumerico.textContent = "Debe contener al menos 8 caracteres";
                liNoAlfanumerico.setAttribute("id", "minimo");
                lista.appendChild(liNoAlfanumerico);
            }
        }

    } else {
        let lista = document.getElementById("errores");
        lista.style.display = "none"
    }

    if (minusculas && mayusculas && caracterNoAlfanumerico && minimo) {
        clave.style.border = "2px solid green"
    } else {
        clave.style.border = "2px solid red"

    }
}
document.addEventListener("input", function (e) {
    if (e.target.id == "codPostal") {
        if (isNaN(e.data)) {
            e.target.value = e.target.value.slice(0, -1);
        }
        if (codPostal.value.length > 5) {
            e.target.value = e.target.value.slice(0, -1);
        }
    }
    if (e.target.id == "claveRep") {
        console.log(e.target.value);
        console.log(document.getElementById("clave").value);
        if (e.target.value != document.getElementById("clave").value) {
            document.getElementById("passIncorrecta").classList = "visible";
            $boton = document.getElementById("crear");
            document.getElementById("claveRep").style.border = "2px solid red";

            contrasenaCorrecta = 0;
        } else if (e.target.value == document.getElementById("clave").value) {
            contrasenaCorrecta = 1;
            document.getElementById("passIncorrecta").classList = "oculto";
            document.getElementById("claveRep").style.border = "2px solid green";
            $boton = document.getElementById("crear");
        }
        if (fechaCorrecta == 1 && contrasenaCorrecta == 1) {
            console.log("hola");
            $boton = document.getElementById("crear");
            $boton.disabled = false;
        } else {
            $boton = document.getElementById("crear");
            $boton.disabled = true;
        }
    }

    if (e.target.id == "phone") {
        if (isNaN(e.data)) {
            e.target.value = e.target.value.slice(0, -1);
        }
        if (e.target.value.length > 14) {
            e.target.value = e.target.value.slice(0, -1);
        }
    }
    if (e.target.id == "fecha") {
        let fecha = new Date(document.getElementById("fecha").value);
        let fechaActual = Date.now();
        console.log(fecha);
        if (fechaActual - fecha.getTime() > 567648000000) {
            fechaCorrecta = 1;
        } else {
            fechaCorrecta = 0;
        }
    }
    if (fechaCorrecta == 1 && contrasenaCorrecta == 1) {
        $boton = document.getElementById("crear");
        $boton.disabled = false;
    } else {
        $boton = document.getElementById("crear");
        $boton.disabled = true;
    }

})
document.addEventListener("click", function (e) {
    if (e.target.id == "fecha") {
        let fecha = new Date(document.getElementById("fecha").value);
        let fechaActual = Date.now();
        console.log(fecha);
        if (fechaActual - fecha.getTime() > 567648000000) {
            fechaCorrecta = 1;
        } else {
            fechaCorrecta = 0;
        }
    }
    if (fechaCorrecta == 1 && contrasenaCorrecta == 1) {
        $boton = document.getElementById("crear");
        $boton.disabled = false;
    } else {
        $boton = document.getElementById("crear");
        $boton.disabled = true;
    }
    if (e.target.id == "captcha") {
        SECRET_KEY = "f510d229-08df-411d-9220-552f29bc7c64"
        VERIFY_URL = "https://api.hcaptcha.com/siteverify"
        let token = request.POST_DATA['h-captcha-response']

        let data = {
            'secret': SECRET_KEY,
            'response': token
        }
        let response = http.post(url = VERIFY_URL, data = data)
        let response_json = JSON.parse(response.content)
        console.log(response_json);
        let success = response_json['success']
    }

});

