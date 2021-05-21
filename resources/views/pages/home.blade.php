@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>
            Movies:
        </h1>

        <ul>
            @foreach ($movies as $movie)
                <li>
                    [{{ $movie -> id }}]
                    {{ $movie -> title }}
                </li>
            @endforeach
        </ul>
    </main>
@endsection