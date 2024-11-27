$("#proyeccionProfesional").validate({
    // wrapper: "span",
    rules: {
        nombre: {
            required: true,
            maxlength: 60
        },
        matricula: {
            required: true,
            maxlength: 12
        },
        celular: {
            required: true,
            maxlength: 10,
            minlength: 10
        },
        email: {
            required: true,
            maxlength: 50
        },
        carrera: {
            required: true,
        },
        plantel: {
            required: true,
        },
        grupo: {
            required: true,
        },
    },
    messages: {
        nombre: {
            required: "Nombre requerido",
        },
        matricula: {
            required: "Matrícula requerida",
        },
        celular: {
            required: "Celular rquerido",
            minlength: "El celular debe tener mínimo 10 dígitos.",
            maxlength: "El celular debe tener máximo 10 dígitos."
        },
        email: {
            required: "Correo requerido.",
            email: "Ingresa un formato válido de correo.",
            maxlength: "El número de caracteres máximo es 50."
        },
        carrera: {
            required: "Carrera requerida.",
        },
        plantel: {
            required: "Plantel requerido.",
        },
        grupo: {
            required: "Grupo requerido"
        },
    },
    submitHandler: function (form) {

        let formData = new FormData(form);

        let ruta = setUrlBase() + "proyeccion-profesional/registro";

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

            $('#enviarDatos').prop("disabled", true);
            $('#enviarDatos').html(`
                 <div class="spinner-border" style="width: 20px; height: 20px;" role="status">
                     <span class="visually-hidden">Loading...</span>
                 </div>
                 &nbsp;Enviando Datos..
             `);

            let respuesta = JSON.parse(data);
            console.log(respuesta);

            if (respuesta.OperacionExito == undefined || respuesta.OperacionExito == null) {
                Swal.fire({
                    title: "Error",
                    text: "Error en el servidor porfavor intentalo más tarde",
                    icon: "error"
                });

                $('#enviarDatos').prop("disabled", false);
                $('#enviarDatos').html(`
                    Enviar
                `);

            }
            else {
                if (respuesta.OperacionExito == true) {
                    Swal.fire({
                        title: "Registro Exitoso!",
                        text: "Tu registro se realizo exitosamente.",
                        icon: "success"
                    });

                    rutaRedireccion = setUrlBase() + "proyeccion-profesional";

                    setTimeout("location.href='" + rutaRedireccion + "'", 3000);

                    $('#enviarDatos').html(`
                         <div class="spinner-border" style="width: 20px; height: 20px;" role="status">
                             <span class="visually-hidden">Loading...</span>
                         </div>
                         &nbsp;Recargando página...
                     `);
                }
                else {
                    Swal.fire({
                        title: "Error",
                        text: "Error en el servidor porfavor intentalo más tarde",
                        icon: "error"
                    });

                    $('#enviarDatos').prop("disabled", false);
                    $('#enviarDatos').html(`
                        Enviar
                    `);
                }
            }


        }).fail(function () {
            console.log("Algo salió mal");
        });


    }
});