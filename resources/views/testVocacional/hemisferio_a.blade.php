<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link async rel="stylesheet" href="{{ asset('assets/petry/bootstrap.min.css') }}">
    <link async rel="stylesheet" href="{{ asset('assets/petry/prettify.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style-personal.min.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .error {
            color: red;
        }

        #plantel-error,
        #nivel-error,
        #periodo-error,
        #carrera-error,
        #horario-error {
            display: none;
        }
    </style>

</head>

<body id="page-top">

    <div class='container'>
        <section id="wizard" style="padding:  5px;">

            <div class="container-fluid">
                <div class="col-sm-4">
                    <img data-src="{{ asset('assets/img/testVocacional/logo.jpg') }}" class="lazyload img-responsive">
                </div>
                <div class="col-sm-8">
                    <h1 class="title-main">Test Vocacional UNIMEX</h1>
                </div>
            </div>

            <div id="rootwizard">
                <div class="navbar" style="font-size: 1px; visibility: hidden;">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul>
                                <li><a href="#tab1" data-toggle="tab" class="disabled" tabindex="-1">Pregunta 1</a>
                                </li>
                                <li><a href="#tab2" data-toggle="tab" class="disabled" tabindex="-1">Pregunta 1</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane" id="tab1">
                        <div class="container-fluid" style="padding: 15px;">
                            <div class="pleca-pregunta">
                                <div class="row" style="padding: 10px;">
                                    <div class="col-sm-12">
                                        <div class="col-sm-2">
                                            <img src="{{ asset('assets/img/testVocacional/left-hemisphere.webp') }}"
                                                class="lazyload img-responsive">
                                        </div>
                                        <div class="col-sm-7">
                                            <h1 class="title-hemis">Tu Hemisferio Predominante es el Derecho</h1>
                                        </div>
                                        <div class="col-sm-2">
                                            <ul class="pager wizard">
                                                <li class="next"><a href="#">Siguiente</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="col-sm-6">
                                                <h1 class="title-answer" style="text-align: center;">Hemisferio Derecho
                                                </h1>
                                                <span class="title-parrafo">
                                                    <ul>
                                                        <li>COMUNICACIÓN</li>
                                                        <li>DISEÑO GRÁFICO</li>
                                                        <li>IDIOMAS</li>
                                                        <li>MERCADOTECNIA Y PUBLICIDAD</li>
                                                        <li>PEDAGOGÍA</li>
                                                        <li>PSICOLOGÍA SOCIAL</li>
                                                        <li>TURISMO</li>
                                                    </ul>
                                                </span>

                                            </div>
                                            <div class="col-sm-6">
                                                <h1 class="title-answer" style="text-align: center;">Hemisferio
                                                    Izquierdo</h1>
                                                <span class="title-parrafo">
                                                    <ul>
                                                        <li>ADMINISTRACIÓN</li>
                                                        <li>ADMINISTRACIÓN DE EMPRESAS TURÍSTICAS</li>
                                                        <li>CONTADURÍA / CONTADURÍA PÚBLICA</li>
                                                        <li>COMERCIO INTERNACIONAL Y ADUANAS</li>
                                                        <li>DERECHO</li>
                                                        <li>INFORMÁTICA ADMINISTRATIVA</li>
                                                        <li>RELACIONES INTERNACIONALES / RELACIONES INTERNACIONALES Y
                                                            COMERCIO EXTERIOR</li>
                                                        <li>SISTEMAS COMPUTACIONALES</li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab2">
                        <div class="container-fluid" style="padding: 15px;">
                            <div class="pleca-pregunta">
                                <div class="row" style="padding: 10px;">
                                    <div class="col-sm-10"></div>
                                    <div class="col-sm-1">
                                        <ul class="pager wizard">
                                            <li class="previous"><a href="#">Anterior</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12">
                                        <form id="insertar">
                                            @csrf
                                            <div class="form-row">
                                                <h1 class="title-answer" align="center">Por favor selecciona tu
                                                    carrera y turno
                                                    de interés:</h1>
                                                <div class="form-group col-md-6">
                                                    <select name="plantel" id="plantel" class="form-control"
                                                        required>
                                                        <option value="" selected disabled>Selecciona Plantel
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <select name="nivel" id="nivel" class="form-control"
                                                        required>
                                                        <option value="" selected disabled>Selecciona Nivel
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <select name="periodo" id="periodo" class="form-control"
                                                        required>
                                                        <option value="" selected disabled>¿Cuándo deseas iniciar
                                                            tu licenciatura?
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <select name="carrera" id="carrera" class="form-control"
                                                        required>
                                                        <option value="" selected disabled>Selecciona Carrera
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <select name="horario" id="horario" class="form-control"
                                                        required>
                                                        <option value="" selected disabled>Selecciona Horario
                                                        </option>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="source" id="source"
                                                    value="15" />
                                                <input type="hidden" id="calificacion" name="calificacion"
                                                    class="textbox" value='Derecho'>
                                                <input type="hidden" name="ulrVisitada" id="urlVisitada" value="{{ URL::full() }}">
                                                <div class="form-group col-md-6">
                                                    <input type="submit" class="btn btn-secondary" id="send"
                                                        value="Finalizar">
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <!-- Validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script defer src="{{ asset('assets/petry/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/petry/jquery.bootstrap.wizard.js') }}"></script>
    <script defer src="{{ asset('assets/petry/prettify.js') }}"></script>
    <script>
        function setUrlBase() {
            let urlBase = "{{ env('APP_URL') }}";
            return urlBase;
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#rootwizard').bootstrapWizard({});
        });
    </script>
    <script src="{{ asset('assets/js/testVocacional/combos.js') }}"></script>
    <script src="{{ asset('assets/js/testVocacional/validar.js') }}"></script>

</body>

</html>
