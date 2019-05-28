@extends('layouts.master')

@section('title', 'List of movies')

@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li><a href=" {{ '/movies/' . $movie->id}}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
@endsection