
$(document).ready(function () {
    let plantel = 2
    let ruta = setUrlBase() + "getPeriodos";
    let data = {
        plantel: plantel
    };
    let element = '#peridoSelectFolleto';

    postAjaxPeticionContact(ruta, data, element);

    $("select[name=peridoSelectFolleto]").prop("disabled", false);
});

/**
 * se activa cuando se cambia el periodo 
 * y muestra las carreras segun: plantel, nivel y periodo
 */
$("select[name=periodoSelect]").change(function () {
  /*   $('#carreraSelect').empty();
    $("#carreraSelect").append(`<option value="" selected disabled>Selecciona una carrera</option>`);
    $('#horarioSelect').empty();
    $("#horarioSelect").append(`<option value="" selected disabled>Selecciona un horario</option>`); */


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