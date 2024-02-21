@extends('layouts.layout')

@section('titulo')
    Universidad Mexicana | Educación que se adapta a ti
@endsection

@section('metas')
    @include('metas.inicio')
@endsection

@section('styles')
    <style>
        .bg_contacto {
            background: url(assets/img/extras/bg-01.webp);
            background-position: center;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <!-- Inicio de Banner Inicial -->
    <section class="pb-2">
        <div class="container-fluid p-0">
            <div id="bannerInicial" class="carousel slide">
                <div class="carousel-inner">
                    @foreach ($banners as $banner)
                        <x-banner.item class="{{ $banner->clase }}">
                            <img src="{{ asset($banner->url) }}" class="d-block w-100" alt="{{ $banner->alt }}">
                        </x-banner.item>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#bannerInicial" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bannerInicial" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Fin de Banner Inicial -->

    <!-- Inicio de Ventajas de Estudiar en UNIMEX  -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="color-unimex text-center fw-light">
                        Ventajas de estudiar en Universidad Mexicana
                    </h2>
                    <p class="fs-unimex1 text-center">
                        Todo lo que inicies conclúyelo, ya que tu meta es ser un Profesional Exitoso.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-5 g-4">
                @foreach ($ventajas_unimex as $ventaja_unimex)
                    <div class="col">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <img class="icono-Unimex" src="{{ asset($ventaja_unimex->url) }}"
                                    alt="{{ $ventaja_unimex->alt }}" srcset="{{ asset($ventaja_unimex->url) }}">
                                <p class="card-text text-center color-unimex fs-unimex2">
                                    {!! $ventaja_unimex->descripcion_corta !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Fin de Ventajas de Estudiar en UNIMEX  -->

    <!-- Inicio de Carrucel de Licenciaturas -->
    <section id="licenciaturas" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="color-unimex text-center fw-light">
                        Licenciaturas Universidad Mexicana
                    </h2>
                    <p class="fs-unimex1 text-center">
                        Estudia con nosotros tu #LicenciaturaUNIMEX en:
                    </p>
                </div>
                <div class="col-12">
                    <div id="listCarreras">
                        @foreach ($listaCarreras as $carrera)
                            <a href="{{ route('licenciatura', $carrera->slug) }}" class="card mx-2 h-100">
                                <div class="card-body">
                                    <center>
                                        <img class="" src="{{ $carrera->icon }}" alt="{{ $carrera->slug }}"><br>
                                    </center>
                                    {!! $carrera->titulo !!}
                                    <hr>
                                    <p class="card-text text-justify">{{ $carrera->descripcion }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <!-- Fin de Carrucel de Lincenciaturas -->

    <section id="testimonios" class="container py-3">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                        tabindex="0">
                        <p class="text-center">
                            Más que una Licenciatura, fue de las mejores etapas de mi vida.
                        </p>
                        <p class="text-center" style="color: #f8981d;">
                            Yolanda Hinojosa
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <p class="text-center">
                            La mejor decisión para mi vida profesional, fue estudiar una maestría en UNIMEX.
                        </p>
                        <p class="text-center" style="color: #f8981d;">
                            Arturo Fregoso
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">
                        <p class="text-center">
                            Conocí a mi socio en UNIMEX y ahora juntos tenemos una empresa exitosa.
                        </p>
                        <p class="text-center" style="color: #f8981d;">
                            Irlanda Torres
                        </p>
                    </div>
                </div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="active text-center" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true"><img style="width: 70px;"
                                src="{{ asset('assets/img/testimonios/1_testimonio.jpg') }}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="text-center" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false"><img style="width: 70px;"
                                src="{{ asset('assets/img/testimonios/2_testimonio.jpg') }}" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="text-center" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false"><img style="width: 70px;"
                                src="{{ asset('assets/img/testimonios/3_testimonio.jpg') }}" alt=""></button>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5MsJSD6121g"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="UNIMEX"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

    @include('include.contactoForm')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#listCarreras').slick({
                infinite: true,
                //autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true,
                autoplaySpeed: 2000,
                prevArrow: '<button type="button" class="slick-prev"><i class="bi bi-chevron-compact-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="bi bi-chevron-compact-right"></i></button>',
            });

            $("#nivelSelect").append(`<option value="">Nivel</option>`);
            $("#carreraSelect").append(`<option value="">Carrera</option>`);
        });
    </script>
@endsection
