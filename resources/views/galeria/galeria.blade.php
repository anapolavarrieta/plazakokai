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
             @include('galeria.galeria9')
        </div>
        <div class="col-md-4">
             @include('galeria.galeria2')
        </div>
        <div class="col-md-4">
             @include('galeria.galeria1')
        </div>
    </div>
    <div class="row white">
        <br>
    </div>
    <div class="row">
        <div class="col-md-4">
             @include('galeria.galeria4')
        </div>
        <div class="col-md-4">
             @include('galeria.galeria5')
        </div>
        <div class="col-md-4">
             @include('galeria.galeria6')
        </div>
    </div>
    <div class="row white">
        <br>
    </div>
    <div class="row">
        <div class="col-md-4">
             @include('galeria.galeria7')
        </div>
        <div class="col-md-4">
             @include('galeria.galeria8')
        </div>
        <div class="col-md-4">
             @include('galeria.galeria3')
        </div>
    </div>
    <div class="row white">
        <br>
    </div>

</div>
@stop