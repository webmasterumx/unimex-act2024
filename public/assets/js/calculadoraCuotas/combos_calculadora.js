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
    console.log($('select[name=selectPlantel]').val());

    let plantel = $('select[name=selectPlantel]').val();
    console.log(plantel);
    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: setUrlBase() + "getPeriodos",
        data: {
            plantel: plantel
        }
    }).done(function (data) {
        console.log(data);
        $.each(data, function (index, value) {
            $('#selectPeriodo').append("<option value='" + value.clave + "'>" + value
                .descrip + "</option>");
        });

    }).fail(function () {
        console.log("Algo salió mal");
    });
});

$("select[name=selectPeriodo]").change(function () {

    let plantel = $('select[name=selectPlantel]').val();

    console.log(plantel);
    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: setUrlBase() + "getNiveles",
        data: {
            plantel: plantel
        }
    }).done(function (data) {
        console.log(data);
        $.each(data, function (index, value) {
            $('#selectNivel').append("<option value='" + value.clave + "'>" + value
                .descrip + "</option>");
        });

    }).fail(function () {
        console.log("Algo salió mal");
    });
});

// detecta el cambio de carrera para mostrar horarios
$("select[name=selectCarrera]").change(function () {

    $('#cargador_horarios').removeClass('d-none');

    let carrera = $(this).val();
    let nivel = $('select[name=selectNivel]').val();
    let periodo = $('select[name=selectPeriodo]').val();
    let plantel = $('select[name=selectPlantel]').val();

    let data = {
        "claveCarrera": carrera,
        "claveNivel": nivel,
        "clavePeriodo": periodo,
        "PlantelId": plantel,
    }

    console.log(data);
    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: setUrlBase() + "get/horarios/calculadora",
        data: data
    }).done(function (data) {
        $('#grupoBotones').empty();
        console.log(data);
        let arrayColor = ['btn-outline-primary', 'btn-outline-info', 'btn-outline-secondary', 'btn-outline-success', 'btn-outline-danger', 'btn-outline-warning', 'btn-outline-dark'];
        let cont = 0;
        $.each(data, function (index, value) {
            let option = `
            <div class="col-3 mt-3">
                <button class="btn ${arrayColor[cont]} style_prevu_kit w-100" onclick="selectHorario(${value.ClaveTurno}, ${value.ClaveBeca})">
                    ${value.Turno} <br>
                    ${value.Horario} <br>
                    Beca : ${value.ValorBeca}%
                </button>
            </div>
            `;
            $('#grupoBotones').append(option);

            cont = cont + 1;
        });

        $('#cargador_horarios').addClass('d-none');

    }).fail(function () {
        console.log("Algo salió mal");
    });
});

