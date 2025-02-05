@extends('layouts.layout')

@section('metas')
    @include('metas.posgradosDistancia.condicional')
@endsection

@section('styles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
@endsection

<style>
    #contraportada {
        background-position: center;
        background-size: cover;
        background-image: url("{{ asset($contraportada) }}");
    }

    .bg_campo_laboral {
        background: url("{{ asset('assets/img/extras/campo_laboral.jpg') }}");
        background-position: center;
        background-size: cover;
    }

    .bg_contacto {
        background: url("{{ asset('assets/img/extras/bg-01.webp') }}");
        background-position: center;
        background-size: cover;
    }

    .bg_requisitos {
        background: url("{{ asset('assets/img/extras/requisitos.png') }}");
        background-position: center;
        background-size: cover;
    }

    .slick-list {
        max-height: 480px !important;
    }

    #peridoSelectFolleto-error,
    #plantelSelectFolleto-error {
        display: none !important;
    }
</style>

@section('content')
    <!-- Inicio de portada -->
    <section id="portada" style="background-image: url({{ asset($posgrado->portada) }}); position: relative;">
        <h1 class="etiqueta-titulo p-3 text-uppercase" style="font-size: 30px;"> {{ $posgrado->nombre }} ONLINE </h1>
    </section>
    <!-- Fin de portada -->

    <!-- Inicio de la sección de objetivo -->
    <section class="container-fluid px-5 py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="underlined_head_obj text-center text-uppercase fw-normal" style="font-size: 1.438rem;">
                    @if ($posgrado->nombre == 'Docencia')
                        especialidad en {{ $posgrado->nombre }}
                    @else
                        especialidad y maestría ONLINE en {{ $posgrado->nombre }}
                    @endif
                </h2>
            </div>
            <div class="col-12">
                {!! $posgrado->objetivo !!}
            </div>
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-12 col-md-6 mb-2 mb-md-0">
                        <div class="d-grid gap-2">
                            <a id="redireccionCTCL" href="javascript:calculadoraHeader('{{ $posgrado->abreviatura }}')"
                                class="btn btn-outline-primary">
                                Calculadora de Becas
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2 mb-md-0">
                        <div class="d-grid gap-2">
                            <a id="redireccionPELL" href="javascript:preinscripcionHeader('{{ $posgrado->abreviatura }}')"
                                class="btn text-white" style="background-color: #de951b;">
                                Preinscripción En Línea
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la sección de objetivo -->

    <!-- Inicio de la sección de ventajas -->
    <section class="container-fluid bg-articule">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <img src="{{ asset($contraportada) }}" alt="" style="width: 100%; height:100%;">
            </div>
            <div id="text_ventajas" class="col-12 col-md-6 col-lg-6 bg-articule p-5">
                <h1 style="font-size: 1.25rem;" class="underlined-head text-uppercase fw-normal">
                    Ventajas de estudiar el posgrado ONLINE en {{ $posgrado->nombre }}
                </h1>
                <p>
                    <br>
                    <b>
                        Enfoque.
                    </b><br>
                    1 materia por módulo, 3 módulos por cuatrimestre. <br><br>
                    <b>
                        Tú decides.
                    </b><br>
                    Conéctate a las sesiones desde donde quieras o ve la grabación. <br><br>
                    <b>
                        Acompañamiento.
                    </b><br>
                    Cuentas con un asesor para guiar tu aprendizaje y coordinador para monitorear tu avance. <br><br>
                    <b>
                        Reconocimiento de Validez Oficial de Estudios.
                    </b><br>
                    RVOE Federal otorgado por la SEP que garantiza que tus estudios serán oficialmente válidos. <br><br>
                </p>
            </div>
        </div>
    </section>
    <!-- Fin de la sección de ventajas -->

    <!-- Inicio de temario de especialidad y maestria -->
    <section class="py-3">
        <div class="container-fluid p-5">
            <div class="col-12">
                <h2 class="underlined-head fw-normal" style="font-size: 1.438rem;">
                    PLAN DE ESTUDIOS Y RVOES
                </h2>
                <p>
                    Es ideal para alumnos que trabajan, ya que cada Ciclo se forma por 3 módulos, cada uno enfocado en una
                    sola materia, facilitando tu proceso de aprendizaje.
                    <br><br>
                    <b>Especialidad con Reconocimiento de Validez Oficial de Estudios de la SEP:</b>
                    <br><br>
                    @for ($i = 0; $i < sizeof($rvoe_especialidad); $i++)
                        {{ $rvoe_especialidad[$i] }} <br>
                    @endfor
                </p>
            </div>
            <div id="temario_especialidad" class="col-12 mt-1">
                @for ($i = 0; $i < sizeof($temario_especialidad); $i++)
                    <div class="card border-0 mx-3 h-100" style="max-height: 240px;">
                        <h5 class="card-header bg-unimex text-white text-center">
                            {{ $temario_especialidad[$i]['nombrecuatrimestre'] }}</h5>
                        <div class="card-body bg-articule" style="min-height: 240px;">
                            <ul>
                                @for ($j = 0; $j < sizeof($temario_especialidad[$i]['temas']); $j++)
                                    <li class="py-1">
                                        {{ $temario_especialidad[$i]['temas'][$j] }}
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                @endfor
            </div>

            @if ($posgrado->nombre != 'Docencia')
                <div class="col-12">
                    <p>
                        <b>
                            Maestría  con Reconocimiento de Validez Oficial de Estudios de la SEP:
                        </b>
                        <br><br>
                        @for ($i = 0; $i < sizeof($rvoe_maestria); $i++)
                            {{ $rvoe_maestria[$i] }} <br>
                        @endfor
                    </p>
                </div>
                <div id="temario_maestria" class="col-12 mt-1">
                    @for ($i = 0; $i < sizeof($temario_maestria); $i++)
                        <div class="card border-0 mx-3 h-100" style="max-height: 240px;">
                            <h5 class="card-header bg-unimex text-white text-center">
                                {{ $temario_maestria[$i]['nombrecuatrimestre'] }}</h5>
                            <div class="card-body bg-articule" style="min-height: 240px;">
                                <ul>
                                    @for ($j = 0; $j < sizeof($temario_maestria[$i]['temas']); $j++)
                                        <li class="py-1">
                                            {{ $temario_maestria[$i]['temas'][$j] }}
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    @endfor
                </div>
            @endif


            <div class="col-12">
                <p>
                    <b>Duración</b> <br><br>
                    Duración de la Especialidad: 3 Ciclos (1 año) <br>
                    Duración de la Maestría: 6 ciclos (2 años) <br><br>
                    Nota: La duración mencionada está sujeta al curso continuo de los estudios; consulta la programación de
                    aperturas en el plantel de tu elección.
                    <br><br>
                </p>
                <p class="text-center">
                    <button data-bs-toggle="modal" data-bs-target="#continuaConTuMaestria" type="button"
                        class="btn btn-primary mb-2 mb-md-0">Continúa con tu maestría en UNIMEX</button>
                    <button data-bs-toggle="modal" data-bs-target="#titulacionEstudiosPosgrado" type="button"
                        class="btn btn-primary mb-2 mb-md-0">Titulación vía estudios de posgrados</button>
                </p>
            </div>
        </div>
    </section>
    <!-- Fin de temario de especialidad y maestria -->

    @include('include.folletoForm')

    <!-- Inicio de la Sección de Contacto -->
    @php
        $nivel = 'posgrado';
    @endphp
    @include('include.contactoForm')
    <!-- Fin de la Sección de Contacto -->

    <!-- Inicio de Campo Laboral -->
    <section class="bg_campo_laboral container-fluid px-5 py-5 text-white">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <h1 style="font-size: 1.50rem;" class="underlined-head text-uppercase text-white">
                    bolsa de trabajo
                </h1>
                <p class="text-justify">
                    Ofertas laborales en la Bolsa de Trabajo <br>
                    Universidad Mexicana recibe las vacantes de cientos de empresas interesadas en contratar a nuestros
                    alumnos y egresados. Para revisar las ofertas exclusivas para nuestra comunidad.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p class="text-center text-white">
                    <a target="_blank" href="https://unimex.occ.com.mx/Bolsa_Trabajo">
                        <i class="fas fa-briefcase fa-5x text-white"></i>
                    </a><br>
                    Consulta la Bolsa de Trabajo OCC-UNIMEX
                </p>
            </div>
        </div>
    </section>
    <!-- Fin de Campo Laboral -->

    <!-- Inicio de la Sección de Requisitos -->
    <section class="container-fluid px-5 py-5">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 bg_requisitos">

            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <h2 class="underlined-head fw-normal" style="font-size: 1.438rem;">
                    REQUISITOS
                </h2>
                <div id="requisitos" style="height: 480px;">
                    <div class="card border-0">
                        <div class="card-body" style="height: 480px">
                            <p>
                                <b>
                                    Si cuentas con Título de Licenciatura
                                </b><br><br>
                                Original y copia del Acta de Nacimiento. <br>
                                Copia del Título o Cédula Profesional. <br>
                                Original y una fotocopia del Certificado Total de Estudios de Licenciatura* <br><br>
                                *En caso de no contar con este documento presentar una Constancia de Terminación con el 100%
                                de las materias acreditadas. Si su título está en trámite en su Universidad de origen,
                                presentar la constancia del trámite de Titulación y/o Cédula Profesional, especificando la
                                fecha de obtención del mismo (deberá presentarlo dentro del plazo señalado por UNIMEX®).
                            </p>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-body" style="height: 480px">
                            <p>
                                <b>Si deseas titularte de Licenciatura mediante estudios de Posgrado</b> <br><br>
                                Original o copia certificada del Acta de Nacimiento y una fotocopia. <br>
                                Original y una fotocopia del Certificado Total de Estudios de Licenciatura* <br>
                                En caso de cursar el Posgrado como medio de Titulación, presentar una Carta de Autorización.
                                <br>
                                para Titularse vía créditos de Posgrado, emitida por tu Universidad de origen**, indicando
                                el porcentaje de créditos necesarios.
                                <br><br>
                                * Legalizado, en caso de Universidades no incorporadas a la S.E.P. <br>
                                ** únicamente para egresados de otras instituciones que desean estudiar un Posgrado en
                                UNIMEX® como opción de titulación.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Sección de Requisitos -->

    @include('modales.continuaConTuMaestria')
    @include('modales.titulacionViaEstudiosPosgrado')

    <!-- del Modal de errores de Folleto-->
    @include('modales.folleto.ModalMensajeFolleto')
    <!-- del Modal de errores de Folleto-->
@endsection

@section('scripts')
    @php
        $compCalJs2 = filemtime('assets/js/combosCarrera.js');
        $rutaCalJs2 = 'assets/js/combosCarrera.js?' . $compCalJs2;
    @endphp
    <script src="{{ asset($rutaCalJs2) }}"></script>
    <script>
        $('#temario_especialidad').slick({
            infinite: false,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<button type="button" class="slick-prev-tema"><i class="bi bi-chevron-compact-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next-tema"><i class="bi bi-chevron-compact-right"></i></button>',
        });

        $('#temario_maestria').slick({
            infinite: false,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<button type="button" class="slick-prev-tema"><i class="bi bi-chevron-compact-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next-tema"><i class="bi bi-chevron-compact-right"></i></button>',
        });

        $('#requisitos').slick({
            infinite: false,
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            autoplaySpeed: 2000,
            prevArrow: '<button type="button" class="slick-prev-tema"><i class="bi bi-chevron-compact-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next-tema"><i class="bi bi-chevron-compact-right"></i></button>',
        });

        function getCarreraPosicion() {
            let carreraPosicionado = "{{ $posgrado->nombre }}";

            return carreraPosicionado;
        }

        function getNivelPosicion() {
            let nivelPosicionado = 2;

            return nivelPosicionado;
        }

        function getNivelPagina() {
            let nivelPosicionado = 4;

            return nivelPosicionado;
        }

        var nivelPosicionado = "Especialidad";
        var carreraPosicionado = "{{ $posgrado->nombre }}";

        $('#aceptarAvisoPrivacidadFolleto').on('click', function() {
            if ($(this).is(':checked')) {
                // Hacer algo si el checkbox ha sido seleccionado
                //console.log("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
                $('#descargaFolleto').attr('disabled', false);
            } else {
                // Hacer algo si el checkbox ha sido deseleccionado
                //console.log("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
                $('#descargaFolleto').attr('disabled', true);
            }
        });
    </script>

    @php
        $compCalJs = filemtime('assets/js/folletoUnimex/combos.js');
        $rutaCalJs = 'assets/js/folletoUnimex/combos.js?' . $compCalJs;

        $compCalJs1 = filemtime('assets/js/folletoUnimex/form.js');
        $rutaCalJs1 = 'assets/js/folletoUnimex/form.js?' . $compCalJs1;
    @endphp
    <script src="{{ asset($rutaCalJs) }}"></script>
    <script src="{{ asset($rutaCalJs1) }}"></script>

    @include('include.redirecciones.inOfertaAcademica')
@endsection
