function mensajesErrorFormularioInicial(jqXHR, textStatus, errorThrown) {
    if (jqXHR.status === 0) {

        Swal.fire({
            icon: "question",
            text: `No tienes conexión a internet.`,
        });

    } else if (jqXHR.status == 404) {

        Swal.fire({
            icon: "error",
            text: `Ups! <br> Ocurrio un error en el servidor! <br> Intenta enviar de nuevo tu información.`,
        });

    } else if (jqXHR.status == 500) {

        Swal.fire({
            icon: "question",
            text: `No tienes conexión a internet.`,
        });

    }
    else if (jqXHR.status == 503) {



    }
    else if (textStatus === 'parsererror') {



    } else if (textStatus === 'timeout') {

        console.log('Time out error.');




    } else if (textStatus === 'abort') {

        console.log('Ajax request aborted.');


    } else {

        console.log('Uncaught Error: ' + jqXHR.responseText);



    }

    $("#validarCorreo").prop("disabled", true);
    $('#validarCorreo').html(`
        <i class="bi bi-box-arrow-right"></i>
        Continuar
    `);
}