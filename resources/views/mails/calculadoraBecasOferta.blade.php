<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <table>
        <tr>
            <td> <img src="{{ asset('assets/img/header/logo-2020.webp') }}" style="width:35%;" /></td>
        </tr>
        <tr>
            <td>
                <p>Número de Folio: <b> {{ session('datoCincoCalculadora') }} </b></p>
                <p> ¡Felicidades! <b> {{ session('datoUnoCalculadora') . ' ' . session('datoDosCalculadora') }} </b> ya
                    diste el primer paso para
                    cambiar tu vida.
                </p>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            INSCRIPCIÓN
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            Con tu promoción
                        </td>
                        <td>
                            {{ session('InscCB') }}
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>
                            4 PARCIALES DE
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            Beca del {{ session('Beca') }}%
                        </td>
                        <td>
                            {{ session('ParcCB') }}
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td>
                            TOTAL A PAGAR EN 1er CUATRIMESTRE
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            Promoción y Beca
                        </td>
                        <td>
                            {{ session('TotalCB') }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <p>
                    Tu selección ha sido: Licenciatura en {{ session('Carrera') }} <br>
                    Plantel: {{ session('Plantel') }} en horario: {{ session('Turno') }} de {{ session('Turno') }} <br>
                    Inicio de clases {{ session('DescripPer') }} <br>
                    Vigencia: {{ session('Vigencia') }} <br>
                    Durante el cuatrimestre se deberan pagar 4 parcialidades indicadas en el Calendario Escolar. <br>
                    Para mayor información de los costos de reinscripción, acude al plantel de tu interes.
                </p>
            </td>
        </tr>
    </table>
    <table border="0" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Pasos para completar tu
                                        inscripción:</strong><br /><br />
                                    <strong> &nbsp;1. Solicita en el Plantel tu
                                        matrícula.</strong><br /><br />
                                    <strong> &nbsp;2. Paga tu
                                        inscripción.</strong><br />
                                    &nbsp; &nbsp; &nbsp;a. Transferencia
                                    interbancaria SPEI.<br />
                                    &nbsp; &nbsp; &nbsp;b. Depósito en sucursal
                                    bancaria ScotiaBank<br />
                                    &nbsp; &nbsp; &nbsp;c. Pago en plantel con
                                    tarjeta de Débito o Crédito Visa o
                                    Mastercard.<br />
                                    <br />
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <br>
                                    <strong> &nbsp;3. Entrega tus
                                        documentos.</strong><br />

                                    &nbsp; &nbsp; &nbsp;a. Comprobante de pago
                                    (original y copia).<br />
                                    &nbsp; &nbsp; &nbsp;b. Acta de Nacimiento
                                    (original y copia).<br />
                                    &nbsp; &nbsp; &nbsp;c. Certificado de
                                    Bachillerato (original y copia) para
                                    Licenciatura.<br />
                                    &nbsp; &nbsp; &nbsp;d. Certificado de
                                    Licenciatura (original y copia) para
                                    Posgrados.<br />
                                    &nbsp; &nbsp; &nbsp;e. Titulo o cédula
                                    profesional (copia) para Posgrados.<br />
                                    <br />
                                    &nbsp; &nbsp; &nbsp;¿AÚN ESTÁS ESTUDIANDO EL
                                    BACHILLERATO O NO TE HAN ENTREGADO TU
                                    CERTIFICADO?<br />
                                    &nbsp; &nbsp; &nbsp; RESERVA TU LUGAR PARA
                                    LICENCIATURA CON:
                                    <br>&nbsp; &nbsp; &nbsp;1) Comprobante de
                                    pago (original y copia).<br>
                                    &nbsp; &nbsp; &nbsp;2) Acta de nacimiento
                                    (original y copia).<br><br>

                                    &nbsp; &nbsp; &nbsp;¿ESTUDIASTE LA
                                    LICENCIATURA O PREPARATORIA EN UNIMEX?<br />
                                    &nbsp; &nbsp; &nbsp; Asiste a tu plantel más
                                    cercano y pregunta por el benefico de ser
                                    parte de la familia UNIMEX.<br><br>

                                    Pronto recibirás la llamada de un asesor
                                    para ayudarte con tu proceso de inscripción;
                                    también enviaremos una copia de esta
                                    información al correo que registraste
                                    (revisa tu

                                    configuración para facilitar la
                                    recepción).<br><br>
                                    Si deseas comunicarte con un asesor, marca
                                    al:
                                    <strong><u>{{ session('telefonoPlanCorreo') }}</u></strong>.<br>
                                    Visítanos en:
                                    <strong><u>{{ session('plantelDir') }}</u></strong>
                                    <br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <br />
            <p class="align-center">
                <a href="https://twitter.com/soyunimex" target="_blank"><img
                        src="http://unimex.edu.mx/calcula-tu-cuota/img/twitter.png" /></a>&nbsp;
                &nbsp;

                <a href="'. $face .'" target="_blank"><img
                        src="http://unimex.edu.mx/calcula-tu-cuota/img/facebook.png" /></a>&nbsp;
                &nbsp;

                <a href="https://www.instagram.com/universidadmexicana/" target="_blank"><img
                        src="http://unimex.edu.mx/calcula-tu-cuota/img/instagram.png" /></a>&nbsp;
                &nbsp;
            </p>
        </tbody>
    </table>
    <p class="legals">
        {!! session('legales') !!}
    </p>
</body>

</html>
