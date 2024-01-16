@extends('layouts.layout')

@section('styles')
    <style>
        .text-resultados-examenes {
            color: rgba(0, 83, 154, 1.00);
            font-size: 0.8em;
            margin: 20px 0px 20px 0px;
            font-weight: 600;
        }
    </style>
@endsection

@section('content')
    <!-- Inicio de Resultados de Examen de Conocimientos -->
    <section class="container py-4">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 mx-auto">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/img/kiosko.jpg') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card w-100 shadow rounded-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-4 text-end">
                                <h1 class="mt-3 fw-normal">RESULTADOS DEL EXAMEN DE CONOCIMIENTOS</h1>
                            </div>
                            <div class="col-12 col-md-8">
                                <p class="text-resultados-examenes m-0 mb-2">
                                    Para ver el Resultado, introduce tu Matricula con el siguiente formato:
                                </p>
                                <div class="w-100 d-flex">
                                    <div class="w-50 text-center px-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Formato</label>
                                            <input type="text" class="form-control form-control-sm text-center"
                                                id="exampleFormControlInput1" placeholder="XXXXXXXX-XX" disabled>
                                        </div>
                                    </div>
                                    <div class="w-50 text-center px-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Ejemplo</label>
                                            <input type="text" class="form-control form-control-sm text-center"
                                                id="exampleFormControlInput1" placeholder="12345678-10" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-5 border border-primary">
                    <div class="card-body mx-auto">
                        <div class="mb-3 text-center">
                            <label for="exampleFormControlInput1" class="form-label"><b>Matricula</b></label>
                            <input type="text" class="form-control form-control-sm text-center"
                                id="exampleFormControlInput1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de Resultados de Examen de Conocimientos -->
@endsection
