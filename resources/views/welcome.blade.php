<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            @media(max-width:767px){
              .title{
                font-size: 60px;
              }
              .links a{
                display: block;
                padding-bottom: 20px;
              }
            }


            .m-b-md {
                margin-bottom: 30px;
            }
            a{
              color: #fff;
              font-weight: bold;
            }
            a:hover,a:focus{
              color: #e4e4e4;
            }
            body{
              background: #0b3d66;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <b style="color:#fff;">CEBUANA</b> <b style="color:#e12522;">LHUILLIER</b>
                </div>

                <div class="links">
                    <a style="text-decoration: underline;font-size:30px" href="/covid">COVID-19 Report</a>

                    <!-- Remove afterwards -->
                    <!-- <a href="/tables">Table</a> -->
                    <!-- Remove afterwards -->
                </div>
            </div>
        </div>
    </body>
</html>
