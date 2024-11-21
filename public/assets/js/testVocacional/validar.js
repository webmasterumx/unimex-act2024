$("#inicioTest").validate({
    rules: {
        nombre: {
            required: true,
            maxlength: 60,
        },
        apellidoPaterno: {
            required: true,
            maxlength: 20,
        },
        apellidoMaterno: {
            required: true,
            maxlength: 20,
        },
        celular: {
            required: true,
            maxlength: 10,
        },
        correo: {
            required: true,
            email: true,
            maxlength: 60,
        },

    },
    messages: {
        nombre: {
            required: "Nombre requerido",
            maxlength: "El número de caracteres máximo es 60."
        },
        apellidoPaterno: {
            required: "Apellido Paterno requerido",
            maxlength: "El número de caracteres máximo es 20."
        },
        apellidoMaterno: {
            required: "Apellido Materno requerido",
            maxlength: "El número de caracteres máximo es 20."
        },
        celular: {
            required: "Celular requerido",
            maxlength: "El teléfono celular debe tener mínimo 10 dígitos.",
            minlength: "El teléfono celular debe tener máximo 10 dígitos."
        },
        correo: {
            required: "E-mail requerido",
            email: "Ingresa un formato válido de correo.",
            maxlength: "El número de caracteres máximo es 60."
        },
    },
    submitHandler: function (form) {

        let formData = new FormData(form);

        let nombres = $('#nombre').val().replace(/ /g, "");
        let apellidoPaterno = $('#apellidoPaterno').val().replace(/ /g, "");
        let apellidoMaterno = $('#apellidoMaterno').val().replace(/ /g, "");

        if (nombres == "") {
            Swal.fire({
                icon: "error",
                text: "El campo de nombre no puede estar vacío",
            });
        }
        else if (apellidoPaterno == "") {
            Swal.fire({
                icon: "error",
                text: "El campo de apellido paterno no puede estar vacío",
            });
        }
        else if (apellidoMaterno == "") {
            Swal.fire({
                icon: "error",
                text: "El campo de apellido materno no puede estar vacío",
            });
        }
        else {

            $("#envioDatos").prop("disabled", true);
            $('#envioDatos').html(`
                <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                Registrando Datos
            `);

            let ruta = setUrlBase() + "TestVocacional/establecer/datos";

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

                if (data == 1 || data == true) {

                    Swal.fire({
                        icon: "success",
                        title: "Registro Exitoso",
                        showConfirmButton: false,
                    });

                    let rutaRedireccion = setUrlBase() + "TestVocacional/App";

                    $("#envioDatos").prop("disabled", false);
                    $('#envioDatos').html(`
                        <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        Redirigiendo al Test
                    `);

                    setTimeout("location.href='" + rutaRedireccion + "'", 2000);
                }
                else {

                }



            }).fail(function () {
                console.log("Algo salió mal");
            });

        }


    }
});

$("#insertar").validate({
    rules: {
        plantel: {
            required: true,
        },
        nivel: {
            required: true,
        },
        periodo: {
            required: true,
        },
        carrera: {
            required: true,
        },
        horario: {
            required: true,
        },

    },
    messages: {
        plantel: {
            required: "",
        },
        nivel: {
            required: "",
        },
        periodo: {
            required: "",
        },
        carrera: {
            required: "",
        },
        horario: {
            required: "",
        },
    },
    submitHandler: function (form) {

        let formData = new FormData(form);

        $("#envioDatos").prop("disabled", true);
        $('#envioDatos').html(`
            <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            Registrando Datos
        `);

        let ruta = setUrlBase() + "TestVocacional/terminar/registro";

        $.ajax({
            method: "POST",
            url: ruta,
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
        }).done(function (data) {

            $('#finalizar').html(`
                <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                Terminando el Registro
            `);

            console.log(data);

            if (data == 1 || data == true) {

                Swal.fire({
                    icon: "success",
                    title: "Registro Exitoso.",
                    showConfirmButton: false,
                });

                $('#envioDatos').html(`
                    <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    Redirigiendo al Test
                `);


            }
            else if (data == 0 || data == false) {
                Swal.fire({
                    icon: "error",
                    title: "Error al enviar el correo.",
                    showConfirmButton: false,
                });

                $("#envioDatos").prop("disabled", true);
                $('#envioDatos').html(`
                    <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    Finalizar
                `);
            }
            else {

                Swal.fire({
                    icon: "error",
                    title: "Error al finalizar el registro.",
                    showConfirmButton: false,
                });

                $("#envioDatos").prop("disabled", true);
                $('#envioDatos').html(`
                    <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    Finalizar
                `);

            }



        }).fail(function () {
            console.log("Algo salió mal");
        });


    }
});