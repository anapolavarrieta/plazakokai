<!doctype html lang="es">
<!--?xml version="1.0" encoding="UTF-8"?-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body style="background: white; color: black">
<h1 class="center">Información de Contacto de la página</h1>
<table>
    <tr>
        <td>
            Fecha
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
        <td>
            Cliente
        </td>
        <td>
            {{$nombre}}
        </td>
    </tr>
    <tr>
        <td>
            Correo
        </td>
        <td>
            {{utf8_decode($correo)}}
        </td>
    </tr>
    <tr>
        <td>
            Celular
        </td>
        <td>
            {{$celular}}
        </td>
    </tr>
    <tr>
        <td>
            Teléfono
        </td>
        <td>
            {{$telefono}}
        </td>
    </tr>
    <tr>
        <td>
            Mensaje
        </td>
        <td>
            {{$mensaje}}
        </td>
    </tr>
</table>
</body>
</html>