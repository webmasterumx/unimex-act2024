function mostarMensajeErrorParaCombos(jqXHR, textStatus) {
    if (jqXHR.status === 0) {

        $("#mensajeErrorCalcula").addClass("alert-primary");
        $("#mensajeErrorCalcula").removeClass("d-none");
        $("#textoMensajeErrorCalculadora").html(
            `No tienes conexión a internet.
            <br>
            Codigo: ${jqXHR.status}`
        );

    } else if (jqXHR.status == 404) {

        $("#mensajeErrorCalcula").addClass("alert-danger");
        $("#mensajeErrorCalcula").removeClass("d-none");
        $("#textoMensajeErrorCalculadora").html(
            `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`
        );

    } else if (jqXHR.status == 500) {

        $("#mensajeErrorCalcula").addClass("alert-danger");
        $("#mensajeErrorCalcula").removeClass("d-none");
        $("#textoMensajeErrorCalculadora").html(
            `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`
        );

    }
    else if (jqXHR.status == 503) {

        $("#mensajeErrorCalcula").addClass("alert-warning");
        $("#mensajeErrorCalcula").removeClass("d-none");
        $("#textoMensajeErrorCalculadora").html(
            `Sitio en mantenimiento intenta mas tarde.
            <br>
            Codigo: ${jqXHR.status}`
        );

    }
    else if (textStatus === 'parsererror') {

        $("#mensajeErrorCalcula").addClass("alert-danger");
        $("#mensajeErrorCalcula").removeClass("d-none");
        $("#textoMensajeErrorCalculadora").html(
            `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`
        );

    } else if (textStatus === 'timeout') {

        console.log('Time out error.');


        $("#mensajeErrorCalcula").addClass("alert-danger");
        $("#mensajeErrorCalcula").removeClass("d-none");
        $("#textoMensajeErrorCalculadora").html(
            `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`
        );

    } else if (textStatus === 'abort') {

        console.log('Ajax request aborted.');


        $("#mensajeErrorCalcula").addClass("alert-danger");
        $("#mensajeErrorCalcula").removeClass("d-none");
        $("#textoMensajeErrorCalculadora").html(
            `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`
        );

    } else {

        console.log('Uncaught Error: ' + jqXHR.responseText);

        $("#mensajeErrorCalcula").addClass("alert-danger");
        $("#mensajeErrorCalcula").removeClass("d-none");
        $("#textoMensajeErrorCalculadora").html(
            `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`
        );

    }
}

function generadorMensajesError(jqXHR, textStatus) {
    let mensaje = "";
    let icon = "";


    if (jqXHR.status === 0) {

        icon = "";
        mensaje = `No tienes conexión a internet.
            <br>
            Codigo: ${jqXHR.status}`;

    } else if (jqXHR.status == 404) {

        icon = "error";
        mensaje = `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`;

    } else if (jqXHR.status == 500) {

        icon = "error";
        mensaje = `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`;

    }
    else if (jqXHR.status == 503) {

        icon = "warning";
        mensaje = `Sitio en mantenimiento intenta mas tarde.
            <br>
            Codigo: ${jqXHR.status}`;

    }
    else if (textStatus === 'parsererror') {

        console.log('Requested JSON parse failed.');

        icon = "error";
        mensaje = `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`;

    } else if (textStatus === 'timeout') {

        console.log('Time out error.');

        icon = "error";
        mensaje = `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`;

    } else if (textStatus === 'abort') {

        console.log('Ajax request aborted.');

        icon = "error";
        mensaje = `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`;

    } else {

        console.log('Uncaught Error: ' + jqXHR.responseText);

        icon = "error";
        mensaje = `Ups! <br> Ocurrio un error en el servidor! <br> Intenta de nuevo recargando la pagina.
            <br>
            Codigo: ${jqXHR.status}`;

    }

    Swal.fire({
        icon: icon,
        html: mensaje,
    });
}