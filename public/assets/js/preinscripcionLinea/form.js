$("#formPreincripcion").validate({
    rules: {
        correo: {
            required: true,
            email: true,
        },
        telefono: {
            required: true,
        }
    },
    messages: {
        correo: {
            required: "Ingresa tu correo",
            email: "Formato de correo incorrecto",
        },
        telefono: {
            required: "Ingresa tu telefono",
        }
    },
    submitHandler: function (form) {

        let formData = new FormData(form);
        let ruta = setUrlBase() + "";

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
        },
        telefonoCelInscripcion: {
            required: true,
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
            required: "Ingresa tu correo",
        },
        apellidoPatInscripcion: {
            required: "Ingresa tu telefono",
        },
        apellidoMatInscripcion: {
            required: "Ingresa tu correo",
        },
        diaNacimiento: {
            required: "Ingresa tu telefono",
        },
        mesNacimiento: {
            required: "Ingresa tu correo",
        },
        yearNacimiento: {
            required: "Ingresa tu telefono",
        },
        telefonoInscripcion: {
            required: "Ingresa tu correo",
        },
        telefonoCelInscripcion: {
            required: "Ingresa tu telefono",
        },
        calleInscripcion: {
            required: "Ingresa tu correo",
        },
        numeroInscripcion: {
            required: "Ingresa tu telefono",
        },
        coloniaInscripcion: {
            required: "Ingresa tu correo",
        },
        estadoInscripcion: {
            required: "Ingresa tu telefono",
        },
        municipioInscripcion: {
            required: "Ingresa tu correo",
        },
        plantelSelect: {
            required: "Ingresa tu telefono",
        },
        periodoSelect: {
            required: "Ingresa tu correo",
        },
        nivelSelect: {
            required: "Ingresa tu telefono",
        },
        carreraSelect: {
            required: "Ingresa tu correo",
        },
        horarioSelect: {
            required: "Ingresa tu telefono",
        }
    },
    submitHandler: function (form) {

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

