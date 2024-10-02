<script>
    function calculadoraHeader(abreviaturaUtm = "") {
        let nivel = nivelPosicionado;
        let carrera = carreraPosicionado;
        let carreraFinal = carrera.replace(/ /g, "_");
        let coplementoParaUtm = abreviaturaUtm;
        let utmMedium = "{{ $dataUTM['utm_medium'] }}";

        console.log(utmMedium);

        if (utmMedium == "Organico" || utmMedium == "organico" || utmMedium ==
            "ORGANICO") { // las utm declaradas en la session no son organicas
            console.log("las utm declaradas en session son organicas se deben forzar");

            origen = "{{ $origen }}";

            utm_source = "Website+Metro";
            utm_medium = "Organico";
            utm_term = "Calculadora";

            if (origen == "slider") { // el origen por dodne llego a la oferta academica fue el slider
                utm_campaign = "Home+body";
                utm_content = `Slider${coplementoParaUtm}+boton+calculadora`;

            } else if (origen == "menu") { // el origen por dodne llego a la oferta academica fue el fue el menu
                utm_campaign = "Home+header";
                utm_content = `Oacademica+${coplementoParaUtm}+body+boton+calculadora`;

            } else { // el origen por dodne llego a la oferta academica conecta con ninguno de los origenes precargados
                utm_campaign = "Oacademica+body";
                utm_content = `${coplementoParaUtm}+boton+calculadora`;

            }



        } else { // las utm declaradas en session son organicas se deben forzar

            console.log("las utm declaradas en la session no son organicas");

            utm_source = "{{ $dataUTM['utm_source'] }}";
            utm_medium = "{{ $dataUTM['utm_medium'] }}";
            utm_campaign = "{{ $dataUTM['utm_campaign'] }}";
            utm_term = "{{ $dataUTM['utm_term'] }}";
            utm_content = "{{ $dataUTM['utm_content'] }}";

        }

        let rutaRedireccionCalculadora = setUrlBase() +
            `calcula-tu-cuota?utm_source=${utm_source}&utm_medium=${utm_medium}&utm_campaign=${utm_campaign}&utm_term=${utm_term}&utm_content=${utm_content}`;

        console.log(rutaRedireccionCalculadora);


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

    function preinscripcionHeader(abreviaturaUtm = "") {
        let nivel = nivelPosicionado;
        let carrera = carreraPosicionado;
        let carreraFinal = carrera.replace(/ /g, "_");
        let coplementoParaUtm = abreviaturaUtm;
        let utmMedium = " {{ $dataUTM['utm_medium'] }} ";

        if (utmMedium != "Organico" || utmMedium != "organico" || utmMedium !=
            "ORGANICO") { // las utm declaradas en la session no son organicas

            origen = "{{ $origen }}";

            utm_source = "Website+Metro";
            utm_medium = "Organico";
            utm_term = "Preinscrip";

            if (origen == "slider") { // el origen por dodne llego a la oferta academica fue el slider
                utm_campaign = "Home+body";
                utm_content = `Slider${coplementoParaUtm}+boton+preinscrip`;

            } else if (origen == "menu") { // el origen por dodne llego a la oferta academica fue el fue el menu
                utm_campaign = "Home+header";
                utm_content = `Oacademica+${coplementoParaUtm}+body+boton+preinscrip`;

            } else { // el origen por dodne llego a la oferta academica conecta con ninguno de los origenes precargados
                utm_campaign = "Oacademica+body";
                utm_content = `${coplementoParaUtm}+boton+preinscrip`;

            }

        } else { // las utm declaradas en session son organicas se deben forzar

            utm_source = "{{ $dataUTM['utm_source'] }}";
            utm_medium = "{{ $dataUTM['utm_medium'] }}";
            utm_campaign = "{{ $dataUTM['utm_campaign'] }}";
            utm_term = "{{ $dataUTM['utm_term'] }}";
            utm_content = "{{ $dataUTM['utm_content'] }}";

        }

        let rutaRedireccionPreinscripcion = setUrlBase() +
            `App/Preinscripcion-online?utm_source=${utm_source}&utm_medium=${utm_medium}&utm_campaign=${utm_campaign}&utm_term=${utm_term}&utm_content=${utm_content}`;

        $.ajax({
            method: "GET",
            url: setUrlBase() + "set/variables/preinscripcion/" + nivel + "/" + carreraFinal,
        }).done(function(data) {
            console.log(data);

        }).fail(function() {
            console.log("Algo salió mal");
        });
        window.open(rutaRedireccionPreinscripcion, '_blank');
    }


    function generarUtm() {

    }
</script>
