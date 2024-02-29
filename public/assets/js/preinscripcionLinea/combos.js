$("select[name=estadoInscripcion]").change(function () {
    let estado = $('select[name=estadoInscripcion]').val();
    let ruta = setUrlBase() + "getMunicipios/" + estado;

    $.ajax({
        method: "GET",
        url: ruta,
        dataType: "json",
    }).done(function (data) {
        console.log(data);
        $('#municipioInscripcion').empty();
        let option_default = `<option value="">Seleciona Delegacion</option>`;
        $("#municipioInscripcion").append(option_default);
        for (let index = 0; index < data.length; index++) { //recorrer el array de campañas
            const element = data[index]; // se establece un elemento por campaña optenida
            let option = `<option value="${element.clave}">${element.descrip}</option>`; //se establece la opcion por campaña
            $("#municipioInscripcion").append(option); // se inserta la campaña de cada elemen  to
        }

    }).fail(function () {
        console.log("Algo salió mal");
    });

});