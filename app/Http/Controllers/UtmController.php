<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtmController extends Controller
{

    public $dataUTM = [];

    public function initUtmSource()
    {
        if (isset($_REQUEST['utm_source'])) { //*determina si la ur contiene la variable
            if (!empty($_REQUEST['utm_source'])) { //! determina si la variable esta vacia
                session(["utm_source" => $_REQUEST['utm_source']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena
            session(["utm_source" => "organico"]);
        }


        if (isset($_REQUEST['utm_medium'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['utm_medium'])) { //! determina si la variable esta vacia
                session(["utm_medium" => $_REQUEST['utm_medium']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["utm_medium" => 0]);
        }

        if (isset($_REQUEST['utm_campaign'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['utm_campaign'])) { //! determina si la variable esta vacia
                session(["utm_campaign" => $_REQUEST['utm_campaign']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["utm_campaign" => 0]);
        }

        if (isset($_REQUEST['utm_term'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['utm_term'])) { //! determina si la variable esta vacia
                session(["utm_term" => $_REQUEST['utm_term']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["utm_term" => 0]);
        }

        if (isset($_REQUEST['utm_content'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['utm_content'])) { //! determina si la variable esta vacia
                session(["utm_content" => $_REQUEST['utm_content']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["utm_content" => 0]);
        }

        if (isset($_REQUEST['gad_source'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['gad_source'])) { //! determina si la variable esta vacia
                session(["gad_source" => $_REQUEST['gad_source']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["gad_source" => 0]);
        }
    }

    public function initUtmSourceOferta($abreviatura)
    {

        if (isset($_REQUEST['origen'])) {
            if ($_REQUEST['origen'] == "menu") {
                $campaignCalculadora = "Home+header";
                $contentCalculadora = "Oacademica+L" + $abreviatura + "+body+boton+calculadora";
            } else if ($_REQUEST['origen'] == "slider") {
                $campaignCalculadora = "Home+body";
                $contentCalculadora = "SliderL" + $abreviatura + "+boton+calculadora";
            }
        } else {
            $campaignCalculadora = "Oacademica+body";
            $contentCalculadora = "L" + $abreviatura + "+boton+calculadora";
        }

        session(["utm_campaign" => $campaignCalculadora]);
        session(["utm_content" => $contentCalculadora]);

        if (isset($_REQUEST['utm_source'])) { //*determina si la ur contiene la variable
            if (!empty($_REQUEST['utm_source'])) { //! determina si la variable esta vacia
                session(["utm_source" => $_REQUEST['utm_source']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena
            session(["utm_source" => "organico"]);
        }


        if (isset($_REQUEST['utm_medium'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['utm_medium'])) { //! determina si la variable esta vacia
                session(["utm_medium" => $_REQUEST['utm_medium']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["utm_medium" => 0]);
        }

        /*    if (isset($_REQUEST['utm_campaign'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['utm_campaign'])) { //! determina si la variable esta vacia
                session(["utm_campaign" => $_REQUEST['utm_campaign']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["utm_campaign" => 0]);
        } */

        if (isset($_REQUEST['utm_term'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['utm_term'])) { //! determina si la variable esta vacia
                session(["utm_term" => $_REQUEST['utm_term']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["utm_term" => 0]);
        }

        /* if (isset($_REQUEST['utm_content'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['utm_content'])) { //! determina si la variable esta vacia
                session(["utm_content" => $_REQUEST['utm_content']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["utm_content" => 0]);
        } */

        if (isset($_REQUEST['gad_source'])) { //*determina si la url contiene la variable
            if (!empty($_REQUEST['gad_source'])) { //! determina si la variable esta vacia
                session(["gad_source" => $_REQUEST['gad_source']]);
            }
        } else { //? decision si la variable no se encuentra en la cadena de la url
            session(["gad_source" => 0]);
        }
    }

    public function getUtmSource()
    {
        $this->dataUTM["utm_source"] = session('utm_source');
        $this->dataUTM["utm_medium"] = session('utm_medium');
        $this->dataUTM["utm_campaign"] = session('utm_campaign');
        $this->dataUTM["utm_term"] = session('utm_term');
        $this->dataUTM["utm_content"] = session('utm_content');
        $this->dataUTM["gad_source"] = session('gad_source');
    }
}
