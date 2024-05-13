@extends('layouts.layout')

@section('titulo')
    Bolsa de Trabajo | UNIMEX
@endsection

@section('content')
    <section class="container-fluid py-3">
        <div class="row">
            <div class="col-12 col-md-4">
                <div id="occ-widget">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <img src="{{ asset('assets/img/extras/BannerBolsadeTrabajo.webp') }}" alt="">
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script async id="bolsa-widget" type="text/javascript" charset="UTF-8"
        src="https://jobdiscovery-widget-occ.occ.com.mx/vertical-bundle.js" key="1XoBYMLVkTfRP5EBInQqm2t24U7"></script>
    <noscript>
        <p>Necesita activar JavaScript Para visualizar este sitio correctamente</p>
    </noscript>

    <script type="text/javascript">
        window._mfq = window._mfq || [];
        (function() {
            var mf = document.createElement("script");
            mf.type = "text/javascript";
            mf.async = true;
            mf.src = "//cdn.mouseflow.com/projects/9daba802-8955-4d7b-ad31-07f2b5f17d7d.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
    </script>
    <script type="text/javascript">
        var mouseflowHtmlDelay = 5000;
        window._mfq = window._mfq || [];
        (function() {
            var mf = document.createElement("script");
            mf.type = "text/javascript";
            mf.defer = true;
            mf.src = "//cdn.mouseflow.com/projects/9daba802-8955-4d7b-ad31-07f2b5f17d7d.js";
            document.getElementsByTagName("head")[0].appendChild(mf);
        })();
    </script>
@endsection