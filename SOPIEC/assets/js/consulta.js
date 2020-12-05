$(buscar_datos());

function buscar_datos(consulta) {
  $.ajax({
    type: "POST",
    url: "assets/php/buscar.php",
    dataType: "html",
    data: {consulta: consulta },
  })
    .done(function (respuesta) {
      $("#datos").html(respuesta);
    })
    .fail(function () {
      console.log("Error");
    });
}

$(document).on("keyup", "#buscar_usuario", function () {
  let valor = $(this).val();
  console.log(valor);
  if (valor !== "") {
    buscar_datos(valor);
  } else {
    buscar_datos();
    console.log("se trajeron datos sin parametro");
  }
});
