@extends('layouts._master')

@section ('content')

<div class="container">
    <div class="row white">
        <br>
    </div>
    <div class="row hidden-lg hidden-md">
        <div class="col-sm-3 col-xs-6 imgHabSm center">
             <img src="{{URL::asset('/images/Habitaciones/standar_doble.JPG')}}" class="img-responsive" alt="" >
             Estandard Doble
        </div>
        <div class="col-sm-3 col-xs-6 imgHabSm center">
             <img src="{{URL::asset('/images/Habitaciones/standar_king1.JPG')}}" class="img-responsive" alt="" >
             Estandard King
        </div>
        <div class="col-sm-3 hidden-xs imgHabSm center">
             <img src="{{URL::asset('/images/Habitaciones/suite2.JPG')}}" class="img-responsive" alt="" >
             Junior Suite
        </div>
        <div class="col-sm-3 hidden-xs imgHabSm center">
             <img src="{{URL::asset('/images/Habitaciones/pentHouse.png')}}" class="img-responsive" alt="" >
             Pent-House
        </div>
    </div>
    <div class="row hidden-lg hidden-md hidden-sm center">
        <div class="col-xs-6 imgHabSm">
             <img src="{{URL::asset('/images/Habitaciones/suite2.JPG')}}" class="img-responsive" alt="" >
             Junior Suite
        </div>
        <div class="col-xs-6 imgHabSm center">
             <img src="{{URL::asset('/images/Habitaciones/pentHouse.png')}}" class="img-responsive" alt="" >
             Pent-House
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
             @include('habitaciones.estandard')
        </div>
        <div class="col-md-8 black">
            <div class="row center font120">
                <h3 class="fontBold">
                    Habitación Estandard
                </h3>
            </div>

            <div class="row center font120">
                    2 Camas Matrimoniales o 1 Cama King Size
            </div>
            <div class="row center font120">
                 <br>
            </div>
            <div class="row center font120">
                <div class="col-md-1 col-sm-0 col-xs-0"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/aire.png')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/regadera.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/cable.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/elevador.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/servicioHabitacion.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/internet.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="hidden-lg hidden-md col-sm-2 col-xs-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/telefono.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/cafe.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/minusvalidos.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/nofumar.jpg')}}" class="img-responsive" alt="" >
                </div>
            </div>
            <div class="row font200">
                <br>
            </div>
        </div>
    </div>
    <div class="row white">
        <br>
    </div>
    <div class="row">

       <div class="col-md-8 black">
            <div class="row center font120">
                <h3 class="fontBold">
                    Junior Suite
                </h3>
            </div>
            <div class="row center font120">
                    Cama King Size y Sofá Cama
            </div>
            <div class="row center font120">
                 <br>
            </div>
            <div class="row center font120">
                <div class="col-md-2 col-sm-0 col-xs-0"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/aire.png')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/regadera.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/tina.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/sala.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/cable.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/elevador.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/servicioHabitacion.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/escritorio.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>

                <div class="hidden-sm hidden-xs col-md-2 col-lg-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/laptop.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/internet.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/telefono.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/ServicioLavanderia.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="hidden-lg hidden-md col-sm-2 col-xs-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/bellboy.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/cafe.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>

                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/minusvalidos.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/nofumar.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>

            </div>
            <div class="row font50">
                <br>
            </div>
        </div>
         <div class="col-md-4">
            @include('habitaciones.suite')
        </div>
    </div>
    <div class="row white">
        <br>
    </div>
    <div class="row">
         <div class="col-md-4">
                @include('habitaciones.ph')
        </div>
        <div class="col-md-8 black">
            <div class="row center font120">
                <h3 class="fontBold">
                    Pent-House
                </h3>
            </div>
            <div class="row center font120">
            </div>
            <div class="row center font120">
                 <div class="col-md-2 col-sm-4 col-xs-4 center">
                    <img src="{{URL::asset('/images/Iconos/sala.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/Iconos/cocineta.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/Iconos/comedor.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/Iconos/habitaciones.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/Iconos/sofas.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/Iconos/baños.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
            </div>
            <div class="row">
                <br>
            </div>
            <div class="row center font120">
                <div class="col-md-1 col-sm-0 col-xs-0"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/aire.png')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/regadera.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/cable.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/elevador.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/servicioHabitacion.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/internet.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="hidden-lg hidden-md col-sm-2 col-xs-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/telefono.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/cafe.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/minusvalidos.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/nofumar.jpg')}}" class="img-responsive" alt="" >
                </div>
            </div>
            <div class="row font150">
                <br>
            </div>
        </div>
    </div>
    <div class="row white">
        <br>
    </div>
</div>
@stop