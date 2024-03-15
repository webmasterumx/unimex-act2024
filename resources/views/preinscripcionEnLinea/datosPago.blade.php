@extends('layouts.layoutPreinscripcion')

@section('content')
    <div class="container-fluid" style="margin-top: 8rem !important;">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-normal" style="color: rgba(241,145,29,1.00);">
                    <i class="bi bi-card-list"></i>
                    PREINSCRIPCIÓN EN LÍNEA
                </h1>
                <hr>
            </div>
            <div class="col-12 row">
                <div class="col-5">
                    <p class="text-center">
                        Intrucciones
                    </p>
                    <p class="px-5">
                        <i class="bi bi-check2-square"></i> Imprime la ficha de deposito. <br>
                        <i class="bi bi-check2-square"></i> Acude a la sucursal Scotiabank de tu preferencia. <br>
                        <i class="bi bi-check2-square"></i> Realiza el o los abonos correspondientes de acuerdo a tu opcion
                        de pago seleccionada (un solo pago o de 2 a 5 abonos)
                    </p>
                    <p class="text-center">
                        <img style="max-width: 250px;"
                            src="{{ asset('assets/img/preinscripcion_linea/Unimex_Izcalli.jpg') }}" alt="">
                        <br>
                        Forma parte de UNIMEX®
                    </p>
                </div>
                <div class="col-7 py-4">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                Pago en Ventanilla
                                <img class="mt-5" src="{{ asset('assets/img/preinscripcion_linea/scotiabank.png') }}"
                                    alt="">
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="nombreEmpresa" class="form-label">A nombre de:</label>
                                <input disabled type="email" class="form-control" id="nombreEmpresa"
                                    value="UNIVERSIDAD MEXICANA, S.C.">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="numeroServicio" class="form-label">Número de Servicio</label>
                                <input disabled type="text" class="form-control" id="numeroServicio" value="3171">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="referencia" class="form-label">Referencia</label>
                                <input disabled type="text" class="form-control" id="referencia" value="08700071031">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input disabled type="text" class="form-control" id="cantidad"
                                    value="{{ session('precio') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="nombreAlumno" class="form-label">Nombre</label>
                                <input disabled type="text" class="form-control" id="nombreAlumno"
                                    value="{{ session('Nombre') }}  {{ session('ApPaterno') }} {{ session('ApMaterno') }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="matricula" class="form-label">Matrícula</label>
                                <input disabled type="text" class="form-control" id="matricula"
                                    value="{{ session('Matricula') }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="cuatrimestre" class="form-label">Cuatrimestre</label>
                                <input disabled type="text" class="form-control" id="cuatrimestre" value="Primero">
                            </div>
                        </div>
                        @php
                            $idPlantel = session('PlantelID');
                        @endphp
                        @switch($idPlantel)
                            @case(2)
                            @php
                                $nombrePlantel = "IZCALLI";
                            @endphp
                            @break

                            @case(3)
                            @php
                                $nombrePlantel = "SATÉLITE";
                            @endphp
                            @break

                            @case(4)
                            @php
                                $nombrePlantel = "POLANCO";
                            @endphp
                            @break

                            @case(5)
                            @php
                                $nombrePlantel = "VERACRUZ";
                            @endphp
                            @break

                            @default
                        @endswitch
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="plantel" class="form-label">Plantel</label>
                                <input disabled type="text" class="form-control" id="plantel" value="{{ $nombrePlantel }}">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a href="{{ route('ficha.pdf') }}" type="button" class="btn btn-primary"><i class="bi bi-printer-fill"></i>
                                Imprimir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
