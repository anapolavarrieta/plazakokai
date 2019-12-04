@extends('layouts._master')

@section ('content')

<div class="container">

    <div class="row white">
        <br>
    </div>
    <div class="row hidden-lg hidden-md">
        <div class="col-sm-3 imgHabSm center">
            <img src="{{URL::asset('/images/Habitaciones/standar_doble.JPG')}}" class="img-responsive" alt="" >
            Estandard Doble
        </div>
        <div class="col-sm-3 imgHabSm center">
            <img src="{{URL::asset('/images/Habitaciones/standar_king1.JPG')}}" class="img-responsive" alt="" >
            Estandard King
        </div>
        <div class="col-sm-3 imgHabSm center">
            <img src="{{URL::asset('/images/Habitaciones/suite2.JPG')}}" class="img-responsive" alt="" >
            Junior Suite
        </div>
        <div class="col-sm-3 imgHabSm center">
            <img src="{{URL::asset('/images/Habitaciones/pentHouse.png')}}" class="img-responsive" alt="" >
            Pent-House
        </div>
    </div>
    @include('habitaciones.habitacionesAux')
</div>
@stop