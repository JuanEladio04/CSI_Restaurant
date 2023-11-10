function moveToSelected(element) {
  var selected;
  if (element == "next") {
    selected = $(".selected").next();
    if ($(selected).length == 0) {
      // Si no existe, es porque estamos al final del carrusel, por lo que seleccionamos el primer elemento
      selected = $(".carousel .item").first();
    }
  } else if (element == "prev") {
    selected = $(".selected").prev();
    if ($(selected).length == 0) {
      // Si no existe, es porque estamos al principio del carrusel, por lo que seleccionamos el último elemento
      selected = $(".carousel .item").last();
    }
  } else {
    selected = element;
  }

  var next = $(selected).next();
  var prev = $(selected).prev();
  var prevSecond = $(prev).prev();
  var nextSecond = $(next).next();

  // Elimina solo las clases necesarias
  $(".selected").removeClass("selected");
  $(selected).addClass("selected");

  $(".prev").removeClass("prev");
  $(prev).addClass("prev");

  $(".next").removeClass("next");
  $(next).addClass("next");

  $(".nextRightSecond").removeClass("nextRightSecond");
  $(nextSecond).addClass("nextRightSecond");

  $(".prevLeftSecond").removeClass("prevLeftSecond");
  $(prevSecond).addClass("prevLeftSecond");

  // Asegúrate de que solo los elementos necesarios tengan las clases hideRight y hideLeft
  $(nextSecond).nextAll().not('.nextRightSecond').removeClass('hideRight').addClass('hideRight');
  $(prevSecond).prevAll().not('.prevLeftSecond').removeClass('hideLeft').addClass('hideLeft');

  // Deshabilita los botones si estamos al principio o al final del carrusel
  if ($(".selected").is(":first-child")) {
    $("#prev").prop("disabled", true);
  } else {
    $("#prev").prop("disabled", false);
  }

  if ($(".selected").is(":last-child")) {
    $("#next").prop("disabled", true);
  } else {
    $("#next").prop("disabled", false);
  }
}

// Asegúrate de llamar a la función moveToSelected cuando se cargue la página para deshabilitar los botones correctamente
$(document).ready(function() {
  moveToSelected($(".selected"));
});


$('#carousel div').click(function () {
  moveToSelected($(this));
});

$('#prev').click(function () {
  moveToSelected('prev');
});

$('#next').click(function () {
  moveToSelected('next');
});
