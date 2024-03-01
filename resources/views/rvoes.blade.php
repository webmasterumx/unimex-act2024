@extends('layouts.layout')

@section('content')
    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Plantel</th>
                            <th>Materia</th>
                            <th>Nivel de Estudios</th>
                            <th>Modalidad de Estudios</th>
                            <th>RVOE</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($rvoes as $rvoe)
                            <tr>
                                <td> {{ $rvoe->plantel }} </td>
                                <td> {{ $rvoe->materia }} </td>
                                <td> {{ $rvoe->nivel }} </td>
                                <td> {{ $rvoe->modalidad }} </td>
                                <td> {{ $rvoe->rvoe }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                paging: true,
                ordering: true,
                info: true,
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "<<",
                        "last": ">>",
                        "next": ">",
                        "previous": "<"
                    }
                },
                order: [
                    [1, 'asc']
                ]
            });

        });
    </script>
@endsection
