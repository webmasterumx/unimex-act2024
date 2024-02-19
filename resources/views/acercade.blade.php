@extends('layouts.layout')

@section('metas')
    @include('metas.acercade.definicion')
@endsection

@section('styles')
    <style>
        #historia {
            background: no-repeat center center;
            background-size: cover;
            height: 100vh;
            margin: auto;
        }

        .fondoServicios {
            background: no-repeat center center;
            background-size: cover;
            height: auto;
        }

        .etiqueta-titulo-acercade {
            width: 35%;
            text-align: center !important;
            color: #fff;
            margin: auto;
            position: relative;
            top: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            font-weight: 400;
        }
    </style>
@endsection

@section('content')
    <!-- Inicio de seccion de portada -->
    <section id="historia" style="background-image: url({{ asset($acercadeFirst->portada) }})">
        <h1 class="etiqueta-titulo-acercade p-3 text-uppercase"> {{ $acercadeFirst->nombre }} </h1>
    </section>
    <!-- Fin de seccion de portada -->

    <!-- Inicio componente diferenciario -->
    @php
        $ruta = 'include.acercade.' . $acercadeFirst->extension;
    @endphp
    @include($ruta)
    <!-- Fin de componente diferenciario -->

    <!-- Inicio de Sección de Recomendaciones -->
    <section class="py-5" style="background-color: #f1f2f3 !important;">
        <div class="container">
            <div class="row">
                @foreach ($recomendaciones as $recomendacion)
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="card h-100" style="width: 18rem;">
                            <img src="{{ asset($recomendacion->portada_pequeña) }}" class="card-img-top"
                                alt="{{ $recomendacion->nombre }}" style="height: 140px !important;">
                            <div class="card-body">
                                <h5 class="card-title underlined-head text-uppercase fw-normal">
                                    {{ $recomendacion->nombre }} </h5>
                                <p class="card-text"> {{ $recomendacion->descripcion_corta }} </p>
                                <center>
                                    <a href="{{ route('acercade', $recomendacion->slug) }}" class="btn btn-primary">VER MÁS</a>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Fin de Sección de Recomendaciones -->
@endsection
