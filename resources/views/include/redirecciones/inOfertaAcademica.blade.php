<script>
    function calculadoraHeader() {
        let nivel = nivelPosicionado;
        let carrera = carreraPosicionado;
        let carreraFinal = carrera.replace(/ /g, "_");
        let utm_source = "{{ session('utm_source') }}";
        let utm_medium = "{{ session('utm_medium') }}";
        let utm_campaign = "{{ session('utm_campaign') }}";
        let utm_term = "Calculadora";
        let utm_content = "{{ session('utm_content') }}";
        let rutaRedireccionCalculadora = setUrlBase() +
        `calcula-tu-cuota?utm_source=${utm_source}&utm_medium=${utm_medium}&utm_campaign=${utm_campaign}&utm_term=${utm_term}&utm_content=${utm_content}`;

        $.ajax({
            method: "GET",
            url: setUrlBase() + "set/variables/calculadora/" + nivel + "/" + carreraFinal,
        }).done(function(data) {
            console.log(data);

        }).fail(function() {
            console.log("Algo salió mal");
        });

        //console.log(rutaRedireccionCalculadora);
        
        window.open(rutaRedireccionCalculadora, '_blank');
    }

    function preinscripcionHeader() {
        let nivel = nivelPosicionado;
        let carrera = carreraPosicionado;
        let carreraFinal = carrera.replace(/ /g, "_");

        $.ajax({
            method: "GET",
            url: setUrlBase() + "set/variables/preinscripcion/" + nivel + "/" + carreraFinal,
        }).done(function(data) {
            console.log(data);

        }).fail(function() {
            console.log("Algo salió mal");
        });
        window.open("{{ route('preinscripcion.linea') }}", '_blank');
    }
</script>
