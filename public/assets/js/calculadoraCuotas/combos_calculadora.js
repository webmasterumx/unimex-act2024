$(document).ready(function () {

    $.ajax({
        method: "GET",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: setUrlBase() + "getPlanteles",
    }).done(function (data) {
        console.log(data);
        $.each(data, function (index, value) {
            $('#selectPlantel').append("<option value='" + value.clave + "'>" + value
                .descrip + "</option>");
        });

    }).fail(function () {
        console.log("Algo salió mal");
    });

});

$("select[name=selectPlantel]").change(function () {

    $('#selectCarrera').empty();
    
    //validar si ingresa al formulario desde cero o si ya tiene datos ingresados 
    console.log($('#folioCrm').val());
    if ($('#folioCrm').val() == "" || $('#folioCrm').val() == null) {
        console.log('es elprimer calculo');
        getPeriodos();
    }
    else {
        console.log('se hizo ya un calculo se requiere un recalculo');
        let carreraResguardo = setCarreraSeleccionada();
        let nombreCarreraRes = setNombreCarrreraSaleccionada();
        $("#selectCarrera").empty();
        $("#selectCarrera").append(`<option><div class="spinner-border" role="status"><span class="visually-hidden">Recalculando...</span></div></option>`);
        $('#grupoBotones').empty();
        $('#grupoInformacion').addClass('d-none');

        console.log(carreraResguardo);
        console.log(nombreCarreraRes);
        recalculoDeCombos(carreraResguardo, nombreCarreraRes);
    }

});

$("select[name=selectPeriodo]").change(function () {

    //es la primera peticion o se limpio el combo de carreras

    if ($('#folioCrm').val() == "" || $('#folioCrm').val() == null) {
        console.log('es elprimer calculo');
        getNiveles();
    }
    else {
        console.log('se hizo ya un calculo');
        let carreraResguardo = setCarreraSeleccionada();
        let nombreCarreraRes = setNombreCarrreraSaleccionada();
        $('#selectCarrera').empty();
        $('#selectCarrera').append(`<option value="">Selecciona un Carrera</option>`);
        $('#grupoBotones').empty();
        $('#grupoInformacion').addClass('d-none');

        recalculoDeCombos(carreraResguardo, nombreCarreraRes);
    }

});

$("select[name=selectNivel]").change(function () {

    console.log($('select[name=selectNivel]').val());

    if ($('select[name=selectNivel]').val() == 2 || $('select[name=selectNivel]').val() == 3) {
        if ($("#selectEgresado").hasClass("d-none") === true) {
            $('#selectEgresado').removeClass('d-none');
        }
    }
    else {
        if ($("#selectEgresado").hasClass("d-none") === false) {
            $('#selectEgresado').addClass('d-none');
        }
    }

    $('#selectCarrera').empty();
    $('#grupoBotones').empty();
    $('#grupoInformacion').addClass('d-none');


    getCarreras();

});

// detecta el cambio de carrera para mostrar horarios
$("select[name=selectCarrera]").change(function () {

    $('#cargador_horarios').removeClass('d-none');
    $('#grupoBotones').empty();

    obtenerHorariosBeca();
});

