@extends('layouts._master')

@section ('content')
    <div class="imgSomos img-responsive">
        <!--div class="azulHotel"-->
        <div class="container hidden-xs hidden-sm">
            <div class="row">
                <!--h2 class="fontBold center">Conócenos</h2-->
                <!--div class="col-lg-12 conocenos-info"-->
                <!--h1>Hotel Plaza Kokai</h1-->
                <br>
                <br>
                <br>
                <br>

                <br>
                <br>
                <br>
                <br>
                <!--/div-->
            </div>
        </div>
    </div>
    @include('somos.somosAux')
    <div>
        <div class="container">
            <div class="row azulHotel1">
                <div class="col-md-4">
                    <p><br></p>
                    <p class="fontBold center font120">
                        Contamos con 32 años ofreciendo servicio de calidad, somos su mejor opción en el Caribe Mexicano.
                    </p>
                </div>
                <div class="col-md-4 center">
                    <p><br></p>
                    <p class="fontBold center font120">
                        Situado estratégicamente en el centro de Cancún a solo 200 metros de la terminal de autobuses ADO y a menos de 500 metros de Puerto Cancún y su extenso centro comercial.
                    </p>
                <!--p><br></p>
                <p><br></p>
                <img src="{{URL::asset('/images/fachada.jpg')}}" class="img-responsive center" alt="" border="5"-->
                </div>
                <div class="col-md-4">
                    <p><br></p>
                    <p class="fontBold center font120">
                        Lo invitamos a que conozca Cancún en nuestras instalaciones completamente renovadas, a un gran precio y con el mejor servicio.
                    </p>
                    <p><br></p>
                </div>
            </div>

        </div>
    </div>
@stop