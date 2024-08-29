<script>
    function calculadoraHeader() {
        let rutaRedireccionCalculadora = setUrlBase() +
            `calcula-tu-cuota?utm_source=Website+Metro&utm_medium=Organico&utm_campaign=Home+header&utm_term=Calculadora&utm_content=Menu+Calculadora`;
        window.open("{{ route('calcula_tu_cuota') }}", '_blank');
    }

    function preinscripcionHeader() {
        let rutaRedireccionPreinscripcion = setUrlBase() +
            `App/Preinscripcion-online?utm_source=Website+Metro&utm_medium=Organico&utm_campaign=Home+header&utm_term=Preinscrip&utm_content=Menu+Preinscrip`;
        window.open("{{ route('preinscripcion.linea') }}", '_blank');
    }
</script>
