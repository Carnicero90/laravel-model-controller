<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    {{-- font Nunito --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    {{-- local stylesheet --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Bozza</title>
</head>

<body>
    <div class="wrapper flexer col">
        @include('partials.header')
        <main class="grower">
            @yield('main_content')
        </main>
        @include('partials.footer')
    </div>
</body>

</html>
