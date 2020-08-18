$(document).ready(function () {
    var alerta;

    alerta = $("#alerta-login").val();

    if (alerta == "vacio") {
        toastr["error"]("Campos vacios ", "Error login:")
        toastr.options = {
            "positionClass": "toast-top-center",
        };

    } else {
        if (alerta == "incorrecto") {
            toastr.error("Datos ingresados incorrectos ", "Error login:")
            toastr.options = {
                "positionClass": "toast-top-center",
            }    
        }
        

    }




});


