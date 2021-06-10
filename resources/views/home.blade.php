@extends('layouts.app')
@section('main_content')
@include('components.covid', [
    'top' => '10px',
    'left' => '50%'
])
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
@endsection