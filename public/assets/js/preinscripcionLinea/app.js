$("#telefonoInscripcion").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$("#telefonoCelInscripcion").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

function estadoCampos(estado) {
    //disable campos 
    $("#nombreInscripcion").prop("disabled", estado);
    $("#apellidoPatInscripcion").prop("disabled", estado);
    $("#apellidoMatInscripcion").prop("disabled", estado);
    $("#telefonoInscripcion").prop("disabled", estado);
    $("#telefonoCelInscripcion").prop("disabled", estado);
    $("#calleInscripcion").prop("disabled", estado);
    $("#numeroInscripcion").prop("disabled", estado);
    $("#coloniaInscripcion").prop("disabled", estado);
    $("#estadoInscripcion").prop("disabled", estado);
    $("#municipioInscripcion").prop("disabled", estado);
    $("#plantelSelect").prop("disabled", estado);
    $("#periodoSelect").prop("disabled", estado);
    $("#nivelSelect").prop("disabled", estado);
    $("#carreraSelect").prop("disabled", estado);
    $("#horarioSelect").prop("disabled", estado);
}

function agregarProspecto() {

    let ruta = setUrlBase() + "registrar/prospecto/preinscripcion/linea";
    let fechaNacimiento = $('select[name=diaNacimiento]').val() + '-' + $('select[name=mesNacimiento]').val() + '-' + $('select[name=yearNacimiento]').val();

    let data = {
        Email: $('#correoInscripcion').val(),
        Nombre: $('#nombreInscripcion').val(),
        ApPaterno: $('#apellidoPatInscripcion').val(),
        ApMaterno: $('#apellidoMatInscripcion').val(),
        Telefono: $('#telefonoInscripcion').val(),
        Celular: $('#telefonoCelInscripcion').val(),
        Calle: $('#calleInscripcion').val(),
        NumeroCalle: $('#numeroInscripcion').val(),
        Colonia: $('#coloniaInscripcion').val(),
        EstadoID: $('select[name=estadoInscripcion]').val(),
        MunicipioID: $('select[name=municipioInscripcion]').val(),
        PlantelID: $('select[name=plantelSelect]').val(),
        ClavePeriodo: $('select[name=periodoSelect]').val(),
        ClaveNivel: $('select[name=nivelSelect]').val(),
        ClaveCarrera: $('select[name=carreraSelect]').val(),
        ClaveTurno: $('select[name=horarioSelect]').val(),
        UtpSource: "",
        DescripCampPublicidad: "",
        CampaignMedium: "",
        CampaignTerm: "",
        CampaignContent: "",
        WebSiteURL: "https://unimex.edu.mx",
        FechaDeNacimiento: fechaNacimiento,
    };

    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: ruta,
        data: data
    }).done(function (data) {
        console.log(data);

    }).fail(function () {
        console.log("Algo salió mal");
    });

}

function correccionDatos() {
    estadoCampos(false)

    $('#continuarProceso').addClass('d-none');
    $('#corregirDatos').addClass('d-none');
    $("#respuestaSuccess").addClass('d-none');
    $('#calcularPromo').removeClass('d-none');
}

function setVariablesPrecargadas() {

    $.ajax({
        method: "GET",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: setUrlBase() + "get/variables/preinscripcion",
    }).done(function (data) {
        console.log(data);
        if (data.carrera_preinscripcion != null) {
            console.log('hay variable de session para este modulo');

            carreraFinal = data.carrera_preinscripcion.replaceAll("_", " ");

            $("#nivelSelect").empty();
            $('#nivelSelect').append("<option selected value=''>" + data.nivel_preinscripcion + "</option>");

            $("#carreraSelect").empty();
            $('#carreraSelect').append("<option selected value=''>" + carreraFinal + "</option>");
        }
        else {
            $("#nivelSelect").empty();
            $('#nivelSelect').append(`<option value="" selected disabled>Selecciona un nivel</option>`);

            $("#carreraSelect").empty();
            $('#carreraSelect').append(`<option value="" selected disabled>Selecciona una carrera</option>`);
        }

    }).fail(function () {
        console.log("Algo salió mal");
    });
}

function recalculoDeComboNivel(ruta, data, element, info) {
    //! iniciamos los combos de nivel y carrera

    $('#nivelSelect').empty();
    $("#nivelSelect").append(`<option value="" selected>Recalculando..</option>`);
    $('#carreraSelect').empty();
    $("#carreraSelect").append(`<option value="" selected disabled>${info.carrera_preinscripcion.replaceAll("_", " ")}</option>`);

    //! realizamos la peticion correspondiente para obtener los niveles
    //! y hacer la comparacion con la variable precargada

    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: ruta,
        data: data
    }).done(function (data) {
        console.log(data);
        $('#nivelSelect').empty();
        $.each(data, function (index, value) {
            if (info.nivel_preinscripcion == value.descrip) {
                option = `<option value="${value.clave}" selected>${value.descrip}</option>`;
            } else {
                option = `<option value="${value.clave}">${value.descrip}</option>`;
            }
            $(element).append(option);
        });

        //! terminada la peticion calculamos las carreras y se hace la comparacion la variable precargada
        let plantel = $('select[name=plantelSelect]').val();
        let nivel = $('select[name=nivelSelect]').val();
        let periodo = $('select[name=periodoSelect]').val();

        let rutaGetCarreras = setUrlBase() + "getCarreras";

        let dataCarreras = {
            plantel: plantel,
            nivel: nivel,
            periodo: periodo
        };
        let elementCarreras = '#carreraSelect';

        $.ajax({
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: rutaGetCarreras,
            data: dataCarreras
        }).done(function (result) {

            console.log(result);

            $.each(result, function (index, value) {

                if (info.carrera_preinscripcion.replaceAll('_', " ") == value.descrip) {
                    option = `<option value="${value.clave}" selected>${value.descrip}</option>`;
                } else {
                    option = `<option value="${value.clave}">${value.descrip}</option>`;
                }

                $(elementCarreras).append(option);
            });

            $("select[name=carreraSelect]").prop("disabled", false);

            //! calculo de lista de horarios 

            let carrera = $('select[name=carreraSelect]').val();

            let rutaCarrera = setUrlBase() + "getHorarios";
            let dataCarrera = {
                plantel: plantel,
                nivel: nivel,
                periodo: periodo,
                carrera: carrera
            };
            let elementCarrera = '#horarioSelect';

            $.ajax({
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: rutaCarrera,
                data: dataCarrera
            }).done(function (list) {
                console.log(list);
                $.each(list, function (index, value) {
                    let option = `<option value="${value.clave}">${value.descrip}</option>`;
                    $(elementCarrera).append(option);
                });

                $("select[name=horarioSelect]").prop("disabled", false);

            }).fail(function () {
                console.log("Algo salió mal");
            });

        }).fail(function () {
            console.log("Algo salió mal");
        });



    }).fail(function () {
        console.log("Algo salió mal");
    });
}