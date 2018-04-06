@extends('layouts._master')

@section ('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

          <!-- Contenedor de los Slide -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{URL::asset('/images/kokaihotel_pp_banner1.png')}}" class="img-responsive" alt="" >
            </div>
            <div class="item">
                <img src="{{URL::asset('/images/kokaihotel_pp_banner2.png')}}" alt="" class="img-responsive">
            </div>
            <div class="item">
                <img src="{{URL::asset('/images/kokaihotel_pp_banner3.png')}}" alt="" class="img-responsive">
            </div>
            <div class="item">
                <img src="{{URL::asset('/images/kokaihotel_pp_banner4.png')}}" alt="" class="img-responsive">
            </div>
            <div class="item white">
                 <img src="{{URL::asset('/images/kokaihotel_pp_banner5.png')}}" alt="" class="img-responsive">
            </div>

        </div>

          <!-- Controloles -->
          <a class="left carousel-control" href="#mi-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#mi-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente hidden-xs hidden-sd</span>
          </a>
    </div>
@stop