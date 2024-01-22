<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiConsumoController extends Controller
{

    public $base_url = 'https://api.unimexver.edu.mx/api/';

    /**
     * Metodo ocupado en:
     * Formulario de Contacto
     * Calculadora de Becas 
     */
    public function getPlanteles()
    {
        $response = Http::get($this->base_url . 'oferta/planteles');

        return $response->json();
    }

    public function getNiveles(Request $request)
    {
            $plantel = $request->plantel;
            $response = Http::post($this->base_url . 'oferta/niveles', [
                'clavePlantel' => $plantel,
            ]);

            return $response->json();
    }

    public function getPeriodos(Request $request)
    {
        $plantel = $request->plantel;
        $response = Http::post($this->base_url . 'oferta/periodos', [
            'clavePlantel' => $plantel,
        ]);

        return $response->json();
    }

    public function getCarreras(Request $request)
    {
        $plantel = $request->plantel;
        $nivel = $request->nivel;
        $periodo = $request->periodo;

        $response = Http::post($this->base_url . 'oferta/carreras', [
            'clavePlantel' => $plantel,
            'claveNivel' => $nivel,
            'clavePeriodo' =>   $periodo
        ]);

        return $response->json();
    }

    public function getHorarios(Request $request)
    {
        $plantel = $request->plantel;
        $nivel = $request->nivel;
        $periodo = $request->periodo;
        $carrera = $request->carrera;

        $response = Http::post($this->base_url . 'oferta/turnos', [
            'clavePlantel' => $plantel,
            'claveNivel' => $nivel,
            'clavePeriodo' =>   $periodo,
            'claveCarrera' => $carrera
        ]);

        return $response->json();
    }
}
