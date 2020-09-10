$(document).ready(function () {
  $("#selectEquipo").on("change", function () {
    var equipo = $(this).val().toString().split("separar_serial")[1];
    var nombreEq = $("#s_equipo").text(equipo + " ");
    console.log(equipo);
  });

  $("#selectUser").on("change", function () {
    var user = $(this).val().toString().split("-")[1];
    $("#n_user").text(user);
    console.log(user);
  });

  // console.log($("#selectequipo").val());
  // if ($("#selectequipo").val() == undefined) {
  //   $("#asignar").attr("disabled", true);
  // } else {
  //   $("#asignar").attr("disabled", false);
  // }
  $("#formAsignar").on("submit", asignarEquipo);
});

function asignarEquipo(e) {
  e.preventDefault();
  const serial = document
    .getElementById("selectEquipo")
    .value.split("separar_serial")[0];
  const cedula = document.getElementById("selectUser").value.split("-")[0];
  $.ajax({
    type: "POST",
    url: "assets/php/asignarEquipo.php",
    dataType: "json",
    data: {
      cedula,
      serial,
    },
    success: function (data) {
      console.log(data);
      $("#result-asignacion").fadeIn(1000).html(data.mensaje);
      setTimeout(() => {
        window.location.href = "index.php";
      }, 1000);
    },
  });
}
