<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function contactoProspecto(Request $request)
    {
        $valores = array(
            "campaingContent" => "",
            "campaignMedium" => "",
            "campaignTerm" => "",
            "descripPublicidad" => "",
            "folioReferido" => "0",
            "pApMaterno" => "",
            "pApPaterno" => $request->apellidos_prospecto,
            "pCarrera" => $request->carreraSelect,
            "pCelular" => $request->celular_prospecto,
            "pCorreo" => $request->mail_prospecto,
            "pHorario" => $request->horarioSelect,
            "pNivel_Estudio" => $request->nivelSelect,
            "pNombre" => $request->nombre_prospecto,
            "pOrigen" => 11,
            "pPeriodoEscolar" => $request->periodoSelect,
            "pPlantel" => $request->plantelSelect,
            "pTelefono" => $request->telefono_prospecto,
            "utpsource" => "",
            "websiteURL" => "https://unimex.edu.mx/",
        );

        $envio = app(ApiConsumoController::class)->agregarProspectoCRM($valores);

        if (isset($envio['FolioCRM'])) {
            $respuesta['estado'] = true;
            $respuesta['mensaje'] = "Datos enviados con éxito.";
        } else {
            $respuesta['estado'] = false;
            $respuesta['mensaje'] = "Ocurrió un error intenta más tarde.";
        }
        return response()->json($respuesta);
    }

    public function servicioAlumnos(Request $request)
    {
        $valores = array(
            "nombre" => $request->name_service,
            "mail" => $request->email_service,
            "tel_casa" => $request->phone_casa_service,
            "tel_celular" => $request->movil_service,
            "plantel" => $request->select_plantel,
            "asunto" => $request->asunto_service,
            "matricula" => $request->matricula_service,
            "mensaje" => $request->mensaje_service
        );
    }

    public function trabajaUnimex(Request $request)
    {
        $valores = array(
            "nombre" => $request,
            "mail" => $request,
            "telefono_casa" => $request,
            "telefono_celular" => $request,
            "plantel" => $request,
            "nivel_estudios" => $request,
            "puesto_interes" => $request,
            "experiencia_laboral" => $request
        );
    }
}
