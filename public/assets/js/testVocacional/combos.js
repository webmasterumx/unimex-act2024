var urlBase = "https://api-testing.unimexver.edu.mx/api/";

$(document).ready(function () {

    $.ajax({
        method: "GET",
        url: urlBase + "oferta/planteles",
    }).done(function (data) {
        console.log(data);
        $.each(data, function (index, value) {
            $('#plantel').append("<option value='" + value.clave + "'>" + value
                .descrip + "</option>");
        });

    }).fail(function () {
        console.log("Algo salió mal");
    });

});

$("select[name=plantel]").change(function () {

    let plantel = $('select[name=plantel]').val();

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
        $("#nivel").empty();
        $("#nivel").append(`<option value="" selected disabled>Selecciona Nivel</option>`);

        console.log(data);
        if (data.clave == undefined || data.clave == null) {
            $.each(data, function (index, value) {
                $('#nivel').append("<option value='" + value.clave + "'>" + value
                    .descrip + "</option>");
            });
        } else {
            $('#nivel').append("<option value='" + data.clave + "'>" + data
                .descrip + "</option>");
        }


    }).fail(function () {
        console.log("Algo salió mal");
    });

});


$("select[name=nivel]").change(function () {

    let plantel = $('select[name=plantel]').val();

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
        $("#periodo").empty();
        $("#periodo").append(` <option value="" selected disabled>¿Cuándo deseas iniciar tu licenciatura?</option>`);

        console.log(data);
        if (data.clave == undefined || data.clave == null) {
            $.each(data, function (index, value) {
                $('#periodo').append("<option value='" + value.clave + "'>" + value
                    .descrip + "</option>");
            });
        } else {
            $('#periodo').append("<option value='" + data.clave + "'>" + data
                .descrip + "</option>");
        }


    }).fail(function () {
        console.log("Algo salió mal");
    });

});

$("select[name=periodo]").change(function () {

    let plantel = $('select[name=plantel]').val();
    let nivel = $('select[name=nivel]').val();
    let periodo = $('select[name=periodo]').val();


    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: setUrlBase() + "getCarreras",
        data: {
            plantel: plantel,
            nivel: nivel,
            periodo: periodo
        }
    }).done(function (data) {
        $("#carrera").empty();
        $("#carrera").append(`<option value="" selected disabled>Selecciona Carrera</option>`);

        console.log(data);
        if (data.clave == undefined || data.clave == null) {
            $.each(data, function (index, value) {
                $('#carrera').append("<option value='" + value.clave + "'>" + value
                    .descrip + "</option>");
            });
        } else {
            $('#carrera').append("<option value='" + data.clave + "'>" + data
                .descrip + "</option>");
        }


    }).fail(function () {
        console.log("Algo salió mal");
    });

});

$("select[name=carrera]").change(function () {

    let plantel = $('select[name=plantel]').val();
    let nivel = $('select[name=nivel]').val();
    let periodo = $('select[name=periodo]').val();
    let carrera = $('select[name=carrera]').val();

    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: setUrlBase() + "getHorarios",
        data: {
            plantel: plantel,
            nivel: nivel,
            periodo: periodo,
            carrera: carrera
        }
    }).done(function (data) {
        $("#horario").empty();
        $("#horario").append(`<option value="" selected disabled>Selecciona Horario</option>`);

        console.log(data);
        if (data.clave == undefined || data.clave == null) {
            $.each(data, function (index, value) {
                $('#horario').append("<option value='" + value.clave + "'>" + value
                    .descrip + "</option>");
            });
        } else {
            $('#horario').append("<option value='" + data.clave + "'>" + data
                .descrip + "</option>");
        }


    }).fail(function () {
        console.log("Algo salió mal");
    });

});

