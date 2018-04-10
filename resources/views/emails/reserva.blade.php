<!doctype html lang="es">
<!--?xml version="1.0" encoding="UTF-8"?-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body style="background: white; color: black">
<h1 class="center">Información de Contacto de la Página</h1>
<table>
    <tr>
        <td style="text-align: right;">
            <b>Fecha</b>
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
            <b>Nombre</b>
        </td>
        <td>
            {{$nombre}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Correo</b>
        </td>
        <td>
            {{$correo)}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Adultos</b>
        </td>
        <td>
            {{$adultos}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Niños</b>
        </td>
        <td>
            {{$niños}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Habitaciones</b>
        </td>
        <td>
            {{$habitaciones}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Fecha Entrada</b>
        </td>
        <td>
            {{$fechaEntrada}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Fecha Salida</b>
        </td>
        <td>
            {{$fechaSalida}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Estandard Doble</b>
        </td>
        <td>
            {{estDbl}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Estandard King</b>
        </td>
        <td>
            {{$estKing}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Junior Suite</b>
        </td>
        <td>
            {{$suite}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Pent-House</b>
        </td>
        <td>
            {{$ph}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Comentarios</b>
        </td>
        <td>
            {{$comentarios}}
        </td>
    </tr>
</table>
</body>
</html>