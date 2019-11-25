<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		@yield ('title', 'Hotel Plaza Kokai')
	</title>

    @stack('head')

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<link href='{{URL::asset('/css/generico.css')}}' type='text/css' rel='stylesheet'>
	<link href='{{URL::asset('/css/style.css')}}' type='text/css' rel='stylesheet'>
	<link href='{{URL::asset('/css/galeria.css')}}' type='text/css' rel='stylesheet'>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <meta name="keywords" content="Hotel Plaza Kokai, Hotel Kokai Cancun, Hotel Plaza, Hotel Kokai, Kokai, Hotel Cancún, Hotel Plaza Kokai Cancun">
    <meta name="description" content="En Hotel Plaza Kokai.">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
	<script src="{{URL::asset('/css/Bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="https://live.ipms247.com/booking/templates/resui/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://live.ipms247.com/booking/templates/resui/js/vendor/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="https://live.ipms247.com/booking/templates/resui/build/js/resplugin.js" type="text/javascript"></script>
    <script src="https://live.ipms247.com/booking/templates/resui/build/js/pluginscript.js"></script>




</head>
<body>
<div class="container-fluid">
    <header class="white">
        <div class="container center">
            <div class="row font50">
                <br>
			</div>
        </div>
    </header>

    @if(session('message'))
        <!--div class='alert'>{{ session('message') }}</div-->
    @endif
    <div class="center white">
        @if (Auth::check())
            @include('layouts.menu')
        @endif
		@include('layouts.menu')
        @include('layouts.message')
    </div>

	<section>

            @yield('content')

    </section>
</div>


	@stack('body')
    <script>
        (
            function(a,t,b,c,d){
                c=a.createElement(t);
                c.src=b,c.defer=true,c.async=true,c.crossOrigin='anonymous';
                c.type="text/javascript";
                d=a.getElementsByTagName(t)[0];
                d.parentNode.insertBefore(c,d)
            }
        )
        (document,"script","https://onboard.triptease.io/bootstrap.js?integrationId=01DSZJCR0BDZ41VRZJK8PKTHGC");
    </script>
</body>

<footer class="footer" >
    @include('layouts.booking-footer')
    <div class="white">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                </div>
                <div class="col-md-1 font50 center">
                    <br>
                    <!--a href="/"><img src="{{URL::asset('/images/LOGOS/logo.png')}}" class="img-responsive" alt="" ></a-->
                </div>
            </div>
        </div>
    </div>
    <div class="white">
        <div class="container">
            <div class=" row white">
                <img src="{{URL::asset('/images/kokaihotel_piedepagina.png')}}" alt="" class="img-responsive">
            </div>
        </div>
    </div>
    <div class="center">
        <div class="footer2 col-lg-6 col-md-6 col-sm-6 col-6">
            <p>Hotel Plaza Kokai © 2019</p>
        </div>
        <div class="footer2 col-lg-6 col-md-6 col-sm-6 col-6">
            <p class="footer-right">Powered by <a href="https://www.kokaiweb.com/" target="_blank">Kokai Web</a></p>
        </div>
    </div>
    @yield('footer') <!--Adding footer- ->
</footer>

</html>