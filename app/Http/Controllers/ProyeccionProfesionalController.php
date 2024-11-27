<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyeccionProfesionalController extends Controller
{

    public function index()
    {
        return view('proyeccionProfesional.index');
    }

    public function registrarDatos(Request $request)
    {
        $consumo = new ApiConsumoController();

        $nombre = $request->nombre;
        $matricula = $request->matricula;
        $celular = $request->celular;
        $mail = $request->email;
        $posgrado = $request->carrera;
        $plantel = $request->plantel;
        $grupo = $request->grupo;

        $argumentos = array(
            'nombre' => $nombre,
            'matricula' => $matricula,
            'celular' => $celular,
            'correo' => $mail,
            'carrera' => $posgrado,
            'plantel' => $plantel,
            'grupo' => $grupo,
        );

        $agregar = $consumo->añadirProyeccionProfesional($argumentos);

        return $agregar;

    }
}
