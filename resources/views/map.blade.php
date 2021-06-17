<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello world</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="links">
            <a href="{{route('home')}}"> HOME </a>
        </div>
    </header>
    <div class="flex-center position-ref full-height">
    <img src="{{asset('img/map.png')}}" alt="">
    </div>
</body>

</html>