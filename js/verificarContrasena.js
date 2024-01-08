function verificarClave(){
    let clave = document.getElementById("clave");
    let minusculas;
    let mayusculas;
    let caracterNoAlfanumerico;
    let minimo;
    console.clear();    
    if( /[a-z]/.test(clave.value)){
        minusculas = true;
        console.log(minusculas);
    }else{
        minusculas = false;
    };

    if(/[A-Z]/.test(clave.value)){
        mayusculas = true;
        console.log(mayusculas);
    }else{
        mayusculas = false;
    };
    
    if( /[^a-zA-Z0-9]/.test(clave.value)){
        caracterNoAlfanumerico = true;
        console.log(caracterAlfanumerico);
    }else{
        caracterAlfanumerico = false;
    }

    if(clave.value.length >= 8){
        minimo = true
        console.log(minimo);
    }else{
        minimo = false;
    }

    if(!minusculas || !mayusculas || !caracterNoAlfanumerico || !minimo){
        let lista = document.getElementById("errores");
        lista.style.display = "block"
        

        // LE DECIMOS AL USUARIO SI ESTE NO HA INTRODUCIDO MINUSCULAS
        if(minusculas){
            var li = document.getElementById("minusculas");
            if(li != null){
                lista.removeChild(li);
            }

        }else{
            var li = document.getElementById("minusculas");

            if(li == null){
            var liMinusculas = document.createElement("li");
            liMinusculas.textContent = "Debe contener caracteres en minuscula";
            liMinusculas.setAttribute("id", "minusculas");
            lista.appendChild(liMinusculas);
            }
        }

        //LE DECIMOS AL USUARIO SI ESTE NO HA INTRODUCIDO MAYUSCULAS
        if(mayusculas){
            var li = document.getElementById("mayusculas");
            if(li != null){
                lista.removeChild(li);
            }

        }else{
            var li = document.getElementById("mayusculas");

            if(li == null){
            var liMayusculas = document.createElement("li");
            liMayusculas.textContent = "Debe contener caracteres en mayusculas";
            liMayusculas.setAttribute("id", "mayusculas");
            lista.appendChild(liMayusculas);
            }
        }

        //LE DECIMOS AL USUARIO SI ESTE NO HA INTRODUCIDO CARACTER NO ALFANUMERICO
        if(caracterNoAlfanumerico){
            var li = document.getElementById("caracterNoAlfanumerico");
            if(li != null){
                lista.removeChild(li);
            }

        }else{
            var li = document.getElementById("caracterNoAlfanumerico");

            if(li == null){
            var liNoAlfanumerico = document.createElement("li");
            liNoAlfanumerico.textContent = "Debe contener al menos 1 caracter no alfanumerico";
            liNoAlfanumerico.setAttribute("id", "caracterNoAlfanumerico");
            lista.appendChild(liNoAlfanumerico);
            }
        }

        //LE DECIMOS AL USUARIO SI ESTE NO HA INTRODUCIDO MAS DE 8 CARACTERES)
        if(minimo){
            var li = document.getElementById("minimo");
            if(li != null){
                lista.removeChild(li);
            }

        }else{
            var li = document.getElementById("minimo");

            if(li == null){
            var liNoAlfanumerico = document.createElement("li");
            liNoAlfanumerico.textContent = "Debe contener al menos 8 caracteres";
            liNoAlfanumerico.setAttribute("id", "minimo");
            lista.appendChild(liNoAlfanumerico);
            }
        }

    }else{
        let lista = document.getElementById("errores");
        lista.style.display = "none"
    }

    if(minusculas && mayusculas && caracterNoAlfanumerico && minimo){
        clave.style.backgroundColor = "green"
    }
}