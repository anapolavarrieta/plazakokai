<div class="navbar navbar-default center white" role="navigation" id="navigation">
    <div class="navbar-header white">
        <div class="col-xs-2 navbar-brand hidden-sm hidden-md hidden-lg hidden-xl">
            <a href="/">
                <img src="{{URL::asset('/images/LOGOS/logo.png')}}" alt="Hotel Plaza Kokai" title="Hotel Plaza Kokai" class="img-responsive">
            </a>
        </div>

         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse center white">
        <ul class="nav navbar-nav navbar-left">
            <li class="menu center">
                <div class="row">
                    <div class="col-sm-1 col-md-3 hidden-xs">
                        <a href="/">
                            <!--img class="logo" src="{{URL::asset('/images/LOGOS/logoBN2.png')}}" class="img-responsive" alt="" -->
                            <img src="{{URL::asset('/images/LOGOS/logo.png')}}" alt="Hotel Plaza Kokai" title="Hotel Plaza Kokai">
                        </a>
                    </div>
                </div>
             </li>
        </ul>
        <ul class="nav navbar-nav center">
            <!--li class="dropdown" id="menu">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Configuraciones
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/elementos">Precios Unitarios</a></li>
                </ul>
            </li-->
            <li class="menu">
                <br>
                <a href="/somos">Conócenos</a>
            </li>
            <li class="menu">
                <br>
                <a href="/habitaciones">Habitaciones</a>
            </li>
            <li class="menu">
                <br>
                <a href="/servicios">Servicios</a>
            </li>
            <li class="menu">
                <br>
                <a href="/eventos">Eventos</a>
            </li>
            <li class="menu">
                <br>
                <a href="/traslados">Traslados</a>
            </li>
             <li class="menu">
                <br>
                <a href="/contacto">Contacto</a>
            </li>
             <li class="menu">
                <br>
                <a href="/galeria">Galería</a>
            </li>


        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <li class="menu">
                <!--a href="/tarifas"><img src="{{URL::asset('/images/kokaihotel__pp_boton_tarifasrojo_sm.png')}}" alt="" class=""></a-->
                <!--a href="http://live.ipms247.com/booking/book-rooms-hotelplazakokaicancun"><img src="{{URL::asset('/images/kokaihotel__pp_boton_tarifasrojo_sm.png')}}" alt="" class=""></a-->
                <a href="/reservaciones"><img src="{{URL::asset('/images/kokaihotel__pp_boton_tarifasrojo_sm.png')}}" alt="" class=""></a>
            </li>
        </ul>
    </div>
</div>