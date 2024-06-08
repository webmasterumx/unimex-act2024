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

        $source = session("utm_source");
        $medium = session("utm_medium");
        $content = session("utm_content");
        $campaign = session("utm_campaign");
        $term = session("utm_term");

        if ($request->typeTelefono == 1) {
            $telefono_valor = "";
            $celular_valor = $request->telefonoProspecto;
        } else {
            $telefono_valor = $request->telefonoProspecto;
            $celular_valor = "";
        }

        $valores = array(

            "pNombre" => $request->nombreProspecto,
            "pApPaterno" => $request->apellidosProspecto,
            "pApMaterno" => "",
            "pTelefono" => $telefono_valor,
            "pCelular" => $celular_valor,
            "pCorreo" => $request->emailProspecto,
            "pPeriodoEscolar" => $request->selectPeriodo,
            "pPlantel" => $request->selectPlantel,
            "pNivel_Estudio" => $request->selectNivel,
            "pCarrera" => 1,
            "pHorario" => 0,
            "pOrigen" => 23,
            "utpsource" =>  $source,
            "descripPublicidad" => $campaign,
            "campaignMedium" => $medium,
            "campaignTerm" => $term,
            "campaignContent" => $content,
            "websiteURL" => "https://unimex.edu.mx/calcula-tu-cuota",
            "folioReferido" => "0",
        );

        //dd($valores);
        $respuesta = app(ApiConsumoController::class)->agregarProspectoCRM($valores);
        //$recive = "lishanxime201099@gmail.com";

        SELF::establecerVariablesCorreo($request, $respuesta);
        $envio =  Mail::to($request->emailProspecto)->bcc("umrec_web@unimex.edu.mx")->send(new CalculadoraCuotas());

        return response()->json($respuesta);
    }

    public function enviarCorreoCalculadoraDetalleBeca()
    {
        //$recive = "lishanxime201099@gmail.com";
        $recive = session('datoCuatroCalculadora');
        var_dump(session('datoCuatroCalculadora'));
        $envio =  Mail::to($recive)->bcc("umrec_web@unimex.edu.mx")->send(new CalculadoraCuotas());
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

    public function establecerVariablesPromocion(Request $request)
    {
        echo $request->Beca;
        session(["Beca" => $request->Beca]);
        session(["Carrera" => $request->Carrera]);
        session(["ClaveCuoProm" => $request->ClaveCuoProm]);
        session(["ClaveNivel" => $request->ClaveNivel]);
        session(["ClavePer" => $request->ClavePer]);
        session(["Credencial" => $request->Credencial]);
        session(["DescripPer" => $request->DescripPer]);
        session(["Dias" => $request->Dias]);
        session(["Horario" => $request->Horario]);
        session(["InicioClases" => $request->InicioClases]);
        session(["InscCB" => $request->InscCB]);
        session(["InscSB" => $request->InscSB]);
        session(["ParcCB" => $request->ParcCB]);
        session(["ParcSB" => $request->ParcSB]);
        session(["Periodo" => $request->Periodo]);
        session(["Plantel" => $request->Plantel]);
        session(["ReinsCB" => $request->ReinsCB]);
        session(["ReinscSB" => $request->ReinscSB]);
        session(["TotalCB" => $request->TotalCB]);
        session(["TotalSB" => $request->TotalSB]);
        session(["Turno" => $request->Turno]);
        session(["Uniforme" => $request->Uniforme]);
        session(["Vigencia" => $request->Vigencia]);

        echo session('Beca');
    }
}
