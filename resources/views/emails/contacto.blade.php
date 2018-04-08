<!DOCTYPE html>
<head>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='{{URL::asset('/css/generico.css')}}' type='text/css' rel='stylesheet'>
	<link href='{{URL::asset('/css/style.css')}}' type='text/css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
	<script src="{{URL::asset('/css/Bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body style="background: white; color: black">
<h1 class="center">Información de Contacto de la página</h1>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            Cliente
        </div>
        <div class="col-md-6">
            {{$nombre}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            Correo
        </div>
        <div class="col-md-6">
            {{$correo}}
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