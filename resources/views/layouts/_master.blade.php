


<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		@yield ('title', 'Plaza Kokai')
	</title>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='{{URL::asset('/css/generico.css')}}' type='text/css' rel='stylesheet'>
	<link href='{{URL::asset('/css/style.css')}}' type='text/css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
	<script src="{{URL::asset('/css/Bootstrap/js/bootstrap.min.js')}}"></script>

	@stack('head')
</head>
<body>
<div class="container">
    <header class="black">
        <div class="container center">
            <div class="row">
                <br>
			</div>
        </div>
    </header>

    @if(session('message'))
        <!--div class='alert'>{{ session('message') }}</div-->
    @endif
    <div class="center">
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

</body>
<footer class="footer" >
    <div class="black">

        <div class="container">
            <div class="row">
                <div class="col-md-11">
                </div>
                <div class="col-md-1 font150 center">
                    <a href="/">Inicio</a>
                </div>
            </div>
        </div>

    </div>
    <div class="black">
        <div class="container">
            <div class="white">
                <img src="{{URL::asset('/images/kokaihotel_piedepagina.png')}}" alt="" class="img-responsive">
            </div>
        </div>
    </div>
    @yield('footer') <!--Adding footer- ->
</footer>

</html>
