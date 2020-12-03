$(document).ready(function () {
    $("#registroForm").validate({
        rules: {
            dni: {
                required: true,
                minlength: 8,
                maxlength: 8
            },
            nombres: "required",
            apellido_paterno: "required",
            apellido_materno: "required",
            correo: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            password_repite: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }
        },
        messages: {
            dni: {
                required: "Ingrese Dni",
                minlength: "Dni ingresado no valido",
                maxlength: "Dni ingresado no valido",
            },
            nombres: "Ingrese nombres",
            apellido_paterno: "Ingrese apellido paterno",
            apellido_materno: "Ingrese apellido materno",
            correo: "Ingrese una dirección de correo electrónico válida",
            password: {
                required: "Por favor ingrese una contraseña",
                minlength: "Tu contraseña debe tener al menos 5 caracteres"
            },
            password_repite: {
                required: "Por favor ingrese una contraseña",
                minlength: "Tu contraseña debe tener al menos 5 caracteres",
                equalTo: "Introduzca la misma contraseña que antes"
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});
