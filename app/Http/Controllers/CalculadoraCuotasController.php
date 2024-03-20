<?php

namespace App\Http\Controllers;

use App\Mail\CalculadoraCuotas;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CalculadoraCuotasController extends Controller
{

    public function index() : View
    {
        return view('calculadoraDeBecas.inicio');
    }

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
        $recive = "lishanxime201099@gmail.com";
        //$envio =  Mail::to($recive)->bcc("umrec_web@unimex.edu.mx")->send(new CalculadoraCuotas($request));

        return response()->json($respuesta);
    }

    public function enviarCorreoCalculadora(Request $request)
    {
    }
}
