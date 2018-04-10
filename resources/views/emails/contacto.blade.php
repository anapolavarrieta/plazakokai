<!doctype html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="background: white; color: black; margin:30px;">
<table>
    <tr>
        <td align="center">
            <table style="width:100%;">
                <tr >
                    <td style="background-color:#00336c;color:white;vertical-align: middle;text-align:center; margin:30px;">
                        <a href="www.hotelkokai.com">
                            <img class="logo" src="{{URL::asset('/images/logo.jpg')}}" style="height:100px;margin-left:20px" alt="Visitenos" >
                        </a>
                        <h1>Contacto con en el Hotel Plaza Kokai Cancún</h1>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <hr>
            <p>Estimad@ {{$nombre}};</p>
            <b>¡Gracias por contactarnos, nos pondremos en contacto con usted tan pronto leamos su mensaje!</b>
            <p>La información solicitada es la siguiente:</p>
            <table>
                <tr>
                    <td>
                         &ensp;&ensp;&ensp; &ensp;&ensp;&ensp;
                         &ensp;&ensp;&ensp; &ensp;&ensp;&ensp;
                    </td>
                    <td style="text-align: right;">
                        <b>Fecha:</b>
                    </td>
                    <td>
                        <?php
                        date_default_timezone_set('America/Cancun');
                        $fecha=date("d-m-y  h:i A");
                        ?>
                        {{$fecha}}
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Nombre:</b>
                    </td>
                    <td>
                        {{$nombre}}
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Correo:</b>
                    </td>
                    <td>
                        {{$correo}}
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Celular:</b>
                    </td>
                    <td>
                        {{$celular}}
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Teléfono:</b>
                    </td>
                    <td>
                        {{$telefono}}
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Mensaje:</b>
                    </td>
                    <td>
                        {{$mensaje}}
                    </td>
                </tr>
            </table>
            <hr>
        </td>
    </tr>
    <tr>
        <td align="center">
            <table style="width:100%">
                <tr >
                    <td style="background-color:#74cbdf;text-align:center; margin:30px;">
                        <p>
                            <b>
                            <br>
                            Atte.
                            <br>
                            <i>Hotel Plaza Kokai Cancún</i>
                            <br>
                            <a href="mailto:ventash@kokai.com.mx?Subject=[Contacto Reserva] Correo Página">ventash@kokai.com.mx</a>
                            <br>
                            <br>
                            TU HOTEL EN EL CARIBE MEXICANO
                            <br>
                            <a href="www.hotelkokai.com">www.hotelkokai.com</a> | + 52 (998) 193 3170
                            <br>
                            </b>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>