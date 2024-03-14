@extends('layouts.layoutPreinscripcion')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-normal" style="color: rgba(241,145,29,1.00);">
                    <i class="bi bi-card-list"></i>
                    PREINSCRIPCIÓN EN LÍNEA
                </h1>
            </div>
            <div class="col-12 row">
                <div class="col-6 text-center">
                    <img class="mt-5" src="{{ asset('assets/img/preinscripcion_linea/preinscripcion.png') }}"
                        alt="">
                    <br>
                    <p>
                        Forma parte de UNIMEX®
                    </p>
                </div>
                <div class="col-6">
                    <h3>
                        Ventajas de la preinscripción en línea:
                    </h3>
                    <ul style="list-style: none;">
                        <li>
                            <i class="bi bi-check-square"></i>
                            Apartas tu lugar en la Licenciatura o Posgrado y en el Horario deseado.
                        </li>
                        <li>
                            <i class="bi bi-check-square"></i>
                            Apartas las cuotas de Inscripción preferenciales del momento.
                        </li>
                        <li>
                            <i class="bi bi-check-square"></i>
                            Tienes más tiempo para pagar tu Inscripción y entregar tus documentos.
                        </li>
                        <li>
                            <i class="bi bi-check-square"></i>
                            Puedes pre-inscribirte desde cualquier computadora.
                        </li>
                    </ul>
                    <p>
                        Al final completas tu trámite, entregando tu documentación en el Campus, dentro del plazo
                        especificado.
                    </p>
                    <hr>
                    <form class="row" action="{{ route('validacion.preinscripcion.linea') }}" method="POST">
                        <div class="col-12 col-md-6">
                            @csrf
                            <p>
                                Ingresa tu correo electronico
                            </p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="Ejemplo: micorreo@dominio.com"
                                    aria-label="Username" aria-describedby="basic-addon1" name="correo" id="correo">
                            </div>
                        </div>
                       {{--  <div class="col-12 col-md-6">
                            <p>
                                Ingresa tu numero movil
                            </p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-telephone-fill"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Telefono movil" aria-label="Username"
                                    aria-describedby="basic-addon1" name="telefono" id="telefono">
                            </div>
                        </div> --}}
                        <div class="col-12  d-flex">
                            <!-- Button trigger modal -->
                            <input type="checkbox" id="avisoPrivacidad" name="avisoPrivacidad" checked>
                            <button type="button" class="btn btn-link" data-bs-toggle="modal"
                                data-bs-target="#inscripcionAvisoPrivacidad">
                                He leído y estoy de acuerdo con las políticas de pre-inscripción y el aviso de privacidad.
                            </button>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-3">
                                <i class="bi bi-box-arrow-right"></i>
                                Continuar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('modales.preinscripcionAviso')