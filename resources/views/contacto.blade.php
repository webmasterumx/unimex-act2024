@extends('layouts.layout')

@section('styles')
    <style>
        .bg_contacto {
            background: url("{{ asset('assets/img/extras/bg-01.webp') }}");
            background-position: center;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <section class="container-fluid px-5 mt-5 mb-3">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <h2 class="underlined-head">
                    CONTACTO
                </h2>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#contact-pane"
                            type="button" role="tab" aria-controls="contact-pane"
                            aria-selected="true">Contáctanos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#service-pane"
                            type="button" role="tab" aria-controls="service-pane" aria-selected="false">Servicio
                            para Alumnos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contrata-pane"
                            type="button" role="tab" aria-controls="contrata-pane" aria-selected="false">Contrata
                            Alumnos y Egresados UNIMEX</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#trabaja-pane"
                            type="button" role="tab" aria-controls="trabaja-pane" aria-selected="false">Trabaja en
                            UNIMEX</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#sugerencia-pane"
                            type="button" role="tab" aria-controls="sugerencia-pane" aria-selected="false">Quejas y
                            Sugerencias</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active border" id="contact-pane" role="tabpanel"
                        aria-labelledby="contact-tab" tabindex="0">
                        @include('include.contactoForm')
                    </div>
                    <div class="tab-pane fade px-5 py-3 border" id="service-pane" role="tabpanel"
                        aria-labelledby="service-tab" tabindex="0">
                        @include('forms.servicio-alumnos')
                    </div>
                    <div class="tab-pane fade px-5 py-3 border" id="contrata-pane" role="tabpanel"
                        aria-labelledby="contrata-tab" tabindex="0">
                        <h2>
                            Contrata Alumnos y Egresados UNIMEX
                        </h2>
                        <p>
                            UNIMEX® concentra las ofertas laborales para alumnos y egresados en una sección dedicada a
                            Universidad Mexicana en la Red Universitaria de Empleo de OCC.
                        </p>
                        <p class="text-center">
                            ¿Tu empresa está dada de alta en OCC para publicar vacantes?
                        </p>
                        <div class="row">
                            <div class="col-6 text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    SÍ, YA TENEMOS UNA <br> CUENTA EN OCC
                                </button>
                            </div>
                            <div class="col-6" text-center>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    AÚN NO, QUEREMOS OBTENER <br> UNA CUENTA GRATUITA PARA <br> PUBLICAR VACANTES PARA <br>
                                    UNIMEX
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade px-5 py-3 border" id="trabaja-pane" role="tabpanel"
                        aria-labelledby="trabaja-tab" tabindex="0">
                        @include('forms.trabaja-unimex')
                    </div>
                    <div class="tab-pane fade px-5 py-3 border" id="sugerencia-pane" role="tabpanel"
                        aria-labelledby="sugerencia-tab" tabindex="0">
                        @include('forms.quejas-sugerencias')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 class="modal-title text-center fs-5" id="exampleModalLabel">Empresas Registradas en OCC</h1>
                    <div class="row">
                        <div class="col-12">
                            <p>
                                Ingresa los datos de tu empresa para publicar tus vacantes.
                            </p>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="input-group my-3">
                                <span class="input-group-text text-white" style="background-color: #f8981d;">
                                    <i class="bi bi-bank2"></i>
                                </span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="company-contrata"
                                        name="company-contrata">
                                    <label for="company-contrata">Nombre de la Empresa</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="input-group my-3">
                                <span class="input-group-text text-white" style="background-color: #f8981d;">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name-contrata" name="name-contrata">
                                    <label for="name-contrata">Nombre del Contacto</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="input-group my-3">
                                <span class="input-group-text text-white" style="background-color: #f8981d;">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email-contrata"
                                        name="email-contrata">
                                    <label for="email-contrata">Correo Electronico</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-6">
                            <div class="input-group my-3">
                                <span class="input-group-text text-white" style="background-color: #f8981d;">
                                    <i class="bi bi-telephone-fill"></i>
                                </span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email-contrata"
                                        name="email-contrata">
                                    <label for="email-contrata">Telefono de Casa</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-6">
                            <div class="input-group my-3">
                                <span class="input-group-text text-white" style="background-color: #f8981d;">
                                    <i class="bi bi-phone-fill"></i>
                                </span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email-contrata"
                                        name="email-contrata">
                                    <label for="email-contrata">Telefono Celular</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="input-group my-3">
                                <span class="input-group-text text-white" style="background-color: #f8981d;">
                                    <i class="bi bi-file-earmark-fill"></i>
                                </span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email-contrata"
                                        name="email-contrata">
                                    <label for="email-contrata">Razón Social</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="input-group my-3">
                                <span class="input-group-text text-white" style="background-color: #f8981d;">
                                    <i class="bi bi-folder-fill"></i>
                                </span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email-contrata"
                                        name="email-contrata">
                                    <label for="email-contrata">RFC</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="form-floating">
                                <textarea rows="4" class="form-control" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Comentarios</label>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="mb-3 row">
                                <div class="col-2">
                                    <label for="exampleFormControlInput1" class="form-label">8 + 2 =</label>
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Introduce el resultadio aquí">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Estoy de acuerdo en ser contactado por UNIMEX® y acepto el aviso de privacidad.
                                </label>
                            </div>
                        </div>
                        <div class="mb-4 col-4">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ENVIAR DATOS</button>
                        </div>
                        <div class="mb-4 col-4">
                            <button type="button" class="btn btn-outline-danger">BORRAR DATOS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
