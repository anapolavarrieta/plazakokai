@extends('layouts._master')

@section ('content')

<div class="container">
    <div class="row white">
        <br>
    </div>
    <div class="row hidden-lg hidden-md">
        <div class="col-sm-3">
             <img src="{{URL::asset('/images/habitaciones/standar_doble.JPG')}}" class="img-responsive " alt="" >
        </div>
        <div class="col-sm-3">
             <img src="{{URL::asset('/images/habitaciones/standar_king1.JPG')}}" class="img-responsive " alt="" >
        </div>
        <div class="col-sm-3">
             <img src="{{URL::asset('/images/habitaciones/suite2.JPG')}}" class="img-responsive " alt="" >
        </div>
        <div class="col-sm-3">
             <img src="{{URL::asset('/images/habitaciones/pentHouse1.png')}}" class="img-responsive " alt="" >
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
                    <img src="{{URL::asset('/images/iconos/aire.png')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/regadera.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/cable.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/elevador.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/servicioHabitacion.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/internet.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="hidden-lg hidden-md col-sm-2 col-xs-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/telefono.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/cafe.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/minusvalidos.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/nofumar.jpg')}}" class="img-responsive" alt="" >
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
                    Junio Suite
                </h3>
            </div>
            <div class="row center font120">
                    Cama King Size
            </div>
            <div class="row center font120">
                 <br>
            </div>
            <div class="row center font120">
                <div class="col-md-2 col-sm-0 col-xs-0"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/aire.png')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/regadera.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/tina.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/sala.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/cable.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/elevador.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/servicioHabitacion.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/escritorio.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>

                <div class="hidden-sm hidden-xs col-md-2 col-lg-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/laptop.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/internet.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/telefono.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/ServicioLavanderia.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="hidden-lg hidden-md col-sm-2 col-xs-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/bellBoy.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/cafe.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>

                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/minusvalidos.jpg')}}" class="img-responsive iconoHab" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/nofumar.jpg')}}" class="img-responsive iconoHab" alt="" >
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
                    <img src="{{URL::asset('/images/iconos/sala.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/iconos/cocineta.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/iconos/comedor.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/iconos/habitaciones.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/iconos/sofas.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <img src="{{URL::asset('/images/iconos/baños.png')}}" class="img-responsive iconoPH" alt="" >
                </div>
            </div>
            <div class="row">
                <br>
            </div>
            <div class="row center font120">
                <div class="col-md-1 col-sm-0 col-xs-0"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/aire.png')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/regadera.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/cable.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/elevador.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/servicioHabitacion.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/internet.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="hidden-lg hidden-md col-sm-2 col-xs-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/telefono.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/cafe.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/minusvalidos.jpg')}}" class="img-responsive" alt="" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/iconos/nofumar.jpg')}}" class="img-responsive" alt="" >
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