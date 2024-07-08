$("#formPreincripcion").validate({

    rules: {
        correo: {
            required: true,
            email: true,
        },
        telefono: {
            required: true,
            minlength: 10,
            maxlength: 10,
        }
    },
    messages: {
        correo: {
            required: "Correo obligatorio.",
            email: "Ingresa un formato valido de correo."
        },
        telefono: {
            required: "Teléfono obligatorio.",
            minlength: "El teléfono celular debe tener mínimo 10 digitos.",
            maxlength: "El teléfono celular debe tener máximo 10 digitos."
        }
    },
    submitHandler: function (form) {

        $("#validarCorreo").prop("disabled", true);
        $('#validarCorreo').html(`
        <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        Validando Datos
        `);

        let formData = new FormData(form);
        let ruta = setUrlBase() + "validacion/preinscripcion";

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

            let respuesta = JSON.parse(data);
            console.log(respuesta);

            if (respuesta.acceso == true) {
                $('#validarCorreo').html(`
                <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                Redirigiendo
                `);
                let redireccion = setUrlBase() + "form/datos_generales/preinscripcion";

                setTimeout(`location.href='${redireccion}'`, 2000);
            } else if (respuesta.acceso == false) {
                $('#validarCorreo').html(`
                    <i class="bi bi-box-arrow-right"></i>
                    Continuar
                `);
                $("#validarCorreo").prop("disabled", false);

                $("#correo").val("");
                $("#telefono").val("");


                $('#statictConfirmPreinscripcion').modal('show');
            } else if (respuesta.acceso = "Descartar") {
                $("#validarCorreo").prop("disabled", false);
                $('#validarCorreo').html(`
                <i class="bi bi-box-arrow-right"></i>
                Continuar
                `);

                Swal.fire({
                    icon: "error",
                    title: "Correo ya registrado",
                });
            }


        }).fail(function () {
            console.log("Algo salió mal");
        });


    }
});

$("#formPromoPreinscripcion").validate({
    rules: {
        nombreInscripcion: {
            required: true,
        },
        apellidoPatInscripcion: {
            required: true,
        },
        apellidoMatInscripcion: {
            required: true,
        },
        diaNacimiento: {
            required: true,
        },
        mesNacimiento: {
            required: true,
        },
        yearNacimiento: {
            required: true,
        },
        telefonoInscripcion: {
            required: true,
            minlength: 10,
            maxlength: 10
        },
        telefonoCelInscripcion: {
            required: true,
            minlength: 10,
            maxlength: 10
        },
        calleInscripcion: {
            required: true,
        },
        numeroInscripcion: {
            required: true,
        },
        coloniaInscripcion: {
            required: true,
        },
        estadoInscripcion: {
            required: true,
        },
        municipioInscripcion: {
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
        },
    },
    messages: {
        nombreInscripcion: {
            required: "Nombre(s) obligatorio(s)",
        },
        apellidoPatInscripcion: {
            required: "Apellido paterno obligatorio.",
        },
        apellidoMatInscripcion: {
            required: "Apellido materno obligatorio.",
        },
        diaNacimiento: {
            required: "Día obligatorio.",
        },
        mesNacimiento: {
            required: "Mes obligatorio.",
        },
        yearNacimiento: {
            required: "Año obligatorio.",
        },
        telefonoInscripcion: {
            required: "Número de teléfono obligatorio.",
            minlength: "El teléfono celular debe tener mínimo 10 digitos.",
            maxlength: "El teléfono celular debe tener máximo 10 digitos."
        },
        telefonoCelInscripcion: {
            required: "Número de celular obligatorio.",
            minlength: "El teléfono celular debe tener mínimo 10 digitos.",
            maxlength: "El teléfono celular debe tener máximo 10 digitos."
        },
        calleInscripcion: {
            required: "Calle obligatoria.",
        },
        numeroInscripcion: {
            required: "Número obligatorio.",
        },
        coloniaInscripcion: {
            required: "Colonia obligatoria.",
        },
        estadoInscripcion: {
            required: "Estado obligatorio.",
        },
        municipioInscripcion: {
            required: "Municipio obligatorio.",
        },
        plantelSelect: {
            required: "Plantel obligatorio.",
        },
        periodoSelect: {
            required: "Periodo obligatorio.",
        },
        nivelSelect: {
            required: "Nivel obligatorio.",
        },
        carreraSelect: {
            required: "Carrera obligatoria.",
        },
        horarioSelect: {
            required: "Horario obligatorio.",
        }
    },
    submitHandler: function (form) {

        $('#calcularPromo').html(`
        <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        Calculando Promoción
        `);

        let formData = new FormData(form);
        let ruta = setUrlBase() + "obtener/promo/preinscripcion";

        $.ajax({
            method: "POST",
            url: ruta,
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
        }).done(function (data) {
            $('#calcularPromo').html(`
            <i class="bi bi-box-arrow-right"></i>
            Continuar
            `);
            console.log(data);
            estadoCampos(true);

            let respuesta = JSON.parse(data);
            console.log(respuesta);

            $('#calcularPromo').addClass("d-none");

            if (respuesta.Success == true) {
                $('#continuarProceso').removeClass('d-none');
                $('#corregirDatos').removeClass('d-none');
                $("#respuestaSuccess").removeClass('d-none');
                $('#precioPromo').html("$" + respuesta.Importe);
                $('#fechaLimitePromo').html(respuesta.FechaFinalPromocion);
                $("#respuestaError").addClass('d-none');
            }
            else {
                $("#respuestaError").removeClass('d-none');
                $('#corregirDatos').removeClass('d-none');
                $("#respuestaError").html(respuesta.MensajeDeError);
            }

        }).fail(function () {
            console.log("Algo salió mal");
        });


    }
});

