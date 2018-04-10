<!doctype html lang="es">
<!--?xml version="1.0" encoding="UTF-8"?-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body style="background: white; color: black">
<h1 style="background-color:lightblue;">Información de Contacto de la Página</h1>
<table>
    <tr>
        <td style="text-align: right;">
            <b>Fecha</b>
        </td>
        <td>
            <?php
            date_default_timezone_set('America/Mexico_City');
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
            {{$correo}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Celular</b>
        </td>
        <td>
            {{$celular}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Teléfono</b>
        </td>
        <td>
            {{$telefono}}
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <b>Mensaje</b>
        </td>
        <td>
            {{$mensaje}}
        </td>
    </tr>
</table>
</body>
</html>