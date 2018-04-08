<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="background: white; color: black">
<h1 class="center">Información de Contacto de la página</h1>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            Fecha
        </div>
        <div class="col-md-6">
            <?php
            $fecha=date("d-m-y  h:i A");
            ?>
            {{$fecha}}
        </div>
    </div>
    <div class="row">

        <div class="col-md-2">
            Cliente
        </div>
        <div class="col-md-6">
            {!!$nombre!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            Correo
        </div>
        <div class="col-md-6">
            {{{utf8_encode($correo)}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            Celular
        </div>
        <div class="col-md-6">
            {{$celular}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            Teléfono
        </div>
        <div class="col-md-6">
            {{$telefono}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            Mensaje
        </div>
        <div class="col-md-6">
            {{$mensaje}}
        </div>
    </div>
</div>
</body>
</html>