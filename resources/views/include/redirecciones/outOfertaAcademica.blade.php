<script>
    $("#calculadoraHeader").on('click', function() {
        window.open("{{ route('calcula_tu_cuota') }}", '_blank');
    });


    $("#preinscripcionHeader").on('click', function() {
        window.open("{{ route('preinscripcion.linea') }}", '_blank');
    });
</script>
