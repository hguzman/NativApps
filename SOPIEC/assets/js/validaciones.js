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

$(document).ready(function () {
  // Validaciones registrar usuario
  $("#formRegistrar").bootstrapValidator({
    message: "This value is not valid",
    feedbackIcons: {
      valid: "glyphicon glyphicon-ok",
      invalid: "glyphicon glyphicon-remove",
      validating: "glyphicon glyphicon-refresh",
    },
    fields: {
      cedula: {
        message: "Porfavor digite una cedula valida",
        validators: {
          notEmpty: {
            message: "La cedula no puede estar vacia",
          },
          stringLength: {
            min: 5,
            max: 10,
            message: "La cedula debe contener como minimo 5 caracteres max 10",
          },
          regexp: {
            regexp: /^[a-zA-Z0-9_]+$/,
            message: "No se aceptan caracterés especiales en este campo",
          },
        },
      },
      area: {
        message: "Porfavor digite un area",
        validators: {
          notEmpty: {
            message: "El area no puede estar vacia",
          },
          stringLength: {
            min: 1,
            max: 1,
            message: "El area debe ser un solo digito",
          },
          regexp: {
            regexp: /^[a-zA-Z-1-5_]+$/,
            message: "El numero de area minimo es 1 y maximo 5",
          },
        },
      },
      primer_nombre: {
        message: "Porfavor digite un nombre valido",
        validators: {
          notEmpty: {
            message: "El primer nombre no puede estar vacio",
          },
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
      primer_apellido: {
        message: "Porfavor digite un apellido valido",
        validators: {
          notEmpty: {
            message: "El primer apellido no puede estar vacio",
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
      segundo_apellido: {
        message: "Porfavor digite un apellido valido",
        validators: {
          // notEmpty: {
          //   message: "El primer apellido no puede estar vacio",
          // },
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
      contrasena: {
        message: "Por favor digite una contraseña valida",
        validators: {
          notEmpty: {
            message: "La contraseña no puede estar vacia",
          },
          stringLength: {
            min: 5,
            max: 100,
            message: "La contraseña debe ser mayor de 5 caracteres",
          },
          // regexp: {
          //   regexp: /^[a-zA-Z_]+$/,
          //   message: "No se aceptan números especiales en este campo",
          // },
        },
      },
      addrol: {
        message: "Elija un rol para este usuario",
        validators: {
          notEmpty: {
            message: "Elija un rol para este usuario",
          },
        },
      },
    },
  });
  // Validaciones actualizar usuario
  $("#formActualizar").bootstrapValidator({
    message: "This value is not valid",
    feedbackIcons: {
      valid: "glyphicon glyphicon-ok",
      invalid: "glyphicon glyphicon-remove",
      validating: "glyphicon glyphicon-refresh",
    },
    fields: {
      cedula: {
        message: "Porfavor digite una cedula valida",
        validators: {
          notEmpty: {
            message: "La cedula no puede estar vacia",
          },
          stringLength: {
            min: 5,
            max: 10,
            message: "La cedula debe contener como minimo 5 caracteres max 10",
          },
          regexp: {
            regexp: /^[a-zA-Z-0-9_]+$/,
            message: "No se aceptan caracterés especiales en este campo",
          },
        },
      },
      area: {
        message: "Porfavor digite un area",
        validators: {
          notEmpty: {
            message: "El area no puede estar vacia",
          },
          stringLength: {
            min: 1,
            max: 1,
            message: "El area debe ser un solo digito",
          },
          regexp: {
            regexp: /^[a-zA-Z-1-5_]+$/,
            message: "El numero de area minimo es 1 y maximo 5",
          },
        },
      },
      primer_nombre: {
        message: "Porfavor digite un nombre valido",
        validators: {
          notEmpty: {
            message: "El primer nombre no puede estar vacio",
          },
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
      primer_apellido: {
        message: "Porfavor digite un apellido valido",
        validators: {
          notEmpty: {
            message: "El primer apellido no puede estar vacio",
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
      segundo_apellido: {
        message: "Porfavor digite un apellido valido",
        validators: {
          // notEmpty: {
          //   message: "El primer apellido no puede estar vacio",
          // },
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
      contrasena: {
        message: "Por favor digite una contraseña valida",
        validators: {
          notEmpty: {
            message: "La contraseña no puede estar vacia",
          },
          stringLength: {
            min: 5,
            max: 100,
            message: "La contraseña debe ser mayor de 5 caracteres",
          },
          // regexp: {
          //   regexp: /^[a-zA-Z_]+$/,
          //   message: "No se aceptan números especiales en este campo",
          // },
        },
      },
      addrol: {
        message: "Elija un rol para este usuario",
        validators: {
          notEmpty: {
            message: "Elija un rol para este usuario",
          },
        },
      },
    },
  });

  //Validaciones registrar nuevo equipo
  // $(document).ready(function () {
  $("#formregistrarequipo").bootstrapValidator({
    message: "This value is not valid",
    feedbackIcons: {
      valid: "glyphicon glyphicon-ok",
      invalid: "glyphicon glyphicon-remove",
      validating: "glyphicon glyphicon-refresh",
    },
    fields: {
      serial: {
        message: "Porfavor digite un serial valido",
        validators: {
          notEmpty: {
            message: "El serial no puede estar vacio",
          },
        },
      },
      marca: {
        message: "Elija una marca ",
        validators: {
          notEmpty: {
            message: "Elija una marca ",
          },
        },
      },
      nombre: {
        message: "Porfavor digite un nombre valido",
        validators: {
          notEmpty: {
            message: "ese campo no puede estar vacio",
          },
        },
      },
      tipo_equipo: {
        message: "Elija el tipo de equipo ",
        validators: {
          notEmpty: {
            message: "Elija el tipo de equipo ",
          },
        },
      },
      modelo_equipo: {
        message: "Porfavor digite un Modelo  valido",
        validators: {
          notEmpty: {
            message: "ese campo no puede estar vacio",
          },
        },
      },
      procesador: {
        message: "Elija un estado para este usuario",
        validators: {
          notEmpty: {
            message: "Elija un estado para este usuario",
          },
        },
      },
      ram: {
        message: "Porfavor digite una ram valida",
        validators: {
          notEmpty: {
            message: "ese campo no puede estar vacio",
          },
        },
      },
      disco_duro: {
        message: "Porfavor digite un modelo de equipo valido",
        validators: {
          notEmpty: {
            message: "Este campo no puede estar vacio",
          },
          stringLength: {
            min: 1,
            max: 45,
            message: "modelo de equipo  invalido",
          },
        },
      },
      sistema_operativo: {
        message: "Elija un estadp para este usuario",
        validators: {
          notEmpty: {
            message: "Elija un estado para este usuario",
          },
        },
      },
      estado: {
        message: "Elija un estadp para este usuario",
        validators: {
          notEmpty: {
            message: "Elija un estado para este usuario",
          },
        },
      },
    },
  });
  // });
  //Validaciones actualizar equipo
  // $(document).ready(function () {
  $("#formActualizarEquipo").bootstrapValidator({
    message: "This value is not valid",
    feedbackIcons: {
      valid: "glyphicon glyphicon-ok",
      invalid: "glyphicon glyphicon-remove",
      validating: "glyphicon glyphicon-refresh",
    },
    fields: {
      serial: {
        message: "Porfavor digite un serial valido",
        validators: {
          notEmpty: {
            message: "El serial no puede estar vacio",
          },
        },
      },
      marca: {
        message: "Elija una marca ",
        validators: {
          notEmpty: {
            message: "Elija una marca ",
          },
        },
      },
      nombre: {
        message: "Porfavor digite un nombre valido",
        validators: {
          notEmpty: {
            message: "ese campo no puede estar vacio",
          },
        },
      },
      tipo_equipo: {
        message: "Elija el tipo de equipo ",
        validators: {
          notEmpty: {
            message: "Elija el tipo de equipo ",
          },
        },
      },
      modelo_equipo: {
        message: "Porfavor digite un Modelo  valido",
        validators: {
          notEmpty: {
            message: "ese campo no puede estar vacio",
          },
        },
      },
      procesador: {
        message: "Elija un estado para este usuario",
        validators: {
          notEmpty: {
            message: "Elija un estado para este usuario",
          },
        },
      },
      ram: {
        message: "Porfavor digite una ram valida",
        validators: {
          notEmpty: {
            message: "ese campo no puede estar vacio",
          },
        },
      },
      disco_duro: {
        message: "Porfavor digite un modelo de equipo valido",
        validators: {
          notEmpty: {
            message: "Este campo no puede estar vacio",
          },
          stringLength: {
            min: 1,
            max: 45,
            message: "modelo de equipo  invalido",
          },
        },
      },
      sistema_operativo: {
        message: "Elija un estadp para este usuario",
        validators: {
          notEmpty: {
            message: "Elija un estado para este usuario",
          },
        },
      },
      estado: {
        message: "Elija un estadp para este usuario",
        validators: {
          notEmpty: {
            message: "Elija un estado para este usuario",
          },
        },
      },
    },
  });
  // });
});
