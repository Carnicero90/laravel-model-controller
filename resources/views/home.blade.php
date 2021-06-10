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
                        <span class="vote"
                            style="background-image: linear-gradient(to right, #dad61b {{ $movie['vote'] * 10 }}%, #fdfdfd 10% )">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
