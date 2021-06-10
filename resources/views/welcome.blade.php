<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">


        <title>Bozza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <ul>
            @foreach ($movies as $movie)
            <li class="movie">
                <ul>
                    <li>{{ $movie['original_title'] }}</li>
                    <li>{{ $movie['title'] }} </li>
                    <li>{{ $movie['vote'] }}</li>
                </ul>
            </li>
                
            @endforeach

        </ul>
    </body>
</html>
