@extends('layouts.master')

@section('title', 'Movie')

@section('content')
    <body>
        <h1>{{ $movie->title}}</h1>
        <h3>{{ $movie->genre}}</h3>
        <h2>{{ $movie->director}}</h2>
        <h3>{{ $movie->year}}</h3>
        <h3>{{ $movie->storyline}}</h3>
    </body>
@endsection
