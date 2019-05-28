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
    @if(count($movie->comments))
        <h4> Comments </h4>

        <ul class="list-group">
            @foreach ($movie->comments as $comment)            
            <li class="list-group-item"> 
                <p>{{ $comment->content }} </p>
            </li>
            @endforeach
        </ul>
    @endif
@endsection
