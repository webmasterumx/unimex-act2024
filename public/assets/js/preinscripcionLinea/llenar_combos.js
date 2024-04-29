function llenaComboPlantel(clavePlantel) {
    let ruta = setUrlBase() + 'getPlanteles';

    $.ajax({
        url: ruta,
        method: "GET",
        dataType: 'json',
    }).done(function (data) {
        const plateles = data;
        let option_default = `<option value="">Seleciona un plantel</option>`;
        if (plateles != undefined) {
            $("#plantelSelect").append(option_default); //se establece el plantel por defecto
            for (let index = 0; index < plateles.length; index++) { //recorrer el array de planteles
                const element = plateles[index]; // se establece un elemento por plantel optenida
                let option = `<option value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por campaña
                $("#plantelSelect").append(option); // se inserta la platel de cada elemento
            }
        }
        else {
            $("#plantelSelect").append(option_default);
        }
        $("#plantelSelect option[value=" + clavePlantel + "]").attr("selected", true);

    }).fail(function (e) {
        console.log("Request: " + JSON.stringify(e));
    });
}

function llenarComboCampañas(claveCampana, clavePlantel) {
    let ruta = setUrlBase() + 'getPeriodos';

    data = {
        plantel: clavePlantel
    }

    $.ajax({
        url: ruta,
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: data,
    }).done(function (data) {
        const campañas = data;
        console.log(campañas);
        let option_default = `<option value="">Seleciona ciclo</option>`;
        if (campañas != undefined) {
            $("#periodoSelect").append(option_default); //se establece la campaña por defecto
            for (let index = 0; index < campañas.length; index++) { //recorrer el array de campañas
                const element = campañas[index]; // se establece un elemento por campaña optenida
                let option = `<option value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por campaña
                $("#periodoSelect").append(option); // se inserta la campaña de cada elemen  to
            }
        }
        else {
            $("#periodoSelect").append(option_default);
        }

        $("#periodoSelect option[value=" + claveCampana + "]").attr("selected", true);

    }).fail(function (e) {
        console.log("Request: " + JSON.stringify(e));
    });

}

function llenarComboNivel(clavePlantel, claveNivel) {
    let ruta = setUrlBase() + "getNiveles";

    let data = {
        plantel: clavePlantel,
    }

    $.ajax({
        url: ruta,
        method: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: data
    }).done(function (data) {
        const niveles = data;
        let option_default = `<option value="">Seleciona un Nivel</option>`;
        if (niveles != undefined) {
            $("#nivelSelect").append(option_default); //se establece la campaña por defecto
            for (let index = 0; index < niveles.length; index++) { //recorrer el array de campañas
                const element = niveles[index]; // se establece un elemento por campaña optenida
                let option = `<option value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por campaña
                $("#nivelSelect").append(option); // se inserta la campaña de cada elemen  to
            }
        }
        else {
            $("#nivelSelect").append(option_default);
        }

        $("#nivelSelect option[value=" + claveNivel + "]").attr("selected", true);

    }).fail(function (e) {
        console.log("Request: " + JSON.stringify(e));
    });
}

function llenarCombosCarrera(claveCampana, clavePlantel, claveNivel, claveCarrera) {
    let ruta = setUrlBase() + 'getCarreras';

    let data = {
        plantel: clavePlantel,
        nivel: claveNivel,
        periodo: claveCampana
    }

    $.ajax({
        url: ruta,
        method: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: data
    }).done(function (data) {
        const carreras = data;
        console.log(carreras);
        let option_default = `<option value="">Seleciona una Carrera</option>`;
        if (carreras != undefined) {
            $("#carreraSelect").append(option_default); //se establece la campaña por defecto
            for (let index = 0; index < carreras.length; index++) { //recorrer el array de campañas
                const element = carreras[index]; // se establece un elemento por campaña optenida
                let option = `<option value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por campaña
                $("#carreraSelect").append(option); // se inserta la campaña de cada elemen  to
            }
        }
        else {
            $("#carreraSelect").append(option_default);
        }

        $("#carreraSelect option[value=" + claveCarrera + "]").attr("selected", true);

    }).fail(function (e) {
        console.log("Request: " + JSON.stringify(e));
    });
}

function llenarComboHorarios(claveCampana, clavePlantel, claveNivel, claveCarrera, claveHorario) {
    let ruta = setUrlBase() + "getHorarios";

    let data = {
        plantel: clavePlantel,
        nivel: claveNivel,
        periodo: claveCampana,
        carrera: claveCarrera,
    }

    $.ajax({
        url: ruta,
        method: "POST",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: data
    }).done(function (data) {
        const horarios = data;
        console.log(data);
        let option_default = `<option value="">Seleciona un Horario</option>`;
        if (horarios != undefined) {
            $("#horarioSelect").append(option_default); //se establece la campaña por defecto
            for (let index = 0; index < horarios.length; index++) { //recorrer el array de campañas
                const element = horarios[index]; // se establece un elemento por campaña optenida
                let option = `<option value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por campaña
                $("#horarioSelect").append(option); // se inserta la campaña de cada elemen  to
            }
        }
        else {
            $("#horarioSelect").append(option_default);
        }
        $("#horarioSelect option[value=" + claveHorario + "]").attr("selected", true);

    }).fail(function (e) {
        console.log("Request: " + JSON.stringify(e));
    });
}