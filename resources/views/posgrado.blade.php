@extends('layouts.layout')

@section('metas')
    @include('metas.posgrados.condicional')
@endsection

<style>
    #contraportada {
        background-position: center;
        background-size: cover;
        background-image: url("{{ asset($posgrado->contraportada) }}");
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

    #text_ventajas {
        height: 550px;
        overflow-y: scroll;
    }
</style>

@section('content')
    <!-- Inicio de portada -->
    <section id="portada" style="background-image: url({{ asset($posgrado->portada) }}); position: relative;">
        <h1 class="etiqueta-titulo p-3 text-uppercase"> {{ $posgrado->titulo }} </h1>
    </section>
    <!-- Fin de portada -->

    <!-- Inicio de la sección de objetivo -->
    <section class="container-fluid px-5 py-5">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2">
                <h2 class="underlined-head text-uppercase fw-normal" style="font-size: 1.438rem;">
                    especialidad y <br> maestría en {{ $posgrado->titulo }}
                </h2>
            </div>
            <div class="col-12 col-md-9 col-lg-10 text-justify">
                {!! $posgrado->objetivo !!}
                <br><br>
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
                <h1 style="font-size: 1.25rem;" class="underlined-head text-uppercase fw-normal">
                    Ventajas de estudiar el posgrado en {{ $posgrado->titulo }}
                </h1>
                <p>
                    Obtienes un nivel de preparación profesional superior que puede facilitarte alcanzar las mejores
                    oportunidades.
                    <br><br>
                    Beca UNIMEX para Especialidades hasta del 35% y para Maestrías hasta del 20%. <br>
                    Nota: Para conocer más acerca de las Becas UNIMEX consulta la sección Beca Posgrado.
                    <br><br>
                    Puedes aplicar el Programa “Continúa con tu Maestría en UNIMEX®”:
                    En Universidad Mexicana puedes estudiar tu Maestría como continuación de tu Especialidad UNIMEX®. Al
                    terminar los 3 ciclos escolares de la Especialidad, puedes solicitar tu equivalencia de materias para
                    continuar con la Maestría cursando únicamente los últimos dos ciclos del programa equivalente.
                    Nota: Para más información consulta la sección <a href="#">Continúa con tu Maestría.</a>
                    <br><br>
                    Nota: La inscripción está sujeta a la apertura y cupo en el grupo seleccionado. La apertura de los
                    grupos está sujeta a la disponibilidad del programa en el plantel deseado y a un mínimo de 25 alumnos
                    inscritos por grupo, previo al inicio de clases. Consulta los programas que se impartirán en el ciclo de
                    tu interés y en el plantel deseado.
                    <br><br>
                    Válido para titulación de Licenciatura vía estudios de Posgrado.
                    Si concluiste al 100% los créditos de tu Licenciatura y tienes disponible la opción de Titulación vía
                    Estudios de Posgrado, regístrate, llámanos o ven al plantel para brindarte mayor información.
                    Consulta los requisitos en la sección <a href="">Titulación de Licenciatura vía estudios de
                        Posgrado.</a>
                </p>
            </div>
        </div>
    </section>
    <!-- Fin de la sección de ventajas -->

    <!-- Inicio de temario de especialidad y maestria -->
    <section class="py-3">
        <div class="container-fluid p-5">
            <div class="col-12">
                <h2 class="underlined-head fw-normal">
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
                    <div class="card border-0 mx-3 h-100" style="max-height: 200px;">
                        <h5 class="card-header bg-unimex text-white text-center">
                            {{ $temario_especialidad[$i]['nombrecuatrimestre'] }}</h5>
                        <div class="card-body bg-articule" style="min-height: 200px;">
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
            <div class="col-12">
                <p>
                    <b>
                        Especialidad con Reconocimiento de Validez Oficial de Estudios de la SEP:
                    </b>
                    <br><br>
                    @for ($i = 0; $i < sizeof($rvoe_maestria); $i++)
                        {{ $rvoe_maestria[$i] }} <br>
                    @endfor
                </p>
            </div>
            <div id="temario_maestria" class="col-12 mt-1">
                @for ($i = 0; $i < sizeof($temario_maestria); $i++)
                    <div class="card border-0 mx-3 h-100" style="max-height: 200px;">
                        <h5 class="card-header bg-unimex text-white text-center">
                            {{ $temario_maestria[$i]['nombrecuatrimestre'] }}</h5>
                        <div class="card-body bg-articule" style="min-height: 200px;">
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
            <div class="col-12">
                <p>
                    <b>Duración:</b> <br>
                    Duración de la Especialidad: 3 Ciclos (1 año) <br>
                    Duración de la Maestría: 5 ciclos (1 año 8 meses) <br>
                    Nota: La duración mencionada está sujeta al curso continuo de los estudios; consulta la programación de
                    aperturas en el plantel de tu elección.
                    <br><br>
                    <button type="button" class="btn btn-primary">Continúa con tu maestría en UNIMEX</button>
                    <button type="button" class="btn btn-primary">Titulación vía estudios de posgrados</button>
                </p>
            </div>
        </div>
    </section>
    <!-- Fin de temario de especialidad y maestria -->

    <!-- Inicio de la Sección de Contacto -->
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
                <h2 class="underlined-head">
                    REQUISITOS
                </h2>
                <div id="requisitos">
                    <div class="card border-0">
                        <div class="card-body">
                            <p>
                                <b>
                                    Si cuentas con Título de Licenciatura
                                </b>
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
                        <div class="card-body">
                            <p>
                                <b>Si deseas titularte de Licenciatura mediante estudios de Posgrado</b>
                                Original o copia certificada del Acta de Nacimiento y una fotocopia
                                Original y una fotocopia del Certificado Total de Estudios de Licenciatura*
                                En caso de cursar el Posgrado como medio de Titulación, presentar una Carta de Autorización
                                para Titularse vía créditos de Posgrado, emitida por tu Universidad de origen**, indicando
                                el porcentaje de créditos necesarios.
                                <br><br>
                                * Legalizado, en caso de Universidades no incorporadas a la S.E.P.
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

    <!-- Inicio de la Sección de disponibilidad -->
    <section class="container-fluid px-5 py-5 bg_planteles_dis">
        <div class="row">
            <div class="col-12 text-center p-0 mb-3">
                <h1 class="fw-light" style="font-size: 1.438rem; color: #ffff;">HORARIOS:</h1>
                <p class="text-white">
                    En Universidad Mexicana estamos conscientes de la necesidad de contar con opciones de estudio que
                    permitan al alumno estudiar <br>
                    y trabajar, por lo que ofrecemos los siguientes horarios: <br>
                </p>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td class="text-center bg_planteles_dis text-white">
                                SABATINO <br>
                                Sólo sábados de 8:00 a 13:00 h.
                            </td>
                            <td class="text-center bg_planteles_dis text-white">
                                VESPERTINO <br>
                                Sólo 2 tardes entre semana de 19:30 a 22:00 h.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Fin de la Sección de disponibilidad -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/combosCarrera.js') }}"></script>
    <script>
        $('#temario_especialidad').slick({
            infinite: false,
            autoplay: false,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            autoplaySpeed: 2000,
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
            prevArrow: '<button type="button" class="slick-prev-tema"><i class="bi bi-chevron-compact-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next-tema"><i class="bi bi-chevron-compact-right"></i></button>',
        });
    </script>
@endsection
