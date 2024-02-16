<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
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
