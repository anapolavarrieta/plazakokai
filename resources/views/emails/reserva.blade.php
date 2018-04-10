<!doctype html lang="es">
<!--?xml version="1.0" encoding="UTF-8"?-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body style="background: white; color: black; margin:30px;">
<h1 style="background-color:#00336c;height:120px;color:white;vertical-align: middle;margin:20px;">
    <a href="www.hotelkokai.com">
        <img class="logo" src="{{URL::asset('/images/logo.jpg')}}" style="height:100px;margin:5px" alt="Visitenos" >
    </a>Reservación en el Hotel Plaza Kokai Cancún<br>
</h1>
<p style="margin-left:20px;">Estimad@ {{$nombre}};</p>
<b style="margin-left:20px;">¡Gracias por reservar con nosotros! Nos pondremos en contacto con usted tan pronto confirmemos disponibilidad y para darle más detalles de su reservación.</b>
<p style="margin-left:40px;">La información solicitada es la siguiente:</p>
<table style="margin-left:40px;">
    <tr>
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
        <td style="text-align: right;">
            <b>Nombre:</b>
        </td>
        <td>
            {{$nombre}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Correo:</b>
        </td>
        <td>
            {{$correo}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Adultos:</b>
        </td>
        <td>
            {{$adultos}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Niños:</b>
        </td>
        <td>
            {{$niños}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Habitaciones:</b>
        </td>
        <td>
            {{$habitaciones}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Fecha Entrada:</b>
        </td>
        <td>
            {{$fechaEntrada}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Fecha Salida:</b>
        </td>
        <td>
            {{$fechaSalida}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Estandard Doble:</b>
        </td>
        <td>
            {{$estDbl}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Estandard King:</b>
        </td>
        <td>
            {{$estKing}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Junior Suite:</b>
        </td>
        <td>
            {{$suite}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Pent-House:</b>
        </td>
        <td>
            {{$ph}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Comentarios:</b>
        </td>
        <td>
            {{$comentarios}}
        </td>
    </tr>
</table>
<p style="margin-left:20px;">Su reservación esta sujeta a disponibilidad y será confirmada por correo electrónico o por teléfono.</p>

<div style="background-color:#74cbdf;height:100px;vertical-align: middle;margin:20px;">
    <p style="margin-left:40px;">
        <b>Atte.
        <br>
        <i>Reservaciones Hotel Plaza Kokai Cancún</i>
        <br>
        <a href="mailto:ventash@kokai.com.mx?Subject=[Contacto Reserva] Correo Página">ventash@kokai.com.mx</a>
        <br>
        <br>
        TU HOTEL EN EL CARIBE MEXICANO
        <br>
        <a href="www.hotelkokai.com">www.hotelkokai.com</a> | + 52 (998) 193 3170
        </b>
    </p>
</div>
</body>
</html>