<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8 black">
        <div class="row center font100">
            <h3 class="fontBold">
                Habitación Estandard
            </h3>
        </div>

        <div class="row center font100">
            2 Camas Matrimoniales o 1 Cama King Size [19 m<sup>2</sup>]
        </div>
        <div class="row center font50">
            <br>
        </div>
        <div class="row center font120">
            <div class="hidden-sm hidden-xs col-md-2 col-lg-2"></div>
            <div class="col-xs-1 col-sm-1 hidden-md hidden-lg"></div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/aire.png')}}" class="img-responsive" title="Aire Acondicionado" >
                <!--div class="col-xs-1 col-sm-1 hidden-md hidden-lg font50">Aire Acondicionado</div-->
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/regadera.jpg')}}" class="img-responsive" title="Regadera" >
                <!--div class="col-xs-1 col-sm-1 hidden-md hidden-lg font50">Regadera</div-->
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/cable.jpg')}}" class="img-responsive" title="Televisión con Cable" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/elevador.jpg')}}" class="img-responsive" title="Elevador" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/servicioHabitacion.jpg')}}" class="img-responsive" title="Servicio a la Habitación" >
            </div>
            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg"></div>
            <div class="col-xs-0 col-sm-0 hidden-md hidden-lg"><br><br><br></div>
            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg"></div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/internet.jpg')}}" class="img-responsive" title="WiFi" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/cajaFuerte.jpg')}}" class="img-responsive iconoHab" title="Caja Fuerte" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/minusvalidos.jpg')}}" class="img-responsive" title="Facilidades para gente con capacidades diferentes." >
            </div>
            <div class="hidden-md hidden-lg col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/telefono.jpg')}}" class="img-responsive" title="Llamadas locales ilimitadas" >
            </div>
        </div>
        <div class="row center font120">
            <div class="hidden-sm hidden-xs col-md-3 col-lg-3"></div>
            <div class="col-xs-1 col-sm-1 hidden-md hidden-lg"></div>
            <div class="col-md-1 hidden-sm hidden-xs">
                <img src="{{URL::asset('/images/Iconos/telefono.jpg')}}" class="img-responsive" title="Llamadas locales ilimitadas" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/secadora.png')}}" class="img-responsive" title="Secadora de Pelo" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/nofumar.jpg')}}" class="img-responsive" title="Habitación libre de humo" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/escritorio.jpg')}}" class="img-responsive iconoHab" title="Mesa con sillas" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/ServicioLavanderia.jpg')}}" class="img-responsive iconoHab" title="Servicio de Lavandería" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/bellboy.jpg')}}" class="img-responsive iconoHab" title="Bell Boy" >
            </div>
        </div>
        <div class="row font30">
            <br>
        </div>
        <div class="row font100">
            <br>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="hidden-xs hidden-md hidden-lg hidden-xl">
            <br>
        </div>
        <div class="hidden-md hidden-lg hidden-xl">
            <br>
        </div>
        @include('habitaciones.estandard')
    </div>
</div>
<div class="row">
    <br>
</div>
<div class="row">
    <div class="hidden-xs col-sm-6 col-md-4">
        <div class="hidden-md hidden-lg hidden-xl">
            <br>
            <br>
            <br>
        </div>
        @include('habitaciones.superiorVista')
    </div>
    <div class="col-xs-12 col-sm-6 col-md-8 black">
        <div class="row center font100">
            <h3 class="fontBold">
                Superior con Vista
            </h3>
        </div>
        <div class="row center font100">
            2 Camas Matrimoniales (max. 4 <i class="glyphicon glyphicon-user black"></i>) o 1 Cama King Size (max. 2 <i class="glyphicon glyphicon-user black"></i>)
        </div>
        <div class="row center font50">
            <br>
        </div>
        <div class="row center font120">
            <div class="col-xs-0 col-sm-0 hidden-md hidden-lg"></div>
            <div class="col-lg-2 col-md-1 hidden-xs hidden-sm"></div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/cafe.jpg')}}" class="img-responsive iconoHab" title="Café">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/aire.png')}}" class="img-responsive" title="Aire Acondicionado" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/regadera.jpg')}}" class="img-responsive" title="Regadera" >
            </div>
        <!--div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/tina.jpg')}}" class="img-responsive iconoHab" title="Tina de Hidromasaje" >
                </div-->
        <!--div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/sala.jpg')}}" class="img-responsive iconoHab" title="Sala - Sofa Cama" >
                </div-->
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/escritorio.jpg')}}" class="img-responsive iconoHab" title="Mesa con sillas" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/cable.jpg')}}" class="img-responsive" title="Televisión con Cable" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/elevador.jpg')}}" class="img-responsive" title="Elevador" >
            </div>
            <div class="col-xs-0 col-sm-0 hidden-md hidden-lg"><br><br><br></div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/servicioHabitacion.jpg')}}" class="img-responsive" title="Servicio a la Habitación" >
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/cajaFuerte.jpg')}}" class="img-responsive iconoHab" title="Caja Fuerte" >
            </div>
            <div class="col-lg-0 col-md-0 hidden-xs hidden-sm">
                <br><br></div>
            <div class="col-lg-2 col-md-2 hidden-xs hidden-sm">
                <br><br></div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/internet.jpg')}}" class="img-responsive" title="WiFi" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/telefono.jpg')}}" class="img-responsive" title="Llamadas locales ilimitadas" >
            </div>
            <div class="hidden-lg hidden-md col-sm-0 col-xs-0"><br></div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/ServicioLavanderia.jpg')}}" class="img-responsive iconoHab" title="Servicio de Lavandería" >
            </div>

            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/bellboy.jpg')}}" class="img-responsive iconoHab" title="Bell Boy" >
            </div>
            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg"><br><br><br></div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/minibar.jpg')}}" class="img-responsive iconoHab" title="Mini Bar">
            </div>

            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/minusvalidos.jpg')}}" class="img-responsive" title="Facilidades para gente con capacidades diferentes." >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/nofumar.jpg')}}" class="img-responsive" title="Habitación libre de humo" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/secadora.png')}}" class="img-responsive" title="Secadora de Pelo" >
            </div>
        </div>
        <div class="row white font30">
            <br>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 hidden-sm hidden-md hidden-lg hidden-xl">
        <div class="hidden-xs hidden-md hidden-lg hidden-xl">
            <br>
        </div>
        <div class="hidden-md hidden-lg hidden-xl">
            <br>
            <br>
        </div>
        @include('habitaciones.superiorVista')
    </div>
</div>

<div class="row white">
    <br>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8 black">
        <div class="row center font100">
            <h3 class="fontBold">
                Junior Suite
            </h3>
        </div>
        <div class="row center font100">
            Cama King Size y Sofá Cama (max. 4 <i class="glyphicon glyphicon-user black"></i>)  [32 m<sup>2</sup>]
        </div>
        <div class="row center font50">
            <br>
        </div>
        <div class="row center font120">
            <div class="col-xs-0 col-sm-0 hidden-md hidden-lg"></div>
            <div class="col-lg-1 col-md-1 hidden-xs hidden-sm"></div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/cafe.jpg')}}" class="img-responsive iconoHab" title="Café">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/aire.png')}}" class="img-responsive" title="Aire Acondicionado" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/regadera.jpg')}}" class="img-responsive" title="Regadera" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/tina.jpg')}}" class="img-responsive iconoHab" title="Tina de Hidromasaje" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/sala.jpg')}}" class="img-responsive iconoHab" title="Sala - Sofa Cama" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/cable.jpg')}}" class="img-responsive" title="Televisión con Cable" >
            </div>
            <div class="col-xs-0 col-sm-0 hidden-md hidden-lg"><br><br><br></div>

            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/elevador.jpg')}}" class="img-responsive" title="Elevador" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/servicioHabitacion.jpg')}}" class="img-responsive" title="Servicio a la Habitación" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/escritorio.jpg')}}" class="img-responsive iconoHab" title="Mesa con sillas" >
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/cajaFuerte.jpg')}}" class="img-responsive iconoHab" title="Caja Fuerte" >
            </div>
            <div class="col-lg-0 col-md-0 hidden-xs hidden-sm">
                <br><br></div>
            <div class="col-lg-2 col-md-2 hidden-xs hidden-sm">
                <br><br></div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/internet.jpg')}}" class="img-responsive" title="WiFi" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/telefono.jpg')}}" class="img-responsive" title="Llamadas locales ilimitadas" >
            </div>
            <div class="hidden-lg hidden-md col-sm-0 col-xs-0"><br></div>
            <div class="col-xs-0 col-sm-0 hidden-md hidden-lg"><br><br><br></div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/ServicioLavanderia.jpg')}}" class="img-responsive iconoHab" title="Servicio de Lavandería" >
            </div>

            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/bellboy.jpg')}}" class="img-responsive iconoHab" title="Bell Boy" >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/minibar.jpg')}}" class="img-responsive iconoHab" title="Mini Bar">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/minusvalidos.jpg')}}" class="img-responsive" title="Facilidades para gente con capacidades diferentes." >
            </div>
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/nofumar.jpg')}}" class="img-responsive" title="Habitación libre de humo" >
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <img src="{{URL::asset('/images/Iconos/secadora.png')}}" class="img-responsive" title="Secadora de Pelo" >
            </div>
        </div>
        <div class="row font30">
            <br>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">

        <div class="hidden-xs hidden-md hidden-lg hidden-xl">
            <br>
        </div>
        <div class="hidden-md hidden-lg hidden-xl">
            <br>
            <br>
        </div>
        @include('habitaciones.suite')
    </div>
</div>
<!--div class="row">
         <div class="col-md-4">
                @ include('habitaciones.ph')
        </div>
        <div class="col-md-8 black">
            <div class="row center font100">
                <h3 class="fontBold">
                    Pent-House
                </h3>
            </div>
            <div class="row center font100">
                 2 Habitaciones | 2 Baños | 2 Sofás Camas (max. 8 <i class="glyphicon glyphicon-user black"></i>)  [289 m<sup>2</sup>]
            </div>
            <div class="row center font50">
            <br>
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
                    <img src="{{URL::asset('/images/Iconos/aire.png')}}" class="img-responsive" title="Aire Acondicionado" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/regadera.jpg')}}" class="img-responsive" title="Regadera" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/cable.jpg')}}" class="img-responsive" title="Televisión con Cable" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/elevador.jpg')}}" class="img-responsive" title="Elevador" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/servicioHabitacion.jpg')}}" class="img-responsive" title="Servicio a la Habitación" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                     <img src="{{URL::asset('/images/Iconos/internet.jpg')}}" class="img-responsive" title="WiFi" >
                </div>
                <div class="hidden-lg hidden-md col-sm-2 col-xs-2"></div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/telefono.jpg')}}" class="img-responsive" title="Llamadas locales ilimitadas" >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/cafe.jpg')}}" class="img-responsive iconoHab" title="Mini Bar">
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/minusvalidos.jpg')}}" class="img-responsive" title="Facilidades para gente con capacidades diferentes." >
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2">
                    <img src="{{URL::asset('/images/Iconos/nofumar.jpg')}}" class="img-responsive" title="Habitación libre de humo" >
                </div>
            </div>
            <div class="row font30">
                <br>
            </div>
        </div>
    </div-->
<div class="row">
    <br>
</div>