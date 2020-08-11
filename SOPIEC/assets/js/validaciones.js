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
var actualizar = document.querySelector("#modificarUser");

//Valida que la contraseña tenga mas de 8 caracteres
contrasena.addEventListener("change", function () {
  var contra = contrasena.value;
  if (contra.length < 8) {
    mensaje.style.display = "block";
  } else {
    mensaje.style.display = "none";
  }
});


// Verificar campos vacios al actualizar
// window.addEventListener("load", function (event) {
  // document.getElementById("modificarUser").addEventListener
 actualizar.addEventListener("click", () => {
    console.log("por si las moscas");
    // console.log(cedula.value,area.value,primer_nombre.value,primer_apellido.value,contrasena.value, addrol.value);
    if (
      cedula.value == "" ||
      area.value == "" ||
      primer_nombre.value == "" ||
      primer_apellido.value == "" ||
      email.value == "" ||
      contrasena.value == "" ||
      addrol.value == ""
    ) {
      event.preventDefault();
      toastr["error"](
        "Por favor llene todos los campos requeridos y/o defina un rol para este usuario",
        "Error"
      );
      toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: false,
        positionClass: "toast-top-right",
        preventDuplicates: true,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
      };

      // Validación del formato de correo
    } else if (!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i.test(email.value)) {
      toastr["warning"]("Digite un correo valido.", "Error");
      toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: false,
        positionClass: "toast-top-right",
        preventDuplicates: true,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
      };
      event.preventDefault();
    } else {
      toastr["success"](
        "El usuario" +
          primer_nombre +
          " " +
          "con cedula #" +
          cedula.value +
          " ha sido actualizado de forma exitosa",
        "¡Usuario Actualizado!"
      );
      toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: false,
        positionClass: "toast-top-right",
        preventDuplicates: true,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
      };
    }
  });
// });

//   Validar campos vacios Regisrar
registrar.addEventListener("click", function () {
  if (
    cedula.value == "" ||
    area.value == "" ||
    primer_nombre.value == "" ||
    primer_apellido.value == "" ||
    email.value == "" ||
    contrasena.value == "" ||
    addrol.value == ""
  ) {
    toastr["error"](
      "Por favor llene todos los campos requeridos y/o defina un rol para este usuario",
      "Error"
    );

    toastr.options = {
      closeButton: true,
      debug: false,
      newestOnTop: false,
      progressBar: false,
      positionClass: "toast-top-right",
      preventDuplicates: true,
      onclick: null,
      showDuration: "300",
      hideDuration: "1000",
      timeOut: "5000",
      extendedTimeOut: "1000",
      showEasing: "swing",
      hideEasing: "linear",
      showMethod: "fadeIn",
      hideMethod: "fadeOut",
    };
    event.preventDefault();
    // Validación del formato de correo
  } else if (!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i.test(email.value)) {
    toastr["warning"]("Digite un correo valido.", "Error");

    toastr.options = {
      closeButton: true,
      debug: false,
      newestOnTop: false,
      progressBar: false,
      positionClass: "toast-top-right",
      preventDuplicates: true,
      onclick: null,
      showDuration: "300",
      hideDuration: "1000",
      timeOut: "5000",
      extendedTimeOut: "1000",
      showEasing: "swing",
      hideEasing: "linear",
      showMethod: "fadeIn",
      hideMethod: "fadeOut",
    };
    event.preventDefault();
  } else {
    toastr["success"](
      "El usuario" +
        primer_nombre +
        " " +
        "con cedula #" +
        cedula.value +
        " ha sido registrado de forma exitosa",
      "¡Usuario registrado!"
    );

    toastr.options = {
      closeButton: true,
      debug: false,
      newestOnTop: false,
      progressBar: false,
      positionClass: "toast-top-right",
      preventDuplicates: true,
      onclick: null,
      showDuration: "300",
      hideDuration: "1000",
      timeOut: "5000",
      extendedTimeOut: "1000",
      showEasing: "swing",
      hideEasing: "linear",
      showMethod: "fadeIn",
      hideMethod: "fadeOut",
    };
  }
});
