<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraCuotasController extends Controller
{

    public function insertarProspecto(Request $request)
    {


        $valores = array(
            "campaingContent" => "",
            "campaignMedium" => "",
            "campaignTerm" => "",
            "descripPublicidad" => "",
            "folioReferido" => "0",
            "pApMaterno" => "",
            "pApPaterno" => $request->apellidosProspecto,
            "pCarrera" => 1,
            "pCelular" => $request->telefonoProspecto,
            "pCorreo" => $request->emailProspecto,
            "pHorario" => 0,
            "pNivel_Estudio" => $request->selectNivel,
            "pNombre" => $request->nombreProspecto,
            "pOrigen" => 23,
            "pPeriodoEscolar" => $request->selectPeriodo,
            "pPlantel" => $request->selectPlantel,
            "pTelefono" => $request->telefonoProspecto,
            "utpsource" => "",
            "websiteURL" => "https://unimex.edu.mx/",
        );

        //dd($valores);

        $respuesta = app(ApiConsumoController::class)->agregarProspectoCRM($valores);

        return response()->json($respuesta);
    }
}
