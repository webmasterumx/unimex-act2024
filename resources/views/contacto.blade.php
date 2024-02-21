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
                                <button onclick="establecerTipoDeEmpresaOCC(1)" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#empresasOCC">
                                    SÍ, YA TENEMOS UNA <br> CUENTA EN OCC
                                </button>
                            </div>
                            <div class="col-6" text-center>
                                <button onclick="establecerTipoDeEmpresaOCC(0)" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#empresasOCC">
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
@endsection

@include('modales.empresasOCC')

@section('scripts')
    <script src="{{ asset('assets/js/combos.js') }}"></script>
    <script>
        $(document).ready(function() {

            // servico para alumnos
            $('#number1').val(Math.floor(Math.random() * 10));
            $('#number2').val(Math.floor(Math.random() * 10));

            //trabaja en unimex
            $('#number3').val(Math.floor(Math.random() * 10));
            $('#number4').val(Math.floor(Math.random() * 10));

            //quejas y sugerencias
            $('#number5').val(Math.floor(Math.random() * 10));
            $('#number6').val(Math.floor(Math.random() * 10));

        });

        $("#phone_casa_service").bind('keypress', function(event) {
            var regex = new RegExp("^[0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });

        $("#movil_service").bind('keypress', function(event) {
            var regex = new RegExp("^[0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });

        $("#nivelSelect").append(`<option value="">Nivel</option>`);
        $("#carreraSelect").append(`<option value="">Carrera</option>`);
    </script>
@endsection
