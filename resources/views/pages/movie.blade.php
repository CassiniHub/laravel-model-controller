@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>
            Movie:
            Id: {{ $movie -> id }}  <br>
            Title: {{ $movie -> title }} <br>
            Original Title: {{ $movie -> original_title }} <br>
            Nationality: {{ $movie -> nationality }} <br>
            Date: {{ $movie -> date }} <br>
            Vote: {{ $movie -> vote }} <br>
        </h1>
    </main>
@endsection