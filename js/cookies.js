
    function desaparecerBanner(){
        var cookieAlert = document.getElementById("cookieAlert");
        var overlay = document.getElementById("ol");
        overlay.style.display = "none";
        cookieAlert.style.display = "none";  
    
        setCookie("cookiesAceptadas", true);
        setCookie("noticiasSemanales", true, 30);
        cookieAlert.style.display = "none";  
         
        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
    }


