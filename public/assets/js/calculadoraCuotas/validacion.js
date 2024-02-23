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

            $('#carouselExampleIndicators').addClass('d-none');

            $('#folio_crm').html('Folio: ' + respuesta.FolioCRM);

            getCarreras();

            $('#envio_caluladora').html(`
                Calcular
            `);

            $('#informacionCRM').removeClass('d-none')

        }).fail(function () {
            console.log("Algo salió mal");
        });

    }
});

function getCarreras() {
    let clavePlantel = $('select[name=selectPlantel]').val();
    let clavePeriodo = $('select[name=selectPeriodo]').val();
    let claveNivel = $('select[name=selectNivel]').val();

    let data = {
        "plantel": clavePlantel,
        "nivel": claveNivel,
        "periodo": clavePeriodo
    }
    console.log(data);

    let ruta = setUrlBase() + "getCarreras";

    $.ajax({
        method: "POST",
        url: ruta,
        dataType: "json",
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    }).done(function (data) {
        console.log(data);
        for (let index = 0; index < data.length; index++) { //recorrer el array de carreras
            const element = data[index]; // se establece un elemento por carrera optenida
            let option = `<option value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por carrera
            $("#selectCarrera").append(option); // se inserta la carrera de cada elemento
        }

    }).fail(function () {
        console.log("Algo salió mal");
    });
}