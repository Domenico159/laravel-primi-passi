<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tecno-Dom</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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

            main{
                display: flex;
                flex-wrap:wrap; 
            }

            .card{
                height: 300px;
                width: calc(100% / 4 - 40px);
                margin:  40px 20px;
                background: red;
                overflow: hidden;
                border-radius:30px; 
                transition: transform 0.3s;
                cursor: pointer;
            }
            img{
                max-width: 100%;
                object-fit: cover;
                height: 100%;
            }

            .card:hover{
                transform: scale(1.1);
            }

            .full-height {
                height: 100vh;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref ">
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
                    Galleria
                </div>

                <div class="links">
                    <a href="/about">About</a>
                    <a href="/contatti">Contatti</a>
                    <a href="/">Home</a>
                </div>
            </div>
        </div>
        {{-- Main --}}

        <main>
            <div class="card">
                <img src="https://www.nextplayer.it/wp-content/uploads/2020/08/Vh6eSp4siwggK7RUys72nP.jpg" alt="">
            </div>
            <div class="card">
                <img src="https://www.corriere.it/methode_image/2020/11/04/Tecnologia/Foto%20Tecnologia%20-%20Trattate/xbox-series-x-ktNI--656x492@Corriere-Web-Sezioni.jpg" alt="">
            </div>
            <div class="card">
                <img src="https://i.ytimg.com/vi/SGK0asyRUyg/maxresdefault.jpg" alt="">
            </div>
            <div class="card">
                <img src="https://www.annoonci.it/adpics_new/48ae0de23e71fbc0268491e11bf4e3ea.jpg" alt="">
            </div>
            <div class="card">
                <img src="https://www.annoonci.it/adpics_new/48ae0de23e71fbc0268491e11bf4e3ea.jpg" alt="">
            </div>
            <div class="card">
                <img src="https://images.everyeye.it/img-articoli/nvidia-rtx-3090-recensione-punto-d-incontro-gaming-produttivita-recensione-v10-50458-1280x16.jpg" alt="">
            </div>
            <div class="card">
                <img src="https://www.tadanstore.it/presta17/147-medium_default/mb-intel-asus-rog-strix-z390-e-gaming-skt-1151-v2.jpg" alt="">
            </div>
            <div class="card">
                <img src="https://www.hwupgrade.it/articoli/5723/448.jpg" alt="">
            </div>
        </main>

    </body>
</html>
