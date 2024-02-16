
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