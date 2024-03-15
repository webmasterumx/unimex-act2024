$("#telefonoInscripcion").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$("#telefonoCelInscripcion").bind('keypress', function (event) {
    var regex = new RegExp("^[0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

function estadoCampos(estado) {
    //disable campos 
    $("#nombreInscripcion").prop("disabled", estado);
    $("#apellidoPatInscripcion").prop("disabled", estado);
    $("#apellidoMatInscripcion").prop("disabled", estado);
    $("#telefonoInscripcion").prop("disabled", estado);
    $("#telefonoCelInscripcion").prop("disabled", estado);
    $("#calleInscripcion").prop("disabled", estado);
    $("#numeroInscripcion").prop("disabled", estado);
    $("#coloniaInscripcion").prop("disabled", estado);
    $("#estadoInscripcion").prop("disabled", estado);
    $("#municipioInscripcion").prop("disabled", estado);
    $("#plantelSelect").prop("disabled", estado);
    $("#periodoSelect").prop("disabled", estado);
    $("#nivelSelect").prop("disabled", estado);
    $("#carreraSelect").prop("disabled", estado);
    $("#horarioSelect").prop("disabled", estado);
}

function agregarProspecto() {

    let ruta = setUrlBase() + "registrar/prospecto/preinscripcion/linea";
    let fechaNacimiento = $('select[name=diaNacimiento]').val() + '-' + $('select[name=mesNacimiento]').val() + '-' + $('select[name=yearNacimiento]').val();

    let data = {
        Email: $('#correoInscripcion').val(),
        Nombre: $('#nombreInscripcion').val(),
        ApPaterno: $('#apellidoPatInscripcion').val(),
        ApMaterno: $('#apellidoMatInscripcion').val(),
        Telefono: $('#telefonoInscripcion').val(),
        Celular: $('#telefonoCelInscripcion').val(),
        Calle: $('#calleInscripcion').val(),
        NumeroCalle: $('#numeroInscripcion').val(),
        Colonia: $('#coloniaInscripcion').val(),
        EstadoID: $('select[name=estadoInscripcion]').val(),
        MunicipioID: $('select[name=municipioInscripcion]').val(),
        PlantelID: $('select[name=plantelSelect]').val(),
        ClavePeriodo: $('select[name=periodoSelect]').val(),
        ClaveNivel: $('select[name=nivelSelect]').val(),
        ClaveCarrera: $('select[name=carreraSelect]').val(),
        ClaveTurno: $('select[name=horarioSelect]').val(),
        UtpSource: "",
        DescripCampPublicidad: "",
        CampaignMedium: "",
        CampaignTerm: "",
        CampaignContent: "",
        WebSiteURL: "https://unimex.edu.mx",
        FechaDeNacimiento: fechaNacimiento,
    };

    $.ajax({
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: ruta,
        data: data
    }).done(function (data) {
        console.log(data);

    }).fail(function () {
        console.log("Algo salió mal");
    });

}

function correccionDatos() {
    estadoCampos(false)

    $('#continuarProceso').addClass('d-none');
    $('#corregirDatos').addClass('d-none');
    $("#respuestaSuccess").addClass('d-none');
    $('#calcularPromo').removeClass('d-none');
}