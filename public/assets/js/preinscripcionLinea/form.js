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