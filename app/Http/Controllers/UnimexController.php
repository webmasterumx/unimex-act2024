<?php

namespace App\Http\Controllers;

use App\Models\Acercade;
use App\Models\Banner;
use App\Models\Plantel;
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
}
