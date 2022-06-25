<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            html,body{
                background-image: url('{{ asset('img/walpaper.jpg') }}');
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                background-size: 100%;
                color: #000000;
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
                color: #1974D2;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                font-size:70px;
                font-weight: bold;
                border-style:solid;
                color:#1974D2;
                margin-bottom: 30px;
            }
            
            
        </style>
    </head>
    <body>
        

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                <a class="w3-bar-item w3-btn bar-item-hover w3-right" style="display: inline; width: 130px; background-color: rgb(4, 170, 109); color: white; border-radius: 25px;" href="{{ url('/login') }}" target="_self">Log in</a>
                <a class="w3-bar-item w3-btn bar-item-hover w3-right" style="display: inline; width: 130px; background-color: rgb(4, 170, 109); color: white; border-radius: 25px;" href="{{ url('/register') }}" target="_self">Register</a>
                   
                    
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ABSENSI ONLINE
                </div>

                <div class="links">
                    <a>ABSENSI</a>
                </div>
            </div>
        </div>
    </body>
</html>
