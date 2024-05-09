
$("#servicio_alumnos").validate({
    wrapper: "span",
    rules: {
        name_service: {
            required: true,
        },
        email_service: {
            required: true,
            email: true,
        },
        phone_casa_service: {
            required: true,
        },
        matricula_service: {
            required: true,
        }
    },
    messages: {
        name_service: {
            required: "Debes ingresar un nombre válido.",
        },
        email_service: {
            required: "Debes ingresar un correo valido.",
            email: "Formato de correo incorrecto.",
        },
        phone_casa_service: {
            required: "Teléfono requerido.",
            minlength: "Debes ingresar el número a 10 digitos.",
            maxlength: "Debes ingresar el número a 10 digitos."
        },
        movil_service: {
            required: "Celular requerido.",
            minlength: "Debes ingresar el número a 10 digitos.",
            maxlength: "Debes ingresar el número a 10 digitos."
        },
        asunto_service : {
            required: "",
        },
        matricula_service: {
            required: "Matrícula requerida.",
        }
    },
    submitHandler: function (form) {

        //!validacion de operacion
        let operacion = Number($('#number1').val()) + Number($('#number2').val());
        let operacionUsuario = $('#operacion_service').val();

        if (operacion == operacionUsuario) {
            let ruta = setUrlBase() + "form/servicio/alumno";
            let formData = new FormData(form);

            $.ajax({
                method: "POST",
                url: ruta,
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function (data) {
                console.log(data);

                Swal.fire({
                    title: "¡REGISTRO EXITOSO!",
                    text: "Datos enviados correctamente",
                    icon: "success"
                });

            }).fail(function (e) {
                console.log("Request: " + JSON.stringify(e));
            });

            //form.reset();
        } else {
            Swal.fire({
                title: "Error!",
                text: "Resultado de la operación es incorrecto!",
                icon: "error"
            });
        }

        form.reset();

    }
});

$("#form_contacto").validate({
    rules: {
        nombre_prospecto: {
            required: true,
        },
        apellidos_prospecto: {
            required: true,
        },
        mail_prospecto: {
            required: true,
        },
        celular_prospecto: {
            required: true,
        },
        telefono_prospecto: {
            required: true,
        },
        plantelSelect: {
            required: true,
        },
        periodoSelect: {
            required: true,
        },
        nivelSelect: {
            required: true,
        },
        carreraSelect: {
            required: true,
        },
        horarioSelect: {
            required: true,
        }
    },
    messages: {
        nombre_prospecto: {
            required: "Nombre requerido.",
        },
        apellidos_prospecto: {
            required: "Apellidos requeridos.",
        },
        mail_prospecto: {
            required: "Correo obligatorio.",
            email: "Ingresa un formato valido de correo."
        },
        celular_prospecto: {
            required: "Teléfono celular obligatorio.",
            minlength: "Numero celular de 10 dig minimo.",
            minlength: "Numero celular de 10 dig maximo."
        },
        telefono_prospecto: {
            required: "Teléfono de casa obligatorio.",
            minlength: "Numero teléfonico de 10 dig minimo.",
            minlength: "Numero teléfonico de 10 dig maximo."
        },
        plantelSelect: {
            required: "Selecciona un plantel.",
        },
        periodoSelect: {
            required: "Por favor, dinos cuando quieres empezar.",
        },
        nivelSelect: {
            required: "Selecciona un nivel",
        },
        carreraSelect: {
            required: "Selecciona una carrera",
        },
        horarioSelect: {
            required: "Selecciona un horario",
        }
    },
    submitHandler: function (form) {

        $('#envio_contacto').prop("disabled", true);
        $('#envio_contacto').html(`
            <div class="spinner-border" style="width: 20px; height: 20px;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            &nbsp;Enviando Datos..
        `);


        form.submit();
    }
});

$("#form_trabaja").validate({
    wrapper: "span",
    rules: {
        nombre_trabajo: {
            required: true,
        },
        email_trabaja: {
            required: true,
            email: true,
        },
    },
    messages: {
        nombre_trabajo: {
            required: "Nombre requerido.",
        },
        email_trabaja: {
            required: "Correo requerido.",
            email: "Formato de correo incorrecto.",
        },
    },
    submitHandler: function (form) {

        //!validacion de operacion
        let operacion = Number($('#number3').val()) + Number($('#number4').val());
        let operacionUsuario = $('#operacion_trabaja').val();

        if (operacion == operacionUsuario) {
            let ruta = setUrlBase() + "form/trabaja/unimex";
            let formData = new FormData(form);

            $.ajax({
                method: "POST",
                url: ruta,
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function (data) {
                console.log(data);

                Swal.fire({
                    title: "¡REGISTRO EXITOSO!",
                    text: "Datos enviados correctamente",
                    icon: "success"
                });

                form.reset();

            }).fail(function (e) {
                console.log("Request: " + JSON.stringify(e));
            });
        } else {
            Swal.fire({
                title: "Error!",
                text: "Resultado de la operación es incorrecto!",
                icon: "error"
            });
        }



    }
});

$("#form_quejaSugerencia").validate({
    wrapper: "span",
    rules: {
        nombre_qys: {
            required: true,
        },
        mail_qys: {
            required: true,
            email: true,
        },
        matricula_qys: {
            required: true
        }
    },
    messages: {
        nombre_qys: {
            required: "Nombre requerido.",
        },
        mail_qys: {
            required: "Correo requerido.",
            email: "formato de correo incorrecto.",
        },
        matricula_qys: {
            required: "Matrícula obligatoria."
        }
    },
    submitHandler: function (form) {

        //!validacion de operacion
        let operacion = Number($('#number5').val()) + Number($('#number6').val());
        let operacionUsuario = $('#operacion_qys').val();

        if (operacion == operacionUsuario) {
            let ruta = setUrlBase() + "form/quejas/sugerencias";
            let formData = new FormData(form);

            $.ajax({
                method: "POST",
                url: ruta,
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function (data) {
                console.log(data);

                Swal.fire({
                    title: "¡REGISTRO EXITOSO!",
                    text: "Datos enviados correctamente",
                    icon: "success"
                });

                form.reset();

            }).fail(function (e) {
                console.log("Request: " + JSON.stringify(e));
            });
        } else {
            Swal.fire({
                title: "Error!",
                text: "Resultado de la operación es incorrecto!",
                icon: "error"
            });
        }

    }
});

$("#form_empresasOCC").validate({
    wrapper: "span",
    rules: {
        nombre_empresaOCC: {
            required: true,
        },
        contacto_empresaOCC: {
            required: true,
        },
        email_empresaOCC: {
            required: true,
            email: true,
        },
        telefono_empresaOCC: {
            required: true,
        },
        celular_empresaOCC: {
            required: true,
        },
        razon_empresaOCC: {
            required: true
        },
        rfc_empresaOCC: {
            required: true,
        },
        comentarios_empresaOCC: {
            required: true,
        }
    },
    messages: {
        nombre_empresaOCC: {
            required: "Nombre requerido.",
        },
        contacto_empresaOCC: {
            required: "Nombre del contacto dentro de la empresa requerido.",
        },
        email_empresaOCC: {
            required: "Matrícula obligatoria.",
            email: "Formato de correo incorrecto.",
        },
        telefono_empresaOCC: {
            required: "Teléfono requerido.",
        },
        celular_empresaOCC: {
            required: "Celular requerido.",
        },
        razon_empresaOCC: {
            required: "Razón social obligatoria."
        },
        rfc_empresaOCC: {
            required: "RFC requerido.",
        },
        comentarios_empresaOCC: {
            required: "Comentarios requeridos.",
        }
    },
    submitHandler: function (form) {

        //!validacion de operacion
        let operacion = Number($('#number7').val()) + Number($('#number8').val());
        let operacionUsuario = $('#operacion_empresaOCC').val();

        if (operacion == operacionUsuario) {
            let ruta = setUrlBase() + "form/empresas/occ";
            let formData = new FormData(form);

            $.ajax({
                method: "POST",
                url: ruta,
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function (data) {
                console.log(data);

                Swal.fire({
                    title: "¡REGISTRO EXITOSO!",
                    text: "Datos enviados correctamente",
                    icon: "success"
                });

                form.reset();

            }).fail(function (e) {
                console.log("Request: " + JSON.stringify(e));
            });
        } else {
            Swal.fire({
                title: "Error!",
                text: "Resultado de la operación es incorrecto!",
                icon: "error"
            });
        }
    }
});