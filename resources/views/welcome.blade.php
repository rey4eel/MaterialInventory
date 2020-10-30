<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Inventory</title>
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}

    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div>
                    <img src="images\inventory-icon.png" width="300" height="300" alt="inventory" >
                </div>
                <div class=" font m-b-md">
                    <h1 class="medium_font">Inventory manager</h1>
                </div>

                <div class="fixed-bottom links">
                    @if (Route::has('login'))

                        @auth
                            <a href="{{ url('/admin') }}">User Page</a>
                        @else
                            <div class="links">
                            <a href="{{ route('login') }}">Login</a>
                            </div>
                            <a href="{{ route('register') }}">Want to Register?</a>
                        @endauth
                    @endif
                </div>

            </div>
        </div>
    </body>
</html>
