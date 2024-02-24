$("#form_calculadora").validate({
    wrapper: "span",
    rules: {
        selectPlantel: {
            required: true,
        },
        selectPeriodo: {
            required: true,
        },
        selectNivel: {
            required: true,
        },
        nombreProspecto: {
            required: true,
        },
        apellidosProspecto: {
            required: true,
        },
        telefonoProspecto: {
            required: true,
        },
        emailProspecto: {
            required: true,
            email: true,
        },
    },
    messages: {
        selectPlantel: {
            required: "selecciona un plantel",
        },
        selectPeriodo: {
            required: "selecciona un periodo",
        },
        selectNivel: {
            required: "selecciona un nivel",
        },
        nombreProspecto: {
            required: "ingresa tu cnombre",
        },
        apellidosProspecto: {
            required: "ingresa tus apellidos",
        },
        telefonoProspecto: {
            required: "ingresa tu telefono",
        },
        emailProspecto: {
            required: "ingresa tu correo",
            email: "formato de correo incorrecto",
        },
    },
    submitHandler: function (form) {

        if ($('input:radio[name=typeTelefono]:checked').val() == undefined) {
            Swal.fire({
                icon: "error",
                title: "Campo obligatorio",
                text: "Por favor indica de que tipo es tu telefono",
                showConfirmButton: true,
            });

        } else {
            $("#envio_caluladora").prop("disabled", true);
            $('#envio_caluladora').html(`
                <div class="spinner-border me-1" style="width: 20px; height: 20px;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                Calculando
            `);


            let formData = new FormData(form);
            let ruta = setUrlBase() + "insertar/prospecto/calculadora";

            $.ajax({
                method: "POST",
                url: ruta,
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function (data) {
                let respuesta = JSON.parse(data);
                console.log(respuesta);

                let nombreProspecto = $('#nombreProspecto').val() + " " + $('#apellidosProspecto').val();
                let periodoProspecto = $('select[name="selectPeriodo"] option:selected').text();
                let nivelProspecto = $('select[name="selectNivel"] option:selected').text();

                $('#folioCrm').val('Folio: ' + respuesta.FolioCRM);
                $('#nombreCrm').val(nombreProspecto);
                $('#periodoCrm').val(periodoProspecto);
                $('#nivelCrm').val(nivelProspecto);

                getCarreras();

                $('#envio_caluladora').html(`Calcular`);

                $('#carouselExampleIndicators').addClass('d-none');
                $('#informacionCRM').removeClass('d-none')

            }).fail(function () {
                console.log("Algo salió mal");
            });
        }


    }
});