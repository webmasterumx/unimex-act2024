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

    <!-- SWAL JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!---  DateTable --->
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/non-critical-styles10062022.min.css') }}">

    @yield('styles')

</head>

<body>

    <!-- Inicio de Barra de navegacion -->
    @include('include.navegacionNew')
    <!-- Fin de Barra de navegacion -->

    <!-- Inico de Contenido -->
    @yield('content')
    <!-- Fin de Contemido -->

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
                <a class="text-white" href="#">INVESTIGACIÓN</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="#">KIOSCO DE <br> PROFESIONISTAS</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="#">BLOG SOY UNIMEX</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="{{ route('aviso_de_privacidad') }}">AVISO DE <br> PRIVACIDAD</a>
            </div>
            <div class="col-12 col-md-2 col-lg-2 mt-2">
                <a class="text-white" href="{{ route('preguntas.frecuentes') }}">PREGUNTAS <br> FRECUENTES</a>
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
        function setUrlBase() {
            let urlBase = "{{ env('APP_URL') }}";
            return urlBase;
        }
    </script>

    @yield('scripts')

    @include('include.redirecciones.outOfertaAcademica')

</body>

</html>
