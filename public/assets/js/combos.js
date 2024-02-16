$(document).ready(function () {

    // Inicializar con todos los combos del formulario - Contacto -
    // Desabilitados excepto el de Plantel
    $("select[name=nivelSelect]").prop("disabled", true);
    $("select[name=periodoSelect]").prop("disabled", true);
    $("select[name=carreraSelect]").prop("disabled", true);
    $("select[name=horarioSelect]").prop("disabled", true);

    /*
     * obtiene los planteles para el formulario de contacto.
     * Paginas :
     * - Inicio -
     * - Todas las pagina de Licenciatura, Licenciatura SUA y Postgrado -
     * - Pagina de Contacto -
     */
    $.ajax({
        method: "GET",
        url: setUrlBase() + "getPlanteles",
    }).done(function (data) {
        $.each(data, function (index, value) {
            let option = `<option value="${value.clave}">${value.descrip}</option>`;
            if (value.clave != 5) {
                $('#plantelSelect').append(option);
            }
        });

    }).fail(function () {
        console.log("Algo salió mal");
    });

    // Detecta el cambio de opcion en un select para actuar en otro
    /*
     * se activa al cambiar de plantel 
     * y se muestran los niveles
     */
    $("select[name=plantelSelect]").change(function () {

        $("#nivelSelect").empty();
        $("#nivelSelect").append(`<option value="" selected disabled>Selecciona un nivel</option>`);
        $('#periodoSelect').empty();
        $("#periodoSelect").append(`<option value="" selected disabled>¿Cuándo deseas iniciar?  </option>`);
        $('#carreraSelect').empty();
        $("#carreraSelect").append(`<option value="" selected disabled>Selecciona una carrera</option>`);
        $('#horarioSelect').empty();
        $("#horarioSelect").append(`<option value="" selected disabled>Selecciona un horario</option>`);

        let nivel = $('select[name=nivelSelect]').val();
        let ruta = setUrlBase() + "getNiveles";
        let plantel = $('select[name=plantelSelect]').val();
        let data = {
            plantel: plantel
        }
        let element = '#nivelSelect';

        postAjaxPeticionContact(ruta, data, element);

        if (nivel != '' || nivel !== '' || nivel != null) {
            $("select[name=nivelSelect]").prop("disabled", false);
        } else {
            /* $("select[name=periodoSelect]").prop("disabled", true);
            $("select[name=carreraSelect]").prop("disabled", true);
            $("select[name=horarioSelect]").prop("disabled", true); */
        }

    });

    /**
     * se activa cuando se cambia de nivel 
     * y se muestran los periodos
     */
    $("select[name=nivelSelect]").change(function () {

        $('#periodoSelect').empty();
        $("#periodoSelect").append(`<option value="" selected disabled>¿Cuándo deseas iniciar?</option>`);
        $('#carreraSelect').empty();
        $("#carreraSelect").append(`<option value="" selected disabled>Selecciona una carrera</option>`);
        $('#horarioSelect').empty();
        $("#horarioSelect").append(`<option value="" selected disabled>Selecciona un horario</option>`);
        let plantel = $('select[name=plantelSelect]').val();
        let ruta = setUrlBase() + "getPeriodos";
        let data = {
            plantel: plantel
        };
        let element = '#periodoSelect';

        postAjaxPeticionContact(ruta, data, element);

        $("select[name=periodoSelect]").prop("disabled", false);

    });

    /**
     * se activa cuando se cambia el periodo 
     * y muestra las carreras segun: plantel, nivel y periodo
     */
    $("select[name=periodoSelect]").change(function () {
        $('#carreraSelect').empty();
        $("#carreraSelect").append(`<option value="" selected disabled>Selecciona una carrera</option>`);
        $('#horarioSelect').empty();
        $("#horarioSelect").append(`<option value="" selected disabled>Selecciona un horario</option>`);

        let plantel = $('select[name=plantelSelect]').val();
        let nivel = $('select[name=nivelSelect]').val();
        let periodo = $('select[name=periodoSelect]').val();

        let ruta = setUrlBase() + "getCarreras";
        let data = {
            plantel: plantel,
            nivel: nivel,
            periodo: periodo
        };
        let element = '#carreraSelect';

        postAjaxPeticionContact(ruta, data, element);

        $("select[name=carreraSelect]").prop("disabled", false);
    });

    /**
     * se activa cuando se cambia la carrera seccionada
     * y se muestran los horarios disponibles
     */
    $("select[name=carreraSelect]").change(function () {

        $('#horarioSelect').empty();
        $("#horarioSelect").append(`<option value="" selected disabled>Selecciona un horario</option>`);
        let plantel = $('select[name=plantelSelect]').val();
        let nivel = $('select[name=nivelSelect]').val();
        let periodo = $('select[name=periodoSelect]').val();
        let carrera = $('select[name=carreraSelect]').val();

        let ruta = setUrlBase() + "getHorarios";
        let data = {
            plantel: plantel,
            nivel: nivel,
            periodo: periodo,
            carrera: carrera
        };
        let element = '#horarioSelect';

        postAjaxPeticionContact(ruta, data, element);

        $("select[name=horarioSelect]").prop("disabled", false);

    });
});

function postAjaxPeticionContact(ruta, data, element) {
    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: ruta,
        data: data
    }).done(function (data) {
        console.log(data);
        $.each(data, function (index, value) {
            let option = `<option value="${value.clave}">${value.descrip}</option>`;
            $(element).append(option);
        });

    }).fail(function () {
        console.log("Algo salió mal");
    });
}