<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- METAS -->
    @yield('metas')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- SLICK CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- ICONOS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/non-critical-styles10062022.min.css') }}">

    @yield('styles')

</head>

<body>

    <!-- Queda pendiente hacer dinamico la barra de navegación -->

    <!-- Inicio de Barra de navegacion -->
    <header class="sticky-top">
        <noscript>Por favor habilita JavaScript para usar este sitio</noscript>
        <nav class="navigation">
            <div class="wrapper d-flex">
                <a href="{{ route('inicio') }}" rel="noopener noreferrer">
                    <img class="logo lazyload" src="{{ asset('assets/img/header/logo-2020.webp') }}" width="259"
                        height="80" alt="Logo Institucional de Universidad Mexicana"
                        title="Universidad Mexicana, educación que se adapta a ti.">
                </a>
                <div class="menu" id="navigation">
                    <a class="btn-close-nav" onclick="nav.hide()"></a>
                    <ul>
                        <li>
                            <a onclick="subnav.show('subnavAbout')"
                                title="Conoce la hisotria de Universidad Mexicana">Acerca de UNIMEX </a>
                        </li>
                        <li>
                            <a onclick="subnav.show('subnavAcademicOffer')"
                                title="Conoce nuestras Licenciaturas, Maestrías y Posgrados">Oferta Académica</a>
                        </li>
                        <li>
                            <a href="https://testing.unimex.edu.mx/calcula-tu-cuota" target="_blank" rel="noopener"
                                title="Calcula tu Cuota">Calcula tu cuota</a>
                        </li>
                        <li>
                            <a onclick="subnav.show('subnavSchools')" title="Conoce nuestros 4 Planteles">Planteles</a>
                        </li>
                        <li>
                            <a onclick="subnav.show('alumnosegresados')"
                                title="Servicios para nuestos Alumnos y Egresados">Alumnos Y Egresados</a>
                        </li>
                        <li>
                            <a href="contacto" title="¿Necesitas ayuda?">Contacto</a>
                        </li>
                    </ul>
                </div>
                <a href="./contacto" id="anclaresgistrate">INFORMES</a>
                <a href="./contacto" id="anclaresgistratepages">INFORMES</a>
                <a class="toggler-laravel" onclick="nav.show()"></a>
            </div>
        </nav>
        <div class="wrapper">
            <nav class="subnav" id="subnavAbout">
                <a class="btn-close-nav" onclick="subnav.hide('subnavAbout')"></a>
                <div class="container">
                    <div class="row">
                        @foreach ($data['acercade'] as $acerca)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 left-gray-border">
                                <h5 class="hide">
                                    <a href="{{ route('acercade', $acerca->slug) }}"> {{ $acerca->nombre }} </a>
                                </h5>
                                <div class="card">
                                    <a href="{{ route('acercade', $acerca->slug) }}">
                                        <div class="parent">
                                            <div class="child {{ $acerca->clase_img }}">
                                                <span class="linka"> {{ $acerca->nombre }} </span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            {!! $acerca->descripcion !!}
                                        </p>
                                        <a href="{{ route('acercade', $acerca->slug) }}" class="btn btn-primary btn-arrow-go"> {{ $acerca->nombre }} </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </nav>
            <nav class="subnav" id="subnavSchools">
                <a class="btn-close-nav" onclick="subnav.hide('subnavSchools')"></a>
                <div class="container">
                    <div class="row">
                        @foreach ($data['planteles'] as $plantel)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 left-gray-border">
                                <div class="card" style="min-height: 1px;">
                                    <a href="{{ route('plantel', $plantel->nombre) }}">
                                        <div class="parent">
                                            <div class="child {{ $plantel->clase_img }}">
                                                <span class="linka text-capitalize">{{ $plantel->nombre }}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <br>
                                        </p>
                                        <a href="{{ route('plantel', $plantel->nombre) }}"
                                            class="btn btn-primary btn-arrow-go">Plantel {{ $plantel->nombre }} </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </nav>
            <nav class="subnav" id="alumnosegresados">
                <a class="btn-close-nav" onclick="subnav.hide('alumnosegresados')"></a>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
                            <h5 class="hide top-gray-border">
                                <a href="http://comunimex.lat/kioscoalumnosresponsive/" target="_blank"
                                    rel="noopener">Kiosco en Línea</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a target="_blank" rel="noopener"
                                    href="http://comunimex.lat/kioscoalumnosresponsive/">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-kiosco">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="http://comunimex.lat/kioscoalumnosresponsive/" target="_blank"
                                            rel="noopener"><span class="blue-text">Kiosco en Línea</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide">
                                <a href="http://portal.microsoftonline.com/" target="_blank" rel="noopener">Correo
                                    ComUNIMEX</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a target="_blank" rel="noopener" href="http://portal.microsoftonline.com/">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-correo">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="http://portal.microsoftonline.com/" target="_blank"
                                            rel="noopener"><span class="blue-text">Correo ComUNIMEX</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide">
                                <a href="https://testing.unimex.edu.mx/examen-de-conocimientos" target="_blank"
                                    rel="noopener">Examen de Conocimientos</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a target="_blank" rel="noopener"
                                    href="https://testing.unimex.edu.mx/examen-de-conocimientos">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-examen">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="https://testing.unimex.edu.mx/examen-de-conocimientos"
                                            target="_blank" rel="noopener"><span class="blue-text">Examen de
                                                Conocimientos</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide">
                                <a href="https://testing.unimex.edu.mx/resultados-examen/" target="_blank"
                                    rel="noopener">Resultados
                                    del Examen de Conocimientos</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a href="https://testing.unimex.edu.mx/resultados-examen/" target="_blank"
                                    rel="noopener">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-resultadoexamen">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text">
                                        <a href="https://testing.unimex.edu.mx/resultados-examen/" target="_blank"
                                            rel="noopener"><span class="blue-text">Resultados del Examen de
                                                Conocimientos</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--nuevo-->
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12  left-gray-border">
                            <h5 class="hide">
                                <a href="/calendarios-escolares" target="_blank"
                                    rel="noopener noreferrer">Calendarios Escolares</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a href="/calendarios-escolares" target="_blank" rel="noopener noreferrer">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-calendario">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: center;">
                                            <a href="calendarios-escolares" target="_blank"
                                                rel="noopener noreferrer">
                                                <span class="blue-text">Calendarios Escolares</span></a>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--termina-->

                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide">
                                <a href="javascript:void(0);"
                                    onClick="window.open('http://www.facebook.com/sharer.php?u=http://www.unimex.edu.mx','Compartir','scrollbars=no,width=600,height=450')">Recomienda
                                    UNIMEX®</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a href="javascript:void(0);"
                                    onClick="window.open('http://www.facebook.com/sharer.php?u=http://www.unimex.edu.mx','Compartir','scrollbars=no,width=600,height=450')">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-recomienda">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="javascript:void(0);"
                                            onClick="window.open('http://www.facebook.com/sharer.php?u=http://www.unimex.edu.mx','Compartir','scrollbars=no,width=600,height=450')"><span
                                                class="blue-text">Recomienda UNIMEX®</span></a>

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide">
                                <a href="opciones-de-titulacion" target="_blank" rel="noopener">Opciones de
                                    Titulación</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a href="opciones-de-titulacion" target="_blank" rel="noopener">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-titulacion">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="opciones-de-titulacion" target="_blank" rel="noopener"><span
                                                class="blue-text">Opciones de Titulación</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide">
                                <a href="servicio-social" target="_blank" rel="noopener">Servicio Social</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a href="servicio-social" target="_blank" rel="noopener">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-serviciosocial">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="servicio-social" target="_blank" rel="noopener"><span
                                                class="blue-text">Servicio Social</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide">
                                <a href="javascript:void(0);"
                                    onClick="window.open('https://testing.unimex.edu.mx/reglamento.html','Reglamento UNIMEX','scrollbars=no,width=580,height=600')">Reglamento
                                    UNIMEX®</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a href="javascript:void(0);"
                                    onClick="window.open('https://testing.unimex.edu.mx/reglamento.html','Reglamento UNIMEX','scrollbars=no,width=580,height=600')">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-reglamento">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="javascript:void(0);"
                                            onClick="window.open('https://testing.unimex.edu.mx/reglamento.html','Reglamento UNIMEX','scrollbars=no,width=580,height=600')"><span
                                                class="blue-text">Reglamento UNIMEX®</span></a>

                                    </p>

                                </div>
                            </div>
                        </div>
                        <!--nueva bolsa de trabajo-->
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide">
                                <a href="https://testing.unimex.edu.mx/bolsa-de-trabajo" target="_blank"
                                    rel="noopener" aria-label="Bolsa de Trabajo UNIMEX">Bolsa de Trabajo</a>
                            </h5>
                            <div class="card" style="min-height: 150px;">
                                <a target="_blank" rel="noopener"
                                    href="https://testing.unimex.edu.mx/bolsa-de-trabajo"
                                    aria-label="Bolsa de Trabajo UNIMEX">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-trabajo">
                                            <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="https://testing.unimex.edu.mx/bolsa-de-trabajo" target="_blank"
                                            rel="noopener" aria-label="Bolsa de Trabajo UNIMEX">
                                            <span class="blue-text">Bolsa de Trabajo</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                            <h5 class="hide"> <a id="modal-protocolo-click">Protocolo para el regreso a clases
                                    presenciales</a></h5>
                            <div class="card" style="min-height: 150px;">
                                <a id="modal-protocolo-click">
                                    <div class="parent" style="width: 150px;">
                                        <div class="children bg-protocolo"> <span class="linka">Ver Más</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a id="modal-protocolo-click"> <span class="blue-text">Protocolo para el
                                                regreso a clases presenciales</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="subnav" id="subnavAcademicOffer">
                <a class="btn-close-nav" onclick="subnav.hide('subnavAcademicOffer')"></a>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                            <h5 onclick="subnav.list.toggle('bachelorsDegree')" id="bachelorsDegree">Licenciaturas
                            </h5>
                            <ul class="blue-bullet">
                                <li style="background: none;">
                                    <span class="txtpequeno">DISPONIBLE EN TODOS LOS PLANTELES</span>
                                </li>

                                <li>
                                    <a href="licenciatura/administracion">
                                        Administración
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-administracion-de-empresas-turisticas">
                                        Administración de Empresas Turísticas
                                    </a>
                                </li>

                                <li>
                                    <a href="licenciatura-en-comercio-internacional-y-aduanas">
                                        Comercio Internacional y Aduanas
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-comunicacion">
                                        Comunicación
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-contaduria-publica">
                                        Contaduría Pública
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-derecho">
                                        Derecho
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-diseno-grafico">
                                        Diseño Gráfico
                                    </a>
                                </li>

                                <li>
                                    <a href="licenciatura-en-idiomas">
                                        Idiomas
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-mercadotecnia-y-publicidad">
                                        Mercadotecnia y Publicidad
                                    </a>
                                </li>

                                <li>
                                    <a href="licenciatura-en-psicologia-social">
                                        Psicología Social
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-relaciones-internacionales-y-comercio-exterior">
                                        Relaciones Internacionales y Comercio Exterior
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-sistemas-computacionales">
                                        Sistemas Computacionales
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-turismo">
                                        Turismo
                                    </a>
                                </li>
                                <li style="background: none;">
                                    <span class="txtpequeno">DISPONIBLE SOLO EN PLANTELES METROPOLITANOS</span>
                                </li>

                                <li>
                                    <a href="licenciatura-en-informatica-administrativa">
                                        Informática Administrativa
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-pedagogia">
                                        Pedagogía
                                    </a>
                                </li>
                                <li style="background: none;">
                                    <span class="txtpequeno">DISPONIBLE SOLO EN PLANTEL VERACRUZ</span>
                                </li>

                                <li>
                                    <a href="licenciatura-en-ciencias-de-la-educacion">
                                        Ciencias de la Educación
                                    </a>
                                </li>
                                <li>
                                    <a href="licenciatura-en-gastronomia-internacional">
                                        Gastronomía Internacional
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 left-gray-border">
                            <h5 onclick="subnav.list.toggle('SUA')" id="SUA">Licenciatura Abierta (SUA)<br></h5>
                            <ul class="blue-bullet">

                                <li style="background: none;">
                                    <span class="txtpequeno">DISPONIBLE SOLO EN PLANTEL VERACRUZ</span>
                                </li>
                                <li>
                                    <a href="sua-licenciatura-en-administracion">
                                        Administración
                                    </a>
                                </li>
                                <li>
                                    <a href="sua-licenciatura-en-contaduria-publica">
                                        Contaduría Pública
                                    </a>
                                </li>
                                <li>
                                    <a href="sua-licenciatura-en-derecho">
                                        Derecho
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 left-gray-border">
                            <h5 onclick="subnav.list.toggle('masterDegree')" id="masterDegree">Posgrados</h5>
                            <ul class="blue-bullet">

                                <li style="background: none;">
                                    <span class="txtpequeno">DISPONIBLE EN TODOS LOS PLANTELES</span>
                                </li>
                                <li>
                                    <a href="posgrado-en-administracion">
                                        Administración
                                    </a>
                                </li>
                                <li>
                                    <a href="posgrado-en-comunicacion-visual">
                                        Comunicación Visual
                                    </a>
                                </li>
                                <li>
                                    <a href="posgrado-en-derecho-penal">
                                        Derecho Penal
                                    </a>
                                </li>

                                <li>
                                    <a href="posgrado-en-educacion">
                                        Educación
                                    </a>
                                </li>
                                <li>
                                    <a href="posgrado-en-habilidades-directivas">
                                        Habilidades Directivas
                                    </a>
                                </li>


                                <li>
                                    <a href="posgrado-en-terapias-psicosociales">
                                        Terapias Psicosociales
                                    </a>
                                </li>

                                <li style="background: none;">
                                    <span class="txtpequeno">DISPONIBLE SOLO EN PLANTELES METROPOLITANOS </span>
                                </li>
                                <li>
                                    <a href="posgrado-en-docencia">
                                        Docencia
                                    </a>
                                </li>
                                <li>
                                    <a href="posgrado-en-impuestos">
                                        Impuestos
                                    </a>
                                </li>
                                <li>
                                    <a href="posgrado-en-mercadotecnia">
                                        Mercadotecnia
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Fin de Barra de navegacion -->

    <!-- Inico de Contenido -->
    @yield('content')
    <!-- Fin de Contemido -->

    <!-- Inicio de Footer -->
    <footer class="bg-footer container-fluid text-center px-5 text-white">
        <div class="row">
            <div class="col-12 col-md-12 mt-5 mb-4">
                <a href=""><img src="{{ asset('assets/img/social_media/facebook.png') }}" alt=""></a>
                <a class="ms-2" href=""><img src="{{ asset('assets/img/social_media/instagram.png') }}"
                        alt=""></a>
                <a class="ms-2" href=""><img src="{{ asset('assets/img/social_media/linkedin.png') }}"
                        alt=""></a>
                <a class="ms-2" href=""><img src="{{ asset('assets/img/social_media/twitter.png') }}"
                        alt=""></a>
                <a class="ms-2" href=""><img src="{{ asset('assets/img/social_media/youtube.png') }}"
                        alt=""></a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="#">INVESTIGACIÓN</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="#">KIOSCO DE <br> PROFESIONISTAS</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="#">BLOG SOY UNIMEX</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="#">AVISO DE <br> PRIVACIDAD</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="#">PREGUNTAS <br> FRECUENTES</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="#">RVOES</a>
            </div>
            <hr class="my-3">
            <div class="col-12 mb-3">
                UNIVERSIDAD MEXICANA {{ date('Y') }}®
            </div>
        </div>
    </footer>
    <!-- Fin de Footer -->


    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <!-- slick-carousel js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        $(document).ready(function() {

            // Inicializar con todos los combos del formulario - Contacto -
            // Desabilitados excepto el de Plantel
            $("select[name=nivelSelect]").prop("disabled", true);
            $("select[name=periodoSelect]").prop("disabled", true);
            $("select[name=carreraSelect]").prop("disabled", true);
            $("select[name=horarioSelect]").prop("disabled", true);

            /*
             * obtiene los planteles para el formulario de contacto.
             * Paginas :
             * - Inicio -
             * - Todas las pagina de Licenciatura, Licenciatura SUA y Postgrado -
             * - Pagina de Contacto -
             */
            $.ajax({
                method: "GET",
                url: "{{ route('get.planteles') }}",
            }).done(function(data) {
                //console.log(data);
                $.each(data, function(index, value) {
                    //console.log(value.clave);
                    if (value.clave != 5) {
                        $('#plantelSelect').prepend("<option value='" + value.clave + "'>" + value
                            .descrip + "</option>");
                    }
                });

            }).fail(function() {
                console.log("Algo salió mal");
            });

            // Detecta el cambio de opcion en un select para actuar en otro
            /*
             * se activa al cambiar de plantel 
             * y se muestran los niveles
             */
            $("select[name=plantelSelect]").change(function() {

                let nivel = $('select[name=nivelSelect]').val();

                let ruta = "{{ route('get.niveles') }}";
                let plantel = $('select[name=plantelSelect]').val();
                let data = {
                    plantel: plantel
                }
                let element = '#nivelSelect';

                postAjaxPeticionContact(ruta, data, element);

                if (nivel != '' || nivel !== '' || nivel != null) {
                    $("select[name=nivelSelect]").prop("disabled", false);
                } else {
                    /* $("select[name=periodoSelect]").prop("disabled", true);
                    $("select[name=carreraSelect]").prop("disabled", true);
                    $("select[name=horarioSelect]").prop("disabled", true); */
                }

            });

            /**
             * se activa cuando se cambia de nivel 
             * y se muestran los periodos
             */
            $("select[name=nivelSelect]").change(function() {

                let plantel = $('select[name=plantelSelect]').val();
                let ruta = "{{ route('get.periodos') }}";
                let data = {
                    plantel: plantel
                };
                let element = '#periodoSelect';

                postAjaxPeticionContact(ruta, data, element);

                $("select[name=periodoSelect]").prop("disabled", false);

            });

            /**
             * se activa cuando se cambia el periodo 
             * y muestra las carreras segun: plantel, nivel y periodo
             */
            $("select[name=periodoSelect]").change(function() {

                let plantel = $('select[name=plantelSelect]').val();
                let nivel = $('select[name=nivelSelect]').val();
                let periodo = $('select[name=periodoSelect]').val();

                let ruta = "{{ route('get.carreras') }}";
                let data = {
                    plantel: plantel,
                    nivel: nivel,
                    periodo: periodo
                };
                let element = '#carreraSelect';

                postAjaxPeticionContact(ruta, data, element);

                $("select[name=carreraSelect]").prop("disabled", false);
            });

            /**
             * se activa cuando se cambia la carrera seccionada
             * y se muestran los horarios disponibles
             */
            $("select[name=carreraSelect]").change(function() {

                let plantel = $('select[name=plantelSelect]').val();
                let nivel = $('select[name=nivelSelect]').val();
                let periodo = $('select[name=periodoSelect]').val();
                let carrera = $('select[name=carreraSelect]').val();

                let ruta = "{{ route('get.horarios') }}";
                let data = {
                    plantel: plantel,
                    nivel: nivel,
                    periodo: periodo,
                    carrera: carrera
                };
                let element = '#horarioSelect';

                postAjaxPeticionContact(ruta, data, element);

                $("select[name=horarioSelect]").prop("disabled", false);

            });
        });

        function postAjaxPeticionContact(ruta, data, element) {
            $.ajax({
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: ruta,
                data: data
            }).done(function(data) {
                console.log(data);
                $.each(data, function(index, value) {
                    console.log(value.clave);
                    $(element).prepend("<option value='" + value.clave + "'>" + value.descrip +
                        "</option>");
                });

            }).fail(function() {
                console.log("Algo salió mal");
            });
        }

        
    </script>

    @yield('scripts')

</body>

</html>
