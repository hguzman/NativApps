var nombre = document.querySelector("#nombre");
var apellido = document.querySelector("#apellido");
var telefono = document.querySelector("#area");
var email = document.querySelector("#email");
$(document).ready(function () {
  // Validaciones de formulario
  $("#formContactenos").bootstrapValidator({
    message: "This value is not valid",
    feedbackIcons: {
      valid: "glyphicon glyphicon-ok",
      invalid: "glyphicon glyphicon-remove",
      validating: "glyphicon glyphicon-refresh",
    },
    fields: {
      nombre: {
        message: "Porfavor digite un nombre valido}",
        validators: {
          notEmpty: {
            message: "El nombre no puede estar vacio",
          },
          stringLength: {
            min: 2,
            max: 20,
            message: "EL nombre debe contener como minimo 2 caracteres, max 20",
          },
          regexp: {
            regexp: /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/,
            message: "No se aceptan caracterés especiales en este campo",
          },
        },
      },
     
      apellido: {
        message: "Porfavor digite un apelido valido",
        validators: {
          notEmpty: {
            message: "El primer apelido no puede estar vacio",
          },
          stringLength: {
            min: 2,
            max: 45,
            message: "apelido invalido",
          },
          regexp: {
            regexp: /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/,
            message: "No se aceptan caracterés especiales en este campo",
          },
        },
      },
      segundo_nombre: {
        message: "Porfavor digite un nombre valido",
        validators: {
          // notEmpty: {
          //   message: "Este campo es obligatorio",
          // },
          stringLength: {
            min: 3,
            max: 45,
            message: "Nombre invalido",
          },
          regexp: {
            regexp: /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/,
            message: "No se aceptan caracterés especiales en este campo",
          },
        },
      },
      apellido: {
        message: "Porfavor digite un apellido valido",
        validators: {
          notEmpty: {
            message: "El  apellido no puede estar vacio",
          },
          stringLength: {
            min: 3,
            max: 45,
            message: "Apellido invalido",
          },
          regexp: {
            regexp: /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/,
            message: "No se aceptan números especiales en este campo",
          },
        },
      },
      email: {
        validators: {
          notEmpty: {
            message: "El correo no puede estar vacio",
          },
          emailAddress: {
            message: "Correo invalido",
          },
        },
      },
    },
  });
});
