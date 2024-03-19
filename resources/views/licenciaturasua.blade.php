@extends('layouts.layout')

@section('metas')
    @include('metas.licenciaturasSua.condicional')
@endsection

@section('styles')
    <style>
        #contraportada {
            background-position: 50% 97%;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("{{ asset($licenciatura_sua->contraportada) }}");
        }

        .bg_contacto {
            background: url("{{ asset('assets/img/extras/bg-01.webp') }}");
            background-position: center;
            background-size: cover;
        }

        .bg_campo_laboral {
            background: url("{{ asset('assets/img/extras/campo_laboral.jpg') }}");
            background-position: center;
            background-size: cover;
        }

        #text_ventajas {
            height: 400px;
            overflow-y: scroll;
        }

        .bg_requisitos {
            background: url("{{ asset('assets/img/extras/requisitos.png') }}");
            background-position: center;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <!-- Inicio de portada -->
    <section id="portada" style="background-image: url({{ asset($licenciatura_sua->portada) }}); position: relative;">
        <h1 class="etiqueta-titulo p-3 text-uppercase"> sua {{ $licenciatura_sua->titulo }} </h1>
    </section>
    <!-- Fin de portada -->

    <!-- Inicio de la sección de objetivo -->
    <section class="container-fluid p-5">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2">
                <h1 class="underlined-head text-uppercase fw-normal" style="font-size: 1.438rem;">
                    (SUA) LICENCIATURA EN <br> {{ $licenciatura_sua->titulo }}
                </h1>
            </div>
            <div class="col-12 col-md-9 col-lg-10 text-justify">
                {!! $licenciatura_sua->objetivo !!}
                <br><br>
                <button class="btn bg-unimex text-white">
                    ¿Cómo obtengo mi Beca?
                </button>
                <a href="" class="btn bg-unimex text-white">
                    Calcula tu Couta
                </a>
                <a href="{{ route('preinscripcion.linea') }}" class="btn text-white" style="background-color: #de951b;">
                    Preinscripción En Línea
                </a>
            </div>
        </div>
    </section>
    <!-- Fin de la sección de objetivo -->

    <!-- Inicio de la sección de ventajas -->
    <section class="container-fluid">
        <div class="row">
            <div id="contraportada" class="col-12 col-md-6 col-lg-6">
            </div>
            <div id="text_ventajas" class="col-12 col-md-6 col-lg-6 bg-articule p-5">
                <h1 style="font-size: 1.438rem;" class="underlined-head text-uppercase fw-normal">
                    ventajas de estudiar [sua] {{ $licenciatura_sua->titulo }}
                </h1>
                <p>
                    Asesorías voluntarias. No tienes que asistir a clases; puedes estudiar desde tu casa y si tienes dudas
                    cuentas con asesorías sabatinas de asistencia opcional. Sólo se requiere tu asistencia para la
                    evaluación de la materia.
                    <br><br>
                    Tú tienes el control. Es un modelo de estudio autodidacta, diseñado para personas mayores de 21 años que
                    ya estén laborando. Te permite crear tu propia rutina de estudio, tomando el control sobre tu tiempo y
                    toda la responsabilidad sobre tu propia formación.
                    <br><br>
                    Terminas en 2 años 4 meses. Es un Plan de Estudios concentrado que abarca todos los contenidos
                    necesarios en 7 cuatrimestres, para permitir que termines tu carrera universitaria antes que en otras
                    universidades.
                    <br><br>
                    Libro Único de aprendizaje. Tu enseñanza se basará en el modelo de Libro Único de Aprendizaje, que
                    garantiza que el contenido de tu materia y la evaluación se basarán en una fuente reconocida en el tema.
                    <br><br>
                    RVOE. Reconocimiento de Validez Oficial de Estudios de la SEP que garantiza que tus estudios serán
                    oficialmente válidos.
                    <br><br>
                </p>
            </div>
        </div>
    </section>
    <!-- Fin de la sección de ventajas -->

    <!-- Inicio de temario -->
    <section class="py-3">
        <div class="container px-5">
            <div class="col-12">
                <h2 class="text-center underlined-head-center">
                    PLAN DE ESTUDIOS
                </h2>
            </div>
            <div id="temario" class="col-12 mt-5">
                @for ($i = 0; $i < sizeof($temario); $i++)
                    <div class="card border-0 mx-3 h-100" style="max-height: 300px;">
                        <h5 class="card-header bg-unimex text-white text-center">
                            {{ $temario[$i]['nombrecuatrimestre'] }}</h5>
                        <div class="card-body bg-articule" style="min-height: 300px;">
                            <ul>
                                @for ($j = 0; $j < sizeof($temario[$i]['temas']); $j++)
                                    <li class="py-1">
                                        {{ $temario[$i]['temas'][$j] }}
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <!-- Fin de temario -->

    <!-- Inicio de la Sección de Contacto -->
    @include('include.contactoForm')
    <!-- Fin de la Sección de Contacto -->

    <!-- Inicio de Campo Laboral -->
    <section class="bg_campo_laboral container-fluid px-5 py-5 text-white">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <h1 style="font-size: 1.50rem;" class="underlined-head text-uppercase text-white">
                    sua {{ $licenciatura_sua->subtitulo }}
                </h1>
                <p class="text-justify">
                    Campo Laboral <br>
                    {{ $licenciatura_sua->campo_laboral }}
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 px-3">
                <div id="campo_laboral" style="max-height: 100px !important">
                    @for ($z = 0; $z < sizeof($campo_laboral); $z++)
                        <div class="card bg-transparent border-0">
                            <div class="card-body text-center text-white">
                                <center>
                                    <img src="{{ asset('assets/img/extras/organization.png') }}" alt="">
                                </center>
                                <br>
                                <p>
                                    {!! $campo_laboral[$z] !!}
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
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
                <h2 class="underlined-head">
                    REQUISITOS
                </h2>
                <div id="requisitos">
                    <div class="card border-0">
                        <div class="card-body">
                            <p>
                                <b>
                                    Acude al Plantel Veracruz para iniciar tu trámite de inscripción. Un asesor resolverá
                                    tus dudas y te ayudará con el proceso.
                                </b>
                                Estos son los pasos para inscribirte:
                                <br>
                                Realiza el pago de tu Inscripción en cualquier sucursal Banamex.
                                <br>
                                <br>
                                Entrega tus documentos completos:
                                <br>
                                <br>
                                Acta de Nacimiento (original y una copia). <br>
                                Certificado de Preparatoria; si aún no te lo entregan, presenta la Carta de Terminación <br>
                                de Estudios y tu Historial Académico (Original y una copia). <br>
                                Una fotografía tamaño infantil. <br>
                                Comprobante de Pago de inscripción (una copia). <br>
                            </p>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-body">
                            <p>
                                <b>Estudiantes Extranjeros Anexar:</b>
                            <ul>
                                <li>Copia de Pasaporte y visa.</li>
                                <li>Formato FM3 (expedido por la Secretaría de Relaciones Exteriores) que Avale su
                                    residencia como estudiantes.</li>
                                <li>Apostillado del Acta de Nacimiento.</li>
                                <li>Revalidación de Estudios (Emitida por la SEP).</li>
                                <li>Requisito indispensable: para iniciar tu carrera universitaria con nosotros debes tener
                                    aprobadas todas tus materias del bachillerato.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Sección de Requisitos -->

    <!-- Inicio de la Sección de disponibilidad -->
    <section class="container-fluid px-5 py-5 bg_planteles_dis">
        <div class="row">
            <div class="col-12 text-center p-0 mb-3">
                <h1 class="fw-light" style="font-size: 1.438rem; color: #ffff;">ESTA LICENCIATURA ESTÁ DISPONIBLE EN LOS
                    PLANTELES:</h1>
                <p class="text-white">
                    VERACRUZ <br>
                    {{ $licenciatura_sua->reconocimiento }}
                </p>
            </div>
        </div>
    </section>
    <!-- Fin de la Sección de disponibilidad -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/combosCarrera.js') }}"></script>
    <script>
        $('#temario').slick({
            infinite: false,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            autoplaySpeed: 2000,
            prevArrow: '<button type="button" class="slick-prev-tema"><i class="bi bi-chevron-compact-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next-tema"><i class="bi bi-chevron-compact-right"></i></button>',
        });

        $('#campo_laboral').slick({
            infinite: false,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            autoplaySpeed: 2000,
            prevArrow: '<button type="button" class="slick-prev-campo"><i class="bi bi-chevron-compact-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next-campo"><i class="bi bi-chevron-compact-right"></i></button>',
        });

        $('#requisitos').slick({
            infinite: false,
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            autoplaySpeed: 2000,
            prevArrow: '<button type="button" class="slick-prev-requisitos"><i class="bi bi-arrow-left-circle-fill"></i></button>',
            nextArrow: '<button type="button" class="slick-next-requisitos"><i class="bi bi-arrow-right-circle-fill"></i></button>',
        });
    </script>
@endsection
