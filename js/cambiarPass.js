let contrasenaCorrecta = 0;

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
    if (e.target.id == "claveRep") {
        if (e.target.value != document.getElementById("clave").value) {
            $boton = document.getElementById("cambiarPass");
            document.getElementById("claveRep").style.border = "2px solid red";

            contrasenaCorrecta = 0;
        } else if (e.target.value == document.getElementById("clave").value) {
            contrasenaCorrecta = 1;
            document.getElementById("claveRep").style.border = "2px solid green";
            $boton = document.getElementById("cambiarPass");
        }
        if (contrasenaCorrecta == 1) {
            $boton = document.getElementById("cambiarPass");
            $boton.disabled = false;
        } else {
            $boton = document.getElementById("cambiarPass");
            $boton.disabled = true;
        }
    }


    
    if (contrasenaCorrecta == 1) {
        $boton = document.getElementById("cambiarPass");
        $boton.disabled = false;
    } else {
        $boton = document.getElementById("cambiarPass");
        $boton.disabled = true;
    }

})