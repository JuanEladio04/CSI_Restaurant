function desaparecerNoticia() {
   
    var modalPagina = new bootstrap.Modal(document.getElementById('modalPagina'));
    var noticia = document.getElementById("botonNoticias");
   
    var modalPagina = new bootstrap.Modal(
     document.getElementById("modalPagina")
   );

   document.addEventListener("DOMContentLoaded", function () {
     modalPagina.show();
   });

   noticia.addEventListener("click", function () {
     setCookie("noticiaAceptada", true);
   });

   function setCookie(cname, cvalue, exdays) {
     const d = new Date();
     d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
     let expires = "expires=" + d.toUTCString();
     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
   }
}
    