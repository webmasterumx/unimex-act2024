
$("#celular_prospecto").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});


$("#telefono_prospecto").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$('#aceptar_contacto').on('click', function () {
    if ($(this).is(':checked')) {
        // Hacer algo si el checkbox ha sido seleccionado
        //console.log("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
        $('#envio_contacto').attr('disabled', false);
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        //console.log("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
        $('#envio_contacto').attr('disabled', true);
    }
});

$("#telefono_casa_trabaja").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});


$("#telefono_movil_trabaja").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$("#telefono_casa_qys").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});


$("#telefono_movil_qys").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

function establecerTipoDeEmpresaOCC(type) {

    $('#type_empresaOCC').val(type);

    $('#number7').val(Math.floor(Math.random() * 10));
    $('#number8').val(Math.floor(Math.random() * 10));

    if (type == 1) //si tiene cuenta
    {
        $('#empresasOCCLabel').html('Empresas Registradas en OCC');
        $('#parrafoEmpresasOCC').html('Ingresa los datos de tu empresa para publicar tus vacantes.');
    }
    else // no tiene cuenta
    {
        $('#empresasOCCLabel').html('Registra tu Empresa en OCC');
        $('#parrafoEmpresasOCC').html('Ingresa los datos de tu empresa para publicar tus vacantes. Regístrate como empresa aquí.');
    }

}

$("#telefono_empresaOCC").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});


$("#celular_empresaOCC").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});