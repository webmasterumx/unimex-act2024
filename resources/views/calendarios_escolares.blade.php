@extends('layouts.layout')

@section('content')
    <!-- Inicio de Calendarios Escolares-->
    <section class="container py-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h1><i class="bi bi-calendar-check-fill"></i> Calendarios Escolares UNIMEX®</h1>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="fw-normal">PLANTELES METROPOLITANOS</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Licenciaturas</h3>
                        <a href="">
                            <i class="bi bi-eye-fill"></i> Calendario Escolarizado
                        </a><br>
                        <a href="">
                            <i class="bi bi-eye-fill"></i> Calendario Sabatino
                        </a>
                        <hr style="border-top: 1px solid;">
                        <h5 class="card-title">Posgrados</h5>
                        <a href="">
                            <i class="bi bi-eye-fill"></i> Calendario Posgrados
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fw-normal">PLANTEL VERACRUZ</h3>
                    </div>
                    <div class="card-body">
                        <a href="">
                            <i class="bi bi-eye-fill"></i> Calendario Escolarizado
                        </a>
                        <hr style="border-top: 1px solid;">
                        <a href="">
                            <i class="bi bi-eye-fill"></i> Calendario Sabatino
                        </a>
                        <hr style="border-top: 1px solid;">
                        <a href="">
                            <i class="bi bi-eye-fill"></i> Calendario Posgrados
                        </a>
                        <hr style="border-top: 1px solid;">
                        <a href="">
                            <i class="bi bi-eye-fill"></i> Calendario SUA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de Calendarios Escolares-->
@endsection
