
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