
$("#servicio_alumnos").validate({
    wrapper: "span",
    rules: {
        name_service: {
            required: true,
        },
        email_service: {
            required: true,
        },
        matricula_service: {
            required: true,
        }
    },
    messages: {
        name_service: {
            required: "nombre requerido",
        },
        email_service: {
            required: "correo requerido",
        },
        matricula_service: {
            required: "matricula requerida",
        }
    },
    submitHandler: function (form) {

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

        }).fail(function (e) {
            console.log("Request: " + JSON.stringify(e));
        });

        //form.reset();
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
            required: "Nombre requerido",
        },
        apellidos_prospecto: {
            required: "Apellidos requeridos",
        },
        mail_prospecto: {
            required: "Correo obligatorio",
            email: "Ingresa un formato valido de correo"
        },
        celular_prospecto: {
            required: "Teléfono celular obligatorio",
            minlength: "Numero celular de 10 dig minimo",
            minlength: "Numero celular de 10 dig maximo"
        },
        telefono_prospecto: {
            required: "Teléfono de casa obligatorio",
            minlength: "Numero teléfonico de 10 dig minimo",
            minlength: "Numero teléfonico de 10 dig maximo"
        },
        plantelSelect: {
            required: "Selecciona un plantel",
        },
        periodoSelect: {
            required: "Por favor dinos cuando quieres empezar",
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

        let ruta = setUrlBase() + "contacto/prospecto";
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
            let respuesta = JSON.parse(data);
            if (respuesta.estado == true) {
                Swal.fire({
                    title: "Éxito!",
                    text: respuesta.mensaje,
                    icon: "success"
                });
            }
            else{
                Swal.fire({
                    title: "Error!",
                    text: respuesta.mensaje,
                    icon: "error"
                });
            }

        }).fail(function (e) {
            console.log("Request: " + JSON.stringify(e));
        });

        form.reset();
    }
});