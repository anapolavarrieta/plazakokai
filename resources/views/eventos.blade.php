@extends('layouts._master')

@section ('content')
<div class="container">
    <div class"row">
        <div class="col-md-12">
            <br>
        </div>
    </div>
    <div class"row">
       <div class="containerServ col-md-0">
       </div>
       <div class="containerServ col-md-6">
            <div class="parent">
                <img src="{{URL::asset('/images/teleton_diciembre_2018.jpg')}}" class="img-responsive image1" alt="" >
            </div>
        </div>
       <div class="containerServ col-md-6">
            <div class="parent">
                <img src="{{URL::asset('/images/año_nuevo_2018.png')}}" class="img-responsive image1" alt="" >
            </div>
        </div>
       <div class="containerServ col-md-0">
        </div>
    </div>
    <div class"row">
        <div class="col-md-12">
            <br>
        </div>
    </div>
</div>
@stop