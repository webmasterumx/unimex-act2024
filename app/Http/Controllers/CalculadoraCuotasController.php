<?php

namespace App\Http\Controllers;

use App\Mail\CalculadoraCuotas;
use App\Mail\CalculadoraDetallesBeca;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CalculadoraCuotasController extends Controller
{

    public function index(): View
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
        //$recive = "lishanxime201099@gmail.com";

        SELF::establecerVariablesCorreo($request, $respuesta);
        //$envio =  Mail::to($request->emailProspecto)->bcc("umrec_web@unimex.edu.mx")->send(new CalculadoraCuotas($request));

        return response()->json($respuesta);
    }

    public function enviarCorreoCalculadoraDetalleBeca()
    {
        //$recive = "lishanxime201099@gmail.com";
        $recive = session('datoCuatroCalculadora');
        echo session('Beca');
        //Mail::to($recive)->send(new CalculadoraDetallesBeca());
    }

    public function establecerVariablesCorreo(Request $request, $respuesta)
    {
        session(["datoUnoCalculadora" => $request->nombreProspecto]);
        session(["datoDosCalculadora" => $request->apellidosProspecto]);
        session(["datoTresCalculadora" => $request->telefonoProspecto]);
        session(["datoCuatroCalculadora" => $request->emailProspecto]);
        session(["datoCincoCalculadora" => $respuesta['FolioCRM']]);
    }

    public function establecerVariablesPromocion($response)
    {

        session(["Beca" => $response['Beca']]);
        session(["Carrera" => $response['Carrera']]);
        session(["ClaveCuoProm" => $response['ClaveCuoProm']]);
        session(["ClaveNivel" => $response['ClaveNivel']]);
        session(["ClavePer" => $response['ClavePer']]);
        session(["Credencial" => $response['Credencial']]);
        session(["DescripPer" => $response['DescripPer']]);
        session(["Dias" => $response['Dias']]);
        session(["Horario" => $response['Horario']]);
        session(["InicioClases" => $response['InicioClases']]);
        session(["InscCB" => $response['InscCB']]);
        session(["InscSB" => $response['InscSB']]);
        session(["ParcCB" => $response['ParcCB']]);
        session(["ParcSB" => $response['ParcSB']]);
        session(["Periodo" => $response['Periodo']]);
        session(["Plantel" => $response['Plantel']]);
        session(["ReinsCB" => $response['ReinsCB']]);
        session(["ReinscSB" => $response['ReinscSB']]);
        session(["TotalCB" => $response['TotalCB']]);
        session(["TotalSB" => $response['TotalSB']]);
        session(["Turno" => $response['Turno']]);
        session(["Uniforme" => $response['Uniforme']]);
        session(["Vigencia" => $response['Vigencia']]);
    }
}
