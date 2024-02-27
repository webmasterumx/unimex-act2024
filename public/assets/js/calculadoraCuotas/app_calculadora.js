function selectHorario(turno, beca, element) {

    $('.style_prevu_kit').removeClass("active");
    $(element).addClass('active');
    $('#cargador_costos').removeClass('d-none');

    let PlantelId = $('select[name=selectPlantel]').val();
    let claveCarrera = $('select[name=selectCarrera]').val();
    let claveTurno = turno;
    let claveNivel = $('select[name=selectNivel]').val();;;
    let clavePeriodo = $('select[name=selectPeriodo]').val();;;
    let claveBeca = beca;
    let egresado = 0;

    let data = {
        "PlantelId": PlantelId,
        "claveCarrera": claveCarrera,
        "claveTurno": claveTurno,
        "claveNivel": claveNivel,
        "clavePeriodo": clavePeriodo,
        "claveBeca": claveBeca,
        "egresado": egresado,
    };

    console.log(data);

    let ruta = setUrlBase() + "get/detalle/beca";

    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: ruta,
        data: data
    }).done(function (data) {
        console.log(data);

        if (data.Beca != undefined) {
            establecerValoresCosto(data);
        }
        else {
            if ($("#grupoInformacion").hasClass("d-none") === false) {
                $('#grupoInformacion').addClass('d-none');
            }
            $('#cargador_costos').addClass('d-none');
            Swal.fire({
                position: "center",
                icon: "error",
                title: "Ups! Ups! Ups! ... Algo salió mal, pronto lo resolveremos.<br>Mándanos un mensaje dando <strong><a href='https://www.facebook.com/unimex/' target='_blank'>click aquí</a></strong> y atenderemos tu solicitud.<br>Disculpe las molestias que esto le pueda causar.",
                showConfirmButton: true,
                confirmButtonText: "Ok",
            });
        }

    }).fail(function () {
        console.log("Algo salió mal");
    });
}

function establecerValoresCosto(data) {
    let nombreNivel = $('select[name="selectNivel"] option:selected').text();
    let nombreCarrera = $('select[name="selectCarrera"] option:selected').text();
    let nombrePlantel = $('select[name="selectPlantel"] option:selected').text();

    //datos de costos
    $('#costoCnPromocion').html(`$${data.InscCB}`);
    $('#porcentajeBeca').html(`Beca del ${data.Beca}%`);
    $('#costoBeca').html(`$${data.ParcCB}`);
    $('#costoPromocion').html(`$${data.TotalCB}`);

    //datos de informacion
    $('#carreraInfo').html(`${nombreNivel} en ${nombreCarrera}`);
    $('#plantelInfo').html(`${nombrePlantel}`);
    $('#turnoInfo').html(`${data.Turno}`);
    $('#horarioInfo').html(`${data.Horario}`);
    $('#incioInfo').html(`${data.DescripPer}`);
    $('#vigenciaInfo').html(`${data.Vigencia}`);

    $('#cargador_costos').addClass('d-none');
    $('#grupoInformacion').removeClass('d-none');
}

function getCarreras() {

    $("#selectCarrera").empty();
    $("#selectCarrera").append(`<option><div class="spinner-border" role="status"><span class="visually-hidden">Calculando...</span></div></option>`);

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
        $("#selectCarrera").empty();
        $("#selectCarrera").append(`<option class="text-center" value=""> - Selecciona una Carrera - </option>`);
        for (let index = 0; index < data.length; index++) { //recorrer el array de carreras
            const element = data[index]; // se establece un elemento por carrera optenida
            let option = `<option class="text-center" value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por carrera
            $("#selectCarrera").append(option); // se inserta la carrera de cada elemento
        }

    }).fail(function () {
        console.log("Algo salió mal");
    });
}

function getNiveles() {

    $("#selectNivel").empty();
    $("#selectNivel").append(`<option>Selecciona el nivel</option>`);

    let plantel = $('select[name=selectPlantel]').val();
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
}

function setCarreraSeleccionada() {
    let carrera = $('select[name=selectCarrera]').val();

    return carrera;
}

function setNombreCarrreraSaleccionada() {
    let nombre = $('select[name="selectCarrera"] option:selected').text();

    return nombre;
}

function recalculoDeCombos(carreraResguardo, nombreCarreraRes) {
    // se resguarda la carrera previamente seleccinada


    console.log(carreraResguardo);
    console.log(nombreCarreraRes);

    let cont;
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
            if (element.clave == carreraResguardo || element.descrip == nombreCarreraRes) {
                cont = cont + 1;
                console.log('la carrera esta en el catalogo nuevo');
                option = `<option value="${element.clave}" selected>${element.descrip}</option>`; //se establece la opcion por carrera

            } else {
                console.log('la carrera no esta en el catalogo nuevo');
                option = `<option value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por carrera
            }
            $("#selectCarrera").append(option); // se inserta la carrera de cada elemento

        }

        obtenerHorariosBeca();

    }).fail(function () {
        console.log("Algo salió mal");
    });

}

function obtenerHorariosBeca() {
    let carrera = $('select[name=selectCarrera]').val();
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
                <button class="btn ${arrayColor[cont]}  style_prevu_kit w-100" onclick="selectHorario(${value.ClaveTurno}, ${value.ClaveBeca}, this)">
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
}

function getPeriodos() {
    $("#selectPeriodo").empty();
    $("#selectPeriodo").append(`<option>¿Cuándo deseas iniciar?</option>`);

    let plantel = $('select[name=selectPlantel]').val();
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
}