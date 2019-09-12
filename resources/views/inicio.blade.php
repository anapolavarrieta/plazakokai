@extends('layouts._master')

@section ('content')
<div class="container">
    <div class="row white font50">
        <br>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

          <!-- Contenedor de los Slide -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner11.jpg')}}" class="img-responsive" alt="" >
            </div>
            <div class="item">
                 <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner12.jpg')}}" alt="Hotel Plaza Kokai" class="img-responsive">
                 <!--div class="carousel-caption d-none d-md-block">
                    <h3>El mejor hotel</h3>
                    <p>en el centro de Cancún</p>
                </div-->
            </div>
            <!--div class="item">
                <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner2.png')}}" alt="" class="img-responsive">
            </div-->
            <!--div class="item">
                <img src="{{URL::asset('/images/faroPrincipal.JPG')}}" alt="" class="img-responsive">
            </div-->
            <!--div class="item">
                 <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner8.png')}}" alt="Hotel Plaza Kokai" class="img-responsive">
            </div-->
            <!--div class="item">
                <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner3.png')}}" alt="" class="img-responsive">
            </div-->
            <div class="item white">
                 <img src="{{URL::asset('/images/BANNERS_INICIO/obten_desayuno.png')}}" alt="" class="img-responsive">
            </div>
            <div class="item white">
                 <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner9.png')}}" alt="" class="img-responsive">
            </div>


            <div class="item">
                 <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner7.png')}}" alt="Hotel Plaza Kokai" class="img-responsive">
            </div>
            <div class="item">
                <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner4.png')}}" alt="" class="img-responsive">
            </div>
            <div class="item white">
                 <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner5.png')}}" alt="" class="img-responsive">
            </div>
            <div class="item white">
                 <img src="{{URL::asset('/images/ROOF/roof7b.jpg')}}" alt="" class="img-responsive">
            </div>
            <div class="item white">
                 <img src="{{URL::asset('/images/BANNERS_INICIO/kokaihotel_pp_banner10.png')}}" alt="" class="img-responsive">
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
</div>
@stop