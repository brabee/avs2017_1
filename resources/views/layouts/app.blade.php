<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Bootstrap -->

	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.1/dist/bootstrap-float-label.min.css'>

	<!-- Scripts - ajax/jquery - zo servera-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Styles - pekne tlacidla CheckBox, floating labels vo formulari-->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Styles povodne stylovanie app.blade.php-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Styles - jquery - UI - DatePicker - lokalne css + skripty -->
	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.css') }}">

	<!-- Styles - jquery - FlexDatalist - lokalne  css -->
	<link rel="stylesheet" href="{{ asset('jquery-flexdatalist-1.9.4/jquery.flexdatalist.css') }}">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

	<!-- Scripts - povodne scripty-->
	<script src="{{ asset('js/app.js') }}"></script>

	<!-- Scripts - jquery lokalne skripty -->
	<script src="{{ asset('js/jquery-1.12.4.js') }}"></script>

	<!-- Scripts + Styles - jquery - UI - DatePicker - lokalne  skripty -->
	<script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>

	<!-- Scripts - jquery - FlexDatalist - lokalne skripty -->
	<script src="{{ asset('jquery-flexdatalist-1.9.4/jquery.flexdatalist.js') }}"></script>


	<!-- Scripts- schovavanie a zviditelnovanie labelova containerov od kliknutia CheckBox -->
	<script src="{{ asset('js/script.js') }}"></script>

	<!-- Scripts - DatePickery -->
	<script type="text/javascript">

		//DatePicker - kalendarik pre datum predaja vyrobku
		$( function() {
			$( "#vyrobok_dat_predaja" ).datepicker();
		} );

		//DatePicker - kalendarik pre datum prijmu zakazky
		$( function() {
			$( "#datum_prijmu" ).datepicker();
		} );

		//DatePicker - kalendarik pre datum opravy zakazky
		$( function() {
			$( "#bude_opravene" ).datepicker();
		} );
	</script>




</head>
<body onload="nastaveniaOnLoad ()">
    <div id="app" style="background-color: #7d7d7d;">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container" style="background-color: #bc31f0">
                <div class="navbar-header" style="background-color: #f0c2dd">

                    <!-- Collapsed Hamburger -->
                    <!-- button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" >
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button-->

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- config('app.name', 'Laravel') --}}
	                    AV Servis
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" style="background-color: #0bd2f0;">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left" >
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="background-color: #f0cd4a;">
                        <!-- Authentication Links -->

                        {{-- @if (Auth::guest())
                            <!--li><a href="{{ route('login') }}">Prihlásenie</a></li-->
                            <!--li><a href="{{ route('register') }}">Registrácia</a></li-->
                        @else --}}

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                                <span><img src="images/avatar2.png" width="42" height="42"></span>
	                                {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" role="menu"> 
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Odhlásenie
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        {{-- @endif --}}
                    </ul>
                </div>
            </div>
        </nav>

	    <!--   yielduje "prijem.blade", ... -->
        @yield('content')
    </div>

    <!-- Scripts - priradenie id podla odkliknuteho zaznamu v FlexDatalist -->
    <!-- http://projects.sergiodinislopes.pt/flexdatalist/ -->
    
    @include('javascripts1')

    

</body>
</html>
