<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyección Profesional</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/proyeccionProfesional.css') }}">
</head>

<body class="bg">

    <header>
        <nav class="navbar fixed-top">
            <div id="contenedor-nav" class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img id="header-logo" src="{{ asset('assets/img/proyeccionProfesional/web/logo.png') }}"
                        alt="Logo UNIMEX" class="d-inline-block align-top">
                </a>
            </div>
        </nav>
    </header>

    <div class="container-fluid">

        <div class="row">

            <div class="col-6 col-md-4 col-12">
                <h1 class="fw-bold">PROYECCIÓN PROFESIONAL 2021</h1>
                <h2 style="font-size: 2rem !important;">Formulario de registro</h2>
                <div id="formulario">

                    <form id="proyeccionProfesional">
                        @csrf
                        <div class="mb-1">
                            <label for="name" class="form-label">Nombre y apellidos:</label>
                            <input type="text" class="form-control" maxlength="60" name="nombre" id="nombre">
                        </div>

                        <div class="mb-1">
                            <label for="matricula" class="form-label">Matrícula:</label>
                            <input type="text" class="form-control" maxlength="12" name="matricula" id="matricula">
                        </div>

                        <div class="mb-1">
                            <label for="tel" class="from-label">Tel. Celular:</label>
                            <input type="text" class="form-control" maxlength="10" name="celular" id="celular">
                        </div>

                        <div class="mb-1">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" maxlength="50" name="email" id="email">
                        </div>

                        <div class="mb-1">
                            <label for="posgrado" class="form-label">Posgrado de Interés:</label>
                            <input class="form-control" type="text" name="carrera" id="carrera">
                        </div>


                        <div class="mb-1">
                            <label for="plantel" class="form-label">Plantel:</label>
                            <input class="form-control" type="text" name="plantel" id="plantel">
                        </div>

                        <div class="mb-1">
                            <label for="grupo" class="form-label">Grupo actual:</label>
                            <input type="text" class="form-control" name="grupo" id="grupo">

                        </div>

                        <div id="check" class="mb-1">
                            <input type="checkbox" class="form-check-input" name="check" id="check" checked
                                style="font-size: 20px; vertical-align: middle !important; margin: 10px;">
                            <label for="check" class="form-check-label">He leído y acepto el <a
                                    href="{{ route('aviso_de_privacidad') }}" target="_blank"
                                    style="color: white;">aviso de privacidad</a></label>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button id="enviarDatos" type="submit" class="btn">Enviar</button>
                        </div>


                    </form>

                </div>
            </div>
            <div class="col-6 col-md-8">
                <img id="img-proyeccion" class="img-fluid"
                    src="{{ asset('assets/img/proyeccionProfesional/web/proyeccion.png') }}"
                    alt="Proyección profesional">
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function setUrlBase() {
            let urlBase = "{{ env('APP_URL') }}";
            return urlBase;
        }
    </script>
    <script src="{{ asset('assets/js/proyeccionProfesional/validacion.js') }}"></script>
</body>

</html>
