<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Vocacional | UNIMEX</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link async rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            background-color: rgba(0, 36, 96, .8) !important;
        }

        .error {
            color: red;
        }

        .social-icons {
            position: absolute;
            margin-bottom: 2rem;
            width: 100%;
            z-index: 2;
        }

        .social-icons ul {
            margin-top: 2rem;
            width: 100%;
            text-align: center;
        }

        .social-icons ul>li {
            margin-left: 1rem;
            margin-right: 1rem;
            display: inline-block;
        }

        .social-icons ul>li>a {
            display: block;
            color: white;
            background-color: rgba(0, 46, 102, 0.8);
            border-radius: 100%;
            font-size: 2rem;
            line-height: 4rem;
            height: 4rem;
            width: 4rem;
        }

        @media (min-width: 768px) {
            .social-icons {
                margin: 0;
                position: absolute;
                right: 2.5rem;
                bottom: 2rem;
                width: auto;
            }

            .social-icons ul {
                margin-top: 0;
                width: auto;
            }

            .social-icons ul>li {
                display: block;
                margin-left: 0;
                margin-right: 0;
                margin-bottom: 2rem;
            }

            .social-icons ul>li:last-child {
                margin-bottom: 0;
            }

            .social-icons ul>li>a {
                transition: all 0.2s ease-in-out;
                font-size: 2rem;
                line-height: 4rem;
                height: 4rem;
                width: 4rem;
            }

            .social-icons ul>li>a:hover {
                background-color: #002E66;
            }
        }
    </style>
</head>

<body>
    <div class="container m-auto">
        <div class="row">
            <div class="col-12 text-white">
                <h1>
                    Test Vocacional UNIMEX
                </h1>
                <p>
                    Elegir una carrera profesional es una decisión muy importante y conocerte mejor es un elemento clave
                    para elegirla. Es por ello que se ha diseñado este test especialmente para ti con el propósito de
                    que identifiques tus intereses y habilidades vocacionales.
                </p>
                <button class="btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">REGISTRARME</button>
            </div>
        </div>
    </div>


    <div class="social-icons">
        <ul class="list-unstyled text-center mb-0">
            <li class="list-unstyled-item">
                <a href="https://twitter.com/soyunimex/" target="_blank" title="Síguenos en Twitter"
                    rel="noopener noreferrer">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-unstyled-item">
                <a href="https://www.facebook.com/unimex" target="_blank" title="Síguenos en Facebook"
                    rel="noopener noreferrer">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-unstyled-item">
                <a href="https://www.instagram.com/universidadmexicana/" target="_blank" title="Síguenos en Instagram"
                    rel="noopener noreferrer">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: rgba(190, 192, 194, 0.8);">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-light" id="exampleModalLabel">Aspirantes UNIMEX</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-light">
                        <b>Llena correctamente los siguientes campos.</b>
                    </p>
                    <form id="inicioTest" class="row">
                        @csrf
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" class="form-control" maxlength="60" id="nombre" name="nombre"
                                placeholder="Nombre(s)">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" class="form-control" maxlength="20" id="apellidoPaterno"
                                name="apellidoPaterno" placeholder="Apellido Paterno">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" class="form-control" maxlength="20" id="apellidoMaterno"
                                name="apellidoMaterno" placeholder="Apellido Materno">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <input type="text" class="form-control" maxlength="10" minlength="10" id="celular"
                                name="celular" placeholder="Celular (Mínimo 10 dígitos)">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="email" class="form-control" maxlength="60" id="correo" name="correo"
                                placeholder="Email">
                        </div>
                        <div class="col-12 mb-3 mx-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="aceptarTerminos">
                                <label class="form-check-label" for="aceptarTerminos">
                                    He leído y acepto el <a href="{{ route('aviso_de_privacidad') }}"
                                        target="__blank">Aviso
                                        de privacidad</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <button id="envioDatos" disabled class="btn btn-secondary">INICIAR TEST</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function setUrlBase() {
            let urlBase = "{{ env('APP_URL') }}";
            return urlBase;
        }
    </script>

    <script src="{{ asset('assets/js/testVocacional/validar.js') }}"></script>

    <script>
        $("#celular").bind('keypress', function(event) {
            var regex = new RegExp("^[0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });

        $('#aceptarTerminos').on('click', function() {
            if ($(this).is(':checked')) {
                // Hacer algo si el checkbox ha sido seleccionado
                //console.log("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
                $('#envioDatos').attr('disabled', false);
            } else {
                // Hacer algo si el checkbox ha sido deseleccionado
                //console.log("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
                $('#envioDatos').attr('disabled', true);
            }
        });
    </script>

</body>



</html>
