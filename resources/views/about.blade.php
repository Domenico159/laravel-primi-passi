<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tecno-Dom</title>
        {{-- Icon --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

            main i{
                font-size:50px; 
                margin-right: 15px;
                cursor: pointer;
                transition: transform 0.3s,
                border 0.3s;
            }

            main i:hover{
                transform: scale(1.1);
                border-bottom: 2px solid #000;
            }

            .full-height {
                min-height: 100vh;
                max-width: 1100px;
                margin: 0 auto;
            }

            .flex-center {
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
    <body class="full-height">
        <div class="flex-center position-ref">
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
                    About
                </div>

                <div class="links">
                    <a href="/galleria">Galleria</a>
                    <a href="/contatti">Contatti</a>
                    <a href="/">Home</a>
                </div>
            </div>
        </div>

        {{-- main --}}

        <main>
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint commodi</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia suscipit officia corporis commodi quasi pariatur a ipsam sequi hic fuga nesciunt, distinctio earum beatae illum ipsum esse aliquam? Quis?</p>
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint commodi</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia suscipit officia corporis commodi quasi pariatur a ipsam sequi hic fuga nesciunt, distinctio earum beatae illum ipsum esse aliquam? Quis?</p>
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint commodi</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia suscipit officia corporis commodi quasi pariatur a ipsam sequi hic fuga nesciunt, distinctio earum beatae illum ipsum esse aliquam? Quis?</p>
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint commodi</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia suscipit officia corporis commodi quasi pariatur a ipsam sequi hic fuga nesciunt, distinctio earum beatae illum ipsum esse aliquam? Quis?</p>
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint commodi</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia suscipit officia corporis commodi quasi pariatur a ipsam sequi hic fuga nesciunt, distinctio earum beatae illum ipsum esse aliquam? Quis?</p>
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint commodi</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore mollitia suscipit officia corporis commodi quasi pariatur a ipsam sequi hic fuga nesciunt, distinctio earum beatae illum ipsum esse aliquam? Quis?</p>
        </main>
    </body>
</html>
