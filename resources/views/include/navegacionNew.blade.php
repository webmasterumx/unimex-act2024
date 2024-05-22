<header id="menuLG" class="sticky-top d-none d-md-none d-lg-block">
    <noscript>Por favor habilita JavaScript para usar este sitio</noscript>
    <nav class="navigation" style="background-color: #013F7A !important; padding: 8px 0px !important;">
        <div class="wrapper d-flex">
            <a href="{{ route('inicio') }}" rel="noopener noreferrer">
                {{--  <img class="logo lazyload" src="{{ asset('assets/img/header/logo-2020.webp') }}" width="259"
                    height="80" alt="Logo Institucional de Universidad Mexicana"
                    title="Universidad Mexicana, educación que se adapta a ti."> --}}
            </a>
            <div class="menu" id="navigation1">
                <a class="btn-close-nav" onclick="nav.hide()"></a>
                <ul>
                    <li>
                        <a onclick="subnav.show('subnavAbout')"
                            title="Conoce la hisotria de Universidad Mexicana">Acerca
                            de UNIMEX </a>
                    </li>
                    <li>
                        <a onclick="subnav.show('alumnosegresados')"
                            title="Servicios para nuestos Alumnos y Egresados">Alumnos Y Egresados</a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }}"
                            title="Servicios para nuestos Alumnos y Egresados">Informes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navigation d-flex" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">
        <div class="wrapper d-flex w-25 ps-2" style="justify-content: flex-start;">
            <a href="{{ route('inicio') }}" rel="noopener noreferrer">
                <img class="logo lazyload" src="{{ asset('assets/img/header/logo-2020.webp') }}" width="259"
                    height="80" alt="Logo Institucional de Universidad Mexicana"
                    title="Universidad Mexicana, educación que se adapta a ti.">
            </a>
            {{--  <p class="text-white ml-3">
                Plantel: <br>
                <b>CDMX</b>
            </p> --}}
        </div>

        <div class="wrapper d-flex" style="justify-content: flex-end;">
            <div class="menu" id="navigation1">
                <a class="btn-close-nav" onclick="nav.hide()"></a>
                <ul>
                    <li class="mt-2">
                        <a onclick="subnav.show('subnavAcademicOffer')"
                            title="Conoce nuestras Licenciaturas, Maestrías y Posgrados">Oferta Académica</a>
                    </li>
                    <li class="mt-2">
                        <a onclick="subnav.show('subnavSchools')" title="Conoce nuestros 4 Planteles">Planteles</a>
                    </li>
                    <li class="text-center">
                        <button id="calculadoraHeader" class="btn btn-outline-warning">CALCULADORA DE BECAS</button>
                    </li>
                    <li class="text-center">
                        <button id="preinscripcionHeader" class="btn btn-outline-warning">PREINSCRIPCIÓN EN
                            LINEA</button>
                    </li>
                </ul>
            </div>
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
                                    <a href="{{ route('acercade', $acerca->slug) }}"
                                        class="btn btn-primary btn-arrow-go"> {{ $acerca->nombre }} </a>
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
                                            <span class="linka text-capitalize">{{ $plantel->titulo }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text">
                                        <br>
                                    </p>
                                    <a href="{{ route('plantel', $plantel->nombre) }}"
                                        class="btn btn-primary btn-arrow-go">Plantel {{ $plantel->titulo }} &nbsp; <i
                                            class="bi bi-arrow-right"></i> </a>
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
                            <a target="_blank" rel="noopener" href="http://comunimex.lat/kioscoalumnosresponsive/">
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
                                    <a href="http://portal.microsoftonline.com/" target="_blank" rel="noopener"><span
                                            class="blue-text">Correo ComUNIMEX</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                        <h5 class="hide">
                            <a href="{{ route('examen_de_conocimientos') }}" target="_blank" rel="noopener">Examen
                                de Conocimientos</a>
                        </h5>
                        <div class="card" style="min-height: 150px;">
                            <a target="_blank" rel="noopener" href="{{ route('examen_de_conocimientos') }}">
                                <div class="parent" style="width: 150px;">
                                    <div class="children bg-examen">
                                        <span class="linka">Ver Más</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center;">
                                    <a href="{{ route('examen_de_conocimientos') }}" target="_blank"
                                        rel="noopener"><span class="blue-text">Examen de
                                            Conocimientos</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 left-gray-border">
                        <h5 class="hide">
                            <a href="{{ route('resultados_examen_conocimientos') }}" target="_blank"
                                rel="noopener">Resultados
                                del Examen de Conocimientos</a>
                        </h5>
                        <div class="card" style="min-height: 150px;">
                            <a href="{{ route('resultados_examen_conocimientos') }}" target="_blank" rel="noopener">
                                <div class="parent" style="width: 150px;">
                                    <div class="children bg-resultadoexamen">
                                        <span class="linka">Ver Más</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">
                                    <a href="{{ route('resultados_examen_conocimientos') }}" target="_blank"
                                        rel="noopener"><span class="blue-text">Resultados del Examen de
                                            Conocimientos</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--nuevo-->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-12  left-gray-border">
                        <h5 class="hide">
                            <a href="{{ route('calendarios_escolares') }}" target="_blank"
                                rel="noopener noreferrer">Calendarios Escolares</a>
                        </h5>
                        <div class="card" style="min-height: 150px;">
                            <a href="{{ route('calendarios_escolares') }}" target="_blank"
                                rel="noopener noreferrer">
                                <div class="parent" style="width: 150px;">
                                    <div class="children bg-calendario">
                                        <span class="linka">Ver Más</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">
                                        <a href="{{ route('calendarios_escolares') }}" target="_blank"
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
                            <a href="{{ route('bolsa_de_trabajo') }}" target="_blank" rel="noopener"
                                aria-label="Bolsa de Trabajo UNIMEX">Bolsa de Trabajo</a>
                        </h5>
                        <div class="card" style="min-height: 150px;">
                            <a target="_blank" rel="noopener" href="{{ route('bolsa_de_trabajo') }}"
                                aria-label="Bolsa de Trabajo UNIMEX">
                                <div class="parent" style="width: 150px;">
                                    <div class="children bg-trabajo">
                                        <span class="linka">Ver Más</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text" style="text-align: center;">
                                    <a href="{{ route('bolsa_de_trabajo') }}" target="_blank"
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
                            <button type="button" data-bs-toggle="modal" data-bs-target="#protocoloRegresoClases"
                                id="modal-protocolo-click">
                                <div class="parent" style="width: 150px;">
                                    <div class="children bg-protocolo"> <span class="linka">Ver Más</span>
                                    </div>
                                </div>
                            </button>
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
            <a class="btn-close-nav" onclick="subnav.hide('subnavAcademicOffer1')"></a>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
                        <h5 onclick="subnav.list.toggle('bachelorsDegree1')" id="bachelorsDegree1">Licenciaturas
                        </h5>
                        <ul class="blue-bullet">
                            <li style="background: none;">
                                <span class="txtpequeno">DISPONIBLE EN TODOS LOS PLANTELES</span>
                            </li>
                            @foreach ($data['menus'] as $menu)
                                @if ($menu->estado == 1)
                                    <li>
                                        <a href="{{ route('licenciatura', $menu->slug) }}">
                                            {{ $menu->nombre }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                            <li style="background: none;">
                                <span class="txtpequeno">DISPONIBLE SOLO EN PLANTELES METROPOLITANOS</span>
                            </li>
                            @foreach ($data['menus'] as $menu)
                                @if ($menu->estado == 2)
                                    <li>
                                        <a href="{{ route('licenciatura', $menu->slug) }}">
                                            {{ $menu->nombre }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                            <li style="background: none;">
                                <span class="txtpequeno">DISPONIBLE SOLO EN PLANTEL VERACRUZ</span>
                            </li>
                            @foreach ($data['menus'] as $menu)
                                @if ($menu->estado == 3)
                                    <li>
                                        <a href="{{ route('licenciatura', $menu->slug) }}">
                                            {{ $menu->nombre }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 left-gray-border">
                        <h5 onclick="subnav.list.toggle('SUA1')" id="SUA1">Licenciaturas abiertas SUA<br></h5>
                        <ul class="blue-bullet">
                            <li style="background: none;">
                                <span class="txtpequeno">DISPONIBLE EN TODOS LOS PLANTELES</span>
                            </li>
                            @foreach ($data['menus'] as $menu)
                                @if ($menu->estado == 4)
                                    <li>
                                        <a href="{{ route('licenciatura.sua', $menu->slug) }}">
                                            {{ $menu->nombre }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 left-gray-border">
                        <h5 onclick="subnav.list.toggle('masterDegree1')" id="masterDegree1">Posgrados</h5>
                        <ul class="blue-bullet">

                            <li style="background: none;">
                                <span class="txtpequeno">DISPONIBLE EN TODOS LOS PLANTELES</span>
                            </li>
                            @foreach ($data['menus'] as $menu)
                                @if ($menu->estado == 5)
                                    <li>
                                        <a href="{{ route('posgrado', $menu->slug) }}">
                                            {{ $menu->nombre }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                            <li style="background: none;">
                                <span class="txtpequeno">DISPONIBLE SOLO EN PLANTELES METROPOLITANOS </span>
                            </li>
                            @foreach ($data['menus'] as $menu)
                                @if ($menu->estado == 6)
                                    <li>
                                        <a href="{{ route('posgrado', $menu->slug) }}">
                                            {{ $menu->nombre }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
