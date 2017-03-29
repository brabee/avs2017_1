<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link href="css/overwrite.css" rel="stylesheet"/>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>AV Servis</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
	            background-color: #213ba4;
	            background-image: url("images/sun.jpg");
	            color: #bce8f1;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                /* color: #636b6f; */
	            color: #ebcccc;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

	        .modal-header {
		        font-family: Arial;
		        background-color: #53709c;
		        color: #ffffff;
	        }

            form {
	            font-family: Arial;
	            color: #868686;
            }

            .nav-tabs {
	            margin-bottom: 15px;
	            font-family: Arial;
            }
            .sign-with {
	            margin-top: 25px;
	            padding: 20px;
            }

        </style>


	    {{--
foreach ( Route::getRotes() as $route )
{
echo "<pre>";
print_r( $route->getPath() );
echo "</pre>";
}
--}}


    </head>
    <body>


    @yield('content')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/zakazky') }}">Zákazky</a>
                    @else
		                <!--a href="#" data-toggle="modal" data-target="#loginModal">Prihlásenie</a-->
		                <!--a href="#" data-toggle="modal" data-target="#registerModal">Registrácia</a-->
		                <a href="#" data-toggle="modal" data-target="#myModal">Prihlásenie do zákazok</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Vítaj na intranete AV Servis.
                </div>
            </div>
        </div>
    </body>
</html>
