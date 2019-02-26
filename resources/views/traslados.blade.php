@extends('layouts._master')

@section ('content')
<div class="container">
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-md-12 font200 fontBold center">
            PARA SU COMODIDAD OFRECEMOS TRASLADOS
            <br>
            <br>
        </div>
    </div>
    <div class="row center">
        <div class="col-md-4 font150 center">
            <img src="{{URL::asset('/images/Iconos/trasAutobus.png')}}" class="imgTras img-responsive center" alt="" >
            CENTRAL DE CAMIONES
        </div>
        <div class="col-md-4 font150 center">
            <img src="{{URL::asset('/images/Iconos/trasPlaya.png')}}" class="imgTras img-responsive center" alt="" >
            PLAYA
        </div>
        <div class="col-md-4 font150 center">
            <img src="{{URL::asset('/images/Iconos/trasAeropuerto.png')}}" class="imgTras img-responsive center" alt="" >
            AEROPUERTO
        </div>
    </div>
    <div class="row">
        <br>
        <br>
    </div>
    <div class="row">
        <div class="col-md-12 font200 fontBold center red">
            <a class="red" href="/contacto">COMUNICATE CON NOSOTROS Y RESERVA PARA MAYOR INFORMACIÓN</a>
        </div>
    </div>
    <div class="row">
        <br>
    </div>
</div>
@stop