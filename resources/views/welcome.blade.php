<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <title>Bozza</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <h2>Programmazione serale</h2>
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Titolo Originale</th>
                    <th>Voto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>
                            {{ $movie['original_title'] }}
                        </td>
                        <td>
                            {{ $movie['title'] }}
                        </td>
                        <td>
                            {{ $movie['vote'] }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
</body>

</html>
