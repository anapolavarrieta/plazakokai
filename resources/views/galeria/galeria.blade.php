@extends('layouts._master')

@section ('content')

<div class="container">
    <div class="row white">
        <br>
    </div>
    <div class="row hidden-lg hidden-md">
        <div class="col-sm-3 col-xs-6 imgHabSm center">
            <img src="{{URL::asset('/images/galeria/_DSC9535-Panorámica.JPG')}}" class="img-responsive" alt="" >
        </div>
        <div class="col-sm-3 col-xs-6 imgHabSm center">
            <img src="{{URL::asset('/images/galeria/_DSC9462.JPG')}}" class="img-responsive" alt="" >
        </div>
        <div class="col-sm-3 hidden-xs imgHabSm center">
            <img src="{{URL::asset('/images/galeria/_DSC9499.JPG')}}" class="img-responsive" alt="" >
        </div>
        <div class="col-sm-3 hidden-xs imgHabSm center">
            <img src="{{URL::asset('/images/galeria/_DSC9507.JPG')}}" class="img-responsive" alt="" >
        </div>
    </div>
    <div class="row hidden-lg hidden-md hidden-sm center">
        <div class="col-xs-6 imgHabSm">
             <img src="{{URL::asset('/images/galeria/_DSC9499.JPG')}}" class="img-responsive" alt="" >
        </div>
        <div class="col-xs-6 imgHabSm center">
             <img src="{{URL::asset('/images/galeria/_DSC9507.JPG')}}" class="img-responsive" alt="" >
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