<?php

namespace App\Http\Controllers;

use App\Models\Acercade;
use App\Models\Banner;
use App\Models\CLicenciaturas;
use App\Models\LicenciaturaSua;
use App\Models\Plantel;
use App\Models\Posgrado;
use App\Models\VentajasUnimex;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnimexController extends Controller
{

    public function inicio() : View
    {
        $listaCarreras = DB::table('c_carreras')->orderBy('titulo', 'asc')->get();
        $banners = Banner::all();
        $ventajas_unimex = VentajasUnimex::all();

        return view('inicio', [
            "listaCarreras" => $listaCarreras, 
            "banners" => $banners,
            "ventajas_unimex" => $ventajas_unimex
        ]);
    }

    public function getPlanteles($slug) : View {
        $plantel = Plantel::where('nombre', $slug)->first();
        $galeria = json_decode($plantel->galeria);
        $plantelesInNot = Plantel::where('nombre', '!=', $slug)->get();

        return view('plantel', [
            "plantel" => $plantel,
            "galeria" => $galeria,
            "plantelesInNot" => $plantelesInNot
        ]);
    }

    public function getAcercade($slug) : View {
        $acercadeFirst = Acercade::where('slug', $slug)->first();
        $recomendaciones = Acercade::where('slug', '!=', $slug)->get();

        return view('acercade', [
            'acercadeFirst' => $acercadeFirst,
            "recomendaciones" => $recomendaciones
        ]);
    }

    public function getLicenciatura($slug) : View {
        $licenciatura = CLicenciaturas::where('slug', $slug)->first();
        $extras = json_decode($licenciatura->extras, true);
        $temario  = $extras['extras']['temario'];
        $campo_laboral = $extras['extras']['campo_laboral'];
        $disponibilidad = $extras['extras']['disponibilidad'];

        return view('licenciatura', [
            "licenciatura" => $licenciatura,
            "temario" => $temario,
            "campo_laboral" => $campo_laboral,
            "disponibilidad" => $disponibilidad
        ]);
    }

    public function getLicenciaturaSua($slug) : View {
        $licenciatura_sua = LicenciaturaSua::where('slug', $slug)->first();
        $extras = json_decode($licenciatura_sua->extras, true);
        $temario = $extras['extras']['temario'];
        $campo_laboral = $extras['extras']['campo_laboral'];

        return view('licenciaturasua', [
            "licenciatura_sua" =>$licenciatura_sua,
            "temario" =>$temario,
            "campo_laboral" =>$campo_laboral 
        ]);
    }

    public function getPosgrado($slug) : View {
        $posgrado = Posgrado::where('slug', $slug)->first();
        $extras = json_decode($posgrado->temario, true);
        $temario_especialidad = $extras['extras']['temario_especialidad'];
        $temario_maestria = $extras['extras']['temario_maestria'];
        $rvoe_especialidad = $extras['extras']['rvoe_especialidad'];
        $rvoe_maestria = $extras['extras']['rvoe_maestria'];

        return view('posgrado', [
            "posgrado" => $posgrado,
            "temario_especialidad" => $temario_especialidad,
            "temario_maestria" => $temario_maestria,
            "rvoe_especialidad" => $rvoe_especialidad,
            "rvoe_maestria" => $rvoe_maestria
        ]);
    }

    public function calculaTuCuota() : View {
        
        return view('calculaTuCuota');

    }
}
