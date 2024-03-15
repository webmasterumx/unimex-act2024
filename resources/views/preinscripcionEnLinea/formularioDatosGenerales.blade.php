@extends('layouts.layoutPreinscripcion')

@section('content')
    <div class="container-fluid"  style="margin-top: 8rem !important;">
        <div class="row px-5">
            <div class="col-12">
                <h1 class="text-center fw-normal" style="color: rgba(241,145,29,1.00);">
                    <i class="bi bi-card-list"></i>
                    PREINSCRIPCIÓN EN LÍNEA
                </h1>
            </div>
            <div class="col-12">
                <form id="formPromoPreinscripcion" class="card" style="border: 1px solid #337ab7;">
                    @csrf
                    <div class="card-header text-center" style="background-color: #337ab7; color: #fff;">
                        <i class="bi bi-person-vcard"></i>
                        Captura de Datos Personales
                    </div>
                    <div class="card-body row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="correoInscripcion" class="form-label">Correo Electronico</label>
                                <input disabled type="email" class="form-control" id="correoInscripcion"
                                    name="correoInscripcion" value="{{ session('Email') }}">
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="nombreInscripcion" class="form-label">* Nombre</label>
                                <input type="text" class="form-control" id="nombreInscripcion" name="nombreInscripcion"
                                    value="">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="apellidoPatInscripcion" class="form-label">* Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellidoPatInscripcion"
                                    name="apellidoPatInscripcion">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="apellidoMatInscripcion" class="form-label">* Apellido Materno</label>
                                <input type="text" class="form-control" id="apellidoMatInscripcion"
                                    name="apellidoMatInscripcion">
                            </div>
                        </div>
                        <div class="col-3 row">
                            <label for="" class="form-label">Fecha de Nacimiento</label>
                            <div class="col-4">
                                <select id="diaNacimiento" name="diaNacimiento" class="form-select"
                                    aria-label="Default select example">
                                    <option value="" selected>Dia</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}"> {{ $i }} </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-4">
                                <select id="mesNacimiento" name="mesNacimiento" class="form-select"
                                    aria-label="Default select example">
                                    <option value="" selected>Mes</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <select id="yearNacimiento" name="yearNacimiento" class="form-select">
                                    <option value="" selected>Año</option>
                                    @for ($i = 1970; $i <= 2004; $i++)
                                        <option value="{{ $i }}"> {{ $i }} </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="telefonoInscripcion" class="form-label">Telefono: ej.</label>
                                <input type="text" class="form-control" id="telefonoInscripcion"
                                    name="telefonoInscripcion" maxlength="13">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="telefonoCelInscripcion" class="form-label">Tel cel</label>
                                <input type="text" class="form-control" id="telefonoCelInscripcion"
                                    name="telefonoCelInscripcion" maxlength="13">
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="calleInscripcion" class="form-label">Calle</label>
                                <input type="text" class="form-control" id="calleInscripcion"
                                    name="calleInscripcion">
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="mb-3">
                                <label for="numeroInscripcion" class="form-label">Numero</label>
                                <input type="text" class="form-control" id="numeroInscripcion"
                                    name="numeroInscripcion">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="coloniaInscripcion" class="form-label">Colonia</label>
                                <input type="text" class="form-control" id="coloniaInscripcion"
                                    name="coloniaInscripcion">
                            </div>
                        </div>
                        <div class="col-2">
                            <label for="estadoInscripcion" class="form-label">* Estado:</label>
                            <select class="form-select" id="estadoInscripcion" name="estadoInscripcion">
                                <option selected>Selecciona Estado</option>
                                @foreach ($estados as $estado)
                                    <option value="{{ $estado['clave'] }}"> {{ $estado['descrip'] }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="municipioInscripcion" class="form-label">* Municipio/Delegacion:</label>
                            <select class="form-select" id="municipioInscripcion" name="municipioInscripcion">
                                <option selected>Selecciona Delegacion</option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <h5>Haz tu Seleccion Academica</h5>
                            <hr>
                        </div>
                        <div class="col-2">
                            <select id="plantelSelect" name="plantelSelect" class="form-select"
                                aria-label="Default select example">
                                <option selected>Selecciona Plantel</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <select id="periodoSelect" name="periodoSelect" class="form-select"
                                aria-label="Default select example">
                                <option selected>Selecciona Ciclo</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <select id="nivelSelect" name="nivelSelect" class="form-select"
                                aria-label="Default select example">
                                <option selected>Selecciona el Nivel</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select id="carreraSelect" name="carreraSelect" class="form-select"
                                aria-label="Default select example">
                                <option selected>Selecciona Carrera</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select id="horarioSelect" name="horarioSelect" class="form-select"
                                aria-label="Default select example">
                                <option selected>Selecciona Horario</option>
                            </select>
                        </div>
                        <div class="col-9"></div>
                        <div class="col-3">
                            <button id="calcularPromo" type="submit" class="btn btn-primary mt-4">Continuar</button>

                            <a href="{{ route('registrar.prospecto.preinscripcion') }}" id="continuarProceso"
                                type="button" class="btn btn-primary mt-4 d-none">Continuar</a>
                            <button onclick="correccionDatos()" id="corregirDatos" type="button"
                                class="btn btn-primary mt-4 d-none">Corregir Datos</button>
                        </div>

                        <div id="respuestaSuccess" class="col-12 mt-4 row d-none">
                            <div class="col-12">
                                <h3 style="color: rgba(241, 145, 29, 1.00);">Cuota de Incripción Preferencial</h3>
                                <hr style="border: 1px solid rgba(241, 145, 29, 1.00);">
                            </div>
                            <div class="col-9">
                                Gracias a tu Pre-Inscripción en Línea has apartado la Cuota de Inscripción Preferencial
                                de
                                este mes.
                            </div>
                            <div class="col-3"></div>
                            <div class="col-9">
                                Total al pagar:
                            </div>
                            <div id="precioPromo" class="col-3">

                            </div>
                            <div class="col-12">
                                <hr style="border: 1px solid rgba(241, 145, 29, 1.00);">
                            </div>
                            <div class="col-9">
                                Para conservar este descuento y tu lugar en el horario seleccionado, tu fecha límite para
                                cubrir la totalidad de tu inscripción es:
                            </div>
                            <div id="fechaLimitePromo" class="col-3">

                            </div>
                        </div>
                        <div id="respuestaError" class="col-12 mt-4 d-none">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script>
    window.onbeforeunload = function(e) {
        e.preventDefault();
    };
</script>
