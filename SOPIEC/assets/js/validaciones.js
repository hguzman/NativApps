var cedula = document.querySelector("#cedula");
var primer_nombre = document.querySelector("#primer_nombre");
var area = document.querySelector("#area");
var primer_apellido = document.querySelector("#primer_apellido");
var email = document.querySelector("#email");
var contrasena = document.querySelector("#contrasena");
var mensaje = document.querySelector(".mensaje");
var registrar = document.querySelector("#registrar");
var del = document.getElementById(del);
var addrol = document.querySelector("#addrol");

//Valida que la contraseña tenga mas de 8 caracteres
contrasena.addEventListener("change", function () {
  var contra = contrasena.value;
  if (contra.length < 8) {
    mensaje.style.display = "block";
  } else {
    mensaje.style.display = "none";
  }
});


//   Validar campos vacios
registrar.addEventListener("click", function () {
  if (
    cedula.value == "" ||
    area.value == "" ||
    primer_nombre.value == "" ||
    primer_apellido.value == "" ||
    email.value == "" ||
    contrasena.value == "" || addrol.value ==""
  ) {
    alert("Por favor llene todos los campos requeridos y/o defina un rol para este usuario");
    event.preventDefault();
  } else {
    if (
      (cedula.value != "") &
      (area.value != "") &
      (primer_nombre.value != "") &
      (primer_apellido.value != "") &
      (email.value == "@") &
      (contrasena.value != "")
    ) {
      alert("Usuario registrado de manera exitosa.");
    }
  }
});
