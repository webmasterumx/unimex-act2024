<?php

namespace App\Http\Controllers;

use App\Mail\ContactoProspecto;
use App\Mail\QuejasSugerencias;
use App\Mail\ServicioAlumno;
use App\Mail\TrabajaUnimex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        //$respuesta = app(ApiConsumoController::class)->agregarProspectoCRM($valores); //! envio de datos al WS
        $respuesta = array(
            "FolioCRM" => 1206174,
            "Mensaje" => "",
            "Nombre" => "prueba desde rectoria",
            "Ciclo" => "Septiembre - 2024",
            "Nivel" => "Licenciatura",
            "Carrera" => "Administración de Empresas Turísticas",
            "Turno" => "Sabatino B Sábado 07:00 a 16:00",
            "Plantel" => "SATELITE",
            "FechaVigenciaPromocion_Incio" => "Lunes 19 de Febrero del 2024",
            "FechaVigenciaPromocion_Final" => "Domingo 24 de Diciembre del 2017",
            "Email" => "rectoria_testing@gmial.com"
        );
        //$recive = "lishanxime201099@gmail.com";
        //$envio =  Mail::to($recive)->bcc("umrec_web@unimex.edu.mx")->send(new ContactoProspecto($request, $envio)); //! envio del correo

        return view('registroExitoso', [
            "respuesta" => $respuesta,
            "datos" => $request,
        ]);
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

        $recive = "lishanxime201099@gmail.com";
        $envio =  Mail::to($recive)->bcc("umrec_web@unimex.edu.mx")->send(new ServicioAlumno($valores));

        var_dump($envio);
    }

    public function trabajaUnimex(Request $request)
    {
        $valores = array(
            "nombre" => $request->nombre_trabajo,
            "mail" => $request->email_trabaja,
            "telefono_casa" => $request->telefono_casa_trabaja,
            "telefono_celular" => $request->telefono_movil_trabaja,
            "plantel" => $request->plantel_trabaja,
            "nivel_estudios" => $request->nivel_est_trabaja,
            "puesto_interes" => $request->puesto_interes,
            "experiencia_laboral" => $request->experiencia_trabaja
        );

        $file = $request->file('cv_trabaja');

        $recive = "lishanxime201099@gmail.com";
        $envio =  Mail::to($recive)->bcc("umrec_web@unimex.edu.mx")->send(new TrabajaUnimex($valores, $file));

        var_dump($envio);
    }

    public function quejasYsugerencias(Request $request)
    {
        $valores = array(
            "nombre" => $request->nombre_qys,
            "mail" => $request->mail_qys,
            "telefono_casa" => $request->telefono_casa_qys,
            "telefono_celular" => $request->telefono_movil_qys,
            "matricula" => $request->matricula_qys,
            "asunto" => $request->asunto_qys,
            "mensaje" => $request->mensaje_qys
        );

        $recive = "lishanxime201099@gmail.com";
        $envio = Mail::to($recive)->bcc("umrec_web@unimex.edu.mx")->send(new QuejasSugerencias($valores));

        var_dump($envio);
    }

    public function testerEnvio()
    {
        $recive = "lishanxime201099@gmail.com";
        //$envio =  Mail::to($recive)->bcc("umrec_web@unimex.edu.mx")->send(new ServicioAlumno());
        //dd($envio);
    }
}
