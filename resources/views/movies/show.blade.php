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
                <p>{{ $comment->created_at  }}</p>
            </li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('comments-movie', ['movie_id' => $movie->id]) }}">
        @csrf

        <div class="form-group">
            <label for="content"> Content </label>
            <input type="text" id="content" name="content">
        </div>

        <div class="form-group">
            <button type="submit">Submit</button>

        </div>

    </form>
@endsection
