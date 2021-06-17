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
            <a href="{{route('links')}}"> Links </a>
            <a href="{{route('map')}}"> MAP </a>
        </div>
    </header>
    <div class="">
        <form action="" class="padding">
            <div> <label for="name"> Name <br> <input type="text" name="name"></label> </div>
            <div> <label for="Surname"> Cognome <br> <input type="text" name="surname"></label> </div>
            <div> <label for="email"> Email <br> <input type="text" name="email"></label> </div>
            <div> <label for="name"> Messaggio <br> <input type="text-area" name="message" rows="4" cols="50"></label> </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>