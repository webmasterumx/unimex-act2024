<!DOCTYPE html>
<html lang="es">

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

    <!-- SWAL JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!---  DateTable --->
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/non-critical-styles10062022.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flotante.min.css') }}">

    @yield('styles')

</head>

<body>

    <!-- Inicio de Barra de navegacion -->
    @include('include.navegacionNew')
    @include('include.navegacion')
    <!-- Fin de Barra de navegacion -->

    <!-- Inico de Contenido -->
    @yield('content')
    <!-- Fin de Contemido -->

    <!-- Inicio de Modales -->
    @include('modales.protocolo')
    <!-- Fin de Modales -->

    <!-- Inicio de Footer -->
    <footer class="bg-footer container-fluid text-center px-5 text-white">
        <div class="row">
            <div class="col-12 col-md-12 mt-5 mb-4">
                <a href="https://www.facebook.com/UNIMEX/" target="_blank"><img
                        src="{{ asset('assets/img/social_media/facebook.png') }}" alt=""></a>
                <a class="ms-2" href="https://twitter.com/soyUNIMEX/" target="_blank"><img
                        src="{{ asset('assets/img/social_media/instagram.png') }}" alt=""></a>
                <a class="ms-2" href="https://www.instagram.com/universidadmexicana/" target="_blank"><img
                        src="{{ asset('assets/img/social_media/linkedin.png') }}" alt=""></a>
                <a class="ms-2" href="https://mx.linkedin.com/school/universidad-mexicana/" target="_blank"><img
                        src="{{ asset('assets/img/social_media/twitter.png') }}" alt=""></a>
                <a class="ms-2" href="https://www.youtube.com/user/SoyUNIMEX" target="_blank"><img
                        src="{{ asset('assets/img/social_media/youtube.png') }}" alt=""></a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="{{ route('investigacion') }}" target="_blank">INVESTIGACIÓN</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="http://comunimex.lat/KioscoProfesionistasInt/" target="_blank">KIOSCO DE
                    <br> PROFESIONISTAS</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="https://unimex.edu.mx/soyUNIMEX/" target="_blank">BLOG SOY UNIMEX</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="{{ route('aviso_de_privacidad') }}" target="_blank">AVISO DE <br>
                    PRIVACIDAD</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="{{ route('preguntas.frecuentes') }}" target="_blank">PREGUNTAS <br>
                    FRECUENTES</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" target="_blank" href="{{ route('rvoes') }}">RVOES</a>
            </div>
            <hr class="my-3">
            <div class="col-12 mb-3">
                UNIVERSIDAD MEXICANA {{ date('Y') }}®
            </div>
        </div>
    </footer>
    <!-- Fin de Footer -->

    <span class="flotante-whats">
        <button id="f-boton">
            <img class=" lazyloaded" width="80" height="70" id="f-whats-boton" alt="iamgen-whats"
                src="{{ asset('assets/img/extras/whats.webp') }}">
        </button>
        <div>
        </div>
        <div id="f-msj-boton">
            <button id="contactanos" type="button" class="btn btn-secondary" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Tooltip on left" style="display: none;">
                ¡Contáctanos vía<br>WhatsApp...!
            </button>
        </div>
    </span>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- slick-carousel js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <!-- DataTables -->
    <script src="//cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/form.js') }}"></script>

    <script>
        $(document).ready(function() {
            if ($(window).width() >= 200 && $(window).width() <= 300) {
                $("#menuLG").remove();
            }
            if ($(window).width() >= 300 && $(window).width() <= 600.98) {
                $("#menuLG").remove();
            }
            if ($(window).width() >= 600 && $(window).width() <= 800.98) {
                $("#menuLG").remove();
            }
            if ($(window).width() >= 800 && $(window).width() <= 900.98) {
                //$("#menuLG").remove();
            }
            if ($(window).width() >= 900 && $(window).width() <= 1199.98) {
                //$("#menuLG").remove();
            }
            if ($(window).width() >= 1199.98 && $(window).width() <= 1399.98) {
                //$("#menuLG").remove();
            }
            if ($(window).width() >= 1399.98 && $(window).width() <= 1500.98) {
                //$("#menuLG").remove();
            }

        });

        $(window).resize(function() {
            if ($(window).width() >= 200 && $(window).width() <= 300) {
                $("#menuLG").remove();
            }
            if ($(window).width() >= 300 && $(window).width() <= 600.98) {
                $("#menuLG").remove();
            }
            if ($(window).width() >= 600 && $(window).width() <= 800.98) {
                $("#menuLG").remove();
            }
            if ($(window).width() >= 800 && $(window).width() <= 900.98) {
                //$("#menuLG").remove();
            }
            if ($(window).width() >= 900 && $(window).width() <= 1199.98) {
                //$("#menuLG").remove();
            }
            if ($(window).width() >= 1199.98 && $(window).width() <= 1399.98) {
                //$("#menuLG").remove();
            }
            if ($(window).width() >= 1399.98 && $(window).width() <= 1500.98) {
                //$("#menuLG").remove();
            }
        });

        function setUrlBase() {
            let urlBase = "{{ env('APP_URL') }}";
            return urlBase;
        }

        const obtenHover = document.getElementById('f-boton'),
            mensajeW = document.getElementById('f-msj'),
            btnCerrar = document.getElementById('boton-cerrar');

        obtenHover.addEventListener('mouseover', () => {
            let mensaje = document.getElementById('f-msj-boton');
            mensaje.innerHTML = `
        <button id="contactanos" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
            ¡Contáctanos vía<br>WhatsApp...!
        </button>
        `;
        });
        obtenHover.addEventListener('mouseout', (e) => {
            let contactanos = document.getElementById('contactanos');
            contactanos.style.display = 'none';
        });

        /*mostrar planteles y whats*/
        obtenHover.addEventListener('click', () => {

            window.open(
                'https://wa.me/525511020290/?text=Buenas+tardes%2C+me+pueden+ayudar+con+más+informaci%C3%B3n');
        });
    </script>

    @yield('scripts')

    @include('include.redirecciones.outOfertaAcademica')

</body>

</html>
