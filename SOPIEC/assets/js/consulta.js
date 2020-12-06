$(buscarUsuarios());

function buscarUsuarios(consultaUsuarios) {
  $.ajax({
    type: "POST",
    url: "assets/php/buscarUsuarios.php",
    dataType: "html",
    data: { consultaUsuarios: consultaUsuarios },
  })
    .done(function (respuestaUsuarios) {
      $("#datos").html(respuestaUsuarios);
    })
    .fail(function () {
      console.log("Error");
    });
}

$(document).on("keyup", "#buscar_usuario", function () {
  let valor = $(this).val();
  if (valor !== "") {
    buscarUsuarios(valor);
  } else {
    buscarUsuarios();
  }
});

// Equipos
$(buscarEquipos());
function buscarEquipos(consultaEquipos) {
  $.ajax({
    type: "POST",
    url: "assets/php/buscarEquipos.php",
    dataType: "html",
    data: { consultaEquipos: consultaEquipos },
  })
    .done(function (respuestaEquipos) {
      $("#datosEquipos").html(respuestaEquipos);
    })
    .fail(function () {
      console.log("Error");
    });
}

$(document).on("keyup", "#buscarEquipos", function () {
  let valor = $(this).val();
  if (valor !== "") {
    buscarEquipos(valor);
  } else {
    buscarEquipos();
  }
});

// User Equipos
$(buscarEquipos_user());
function buscarEquipos_user(consultaEquipos_user) {
  $.ajax({
    type: "POST",
    url: "assets/php/buscarEquipos_user.php",
    dataType: "html",
    data: { consultaEquipos_user: consultaEquipos_user },
  })
    .done(function (respuestaEquipos_user) {
      $("#datosEquipos_user").html(respuestaEquipos_user);
    })
    .fail(function () {
      console.log("Error");
    });
}

$(document).on("keyup", "#buscarEquipos_user", function () {
  let valor = $(this).val();
  if (valor !== "") {
    buscarEquipos_user(valor);
  } else {
    buscarEquipos_user();
  }
});
