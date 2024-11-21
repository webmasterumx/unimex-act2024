<?php

namespace App\Http\Controllers;

use App\Mail\MailTestVocacional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\VarDumper\VarDumper;

class TestVocacionalController extends Controller
{

    public function index()
    {
        return view('testVocacional.index');
    }

    public function establecerDatosPersonales(Request $request)
    {

        // establecer en variables
        $nombre = $request->nombre;
        $apellidoPaterno = $request->apellidoPaterno;
        $apellidoMaterno = $request->apellidoMaterno;
        $celular = $request->celular;
        $correo = $request->correo;

        //! asignar variables de session

        try {

            session(['nombre' => $nombre]);
            session(['apellidoPaterno' => $apellidoPaterno]);
            session(['apellidoMaterno' => $apellidoMaterno]);
            session(['celular' => $celular]);
            session(['correo' => $correo]);

            return true;
        } catch (\Throwable $th) {

            return false;
        }
    }

    public function iniciarTest()
    {
        return view('testVocacional.test');
    }

    public function terminarRegistro(Request $request)
    {

        $consultas = new ApiConsumoController();

        //! se establecen las variables iniciales
        $nombre = session('nombre');
        $appat = session('apellidoPaterno');
        $apmat = session('apellidoMaterno');
        $cel = session('celular');
        $mail = session('correo');

        $plantel = $request->plantel;
        $nivel = $request->nivel;
        $periodo = $request->periodo;
        $carrera = $request->carrera;
        $horario = $request->horario;
        $urlVisitada = $request->urlVisitada;

        $calificacion = $request->calificacion;
        $origen = 15;

        //! se corrobora si el propecto existe
        $verificarProspectoCRM = $consultas->verificarProspecto($mail, "T");

        if ($verificarProspectoCRM == 1) {
            //solo se manda el correo

            try {
                $envio = Mail::to($mail)->bcc("umrec_web@unimex.edu.mx")->send(new MailTestVocacional($nombre, $appat, $apmat, $calificacion));

                return true;
            } catch (\Throwable $th) {
                //throw $th;

                return false;
            }
        } else {
            // se agrega a crm y se manda correo

            return 2;

            $valores = array(
                "pNombre" => $nombre,
                "pApPaterno" => $appat,
                "pApMaterno" => $apmat,
                "pTelefono" => "",
                "pCelular" => $cel,
                "pCorreo" => $mail,
                "pPeriodoEscolar" => $periodo,
                "pPlantel" => $plantel,
                "pNivel_Estudio" => $nivel,
                "pCarrera" => $carrera,
                "pHorario" => $horario,
                "pOrigen" => $origen,
                "utpsource" =>  "",
                "descripPublicidad" => "",
                "campaignMedium" => "",
                "campaignTerm" => "",
                "campaignContent" => "",
                "websiteURL" => "",
                "folioReferido" => "0"
            );

            $respuesta = app(ApiConsumoController::class)->agregarProspectoCRM($valores);

            var_dump($respuesta);

            if ($respuesta["FolioCRM"] == 0 || $respuesta["FolioCRM"] == '0') {

                try {
                    $envio = Mail::to($mail)->bcc("umrec_web@unimex.edu.mx")->send(new MailTestVocacional($nombre, $appat, $apmat, $calificacion));

                    return true;
                } catch (\Throwable $th) {
                    //throw $th;

                    return false;
                }
            } else {
            }


           
        }
    }
}
