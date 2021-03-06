@extends('layouts.master')

@section('title', 'Create movie')

@section('content')
    <h2 class='blog-post-title'>Create new movie</h2>

    <form method="POST" action="{{ route('store-movie' ) }}">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            @include('movies.partials.error-message', ['fieldTitle' => 'title'])
        </div>

        <div class="form-group">
            <label for="title">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre">
            @include('movies.partials.error-message', ['fieldTitle' => 'title'])
        </div>

        <div class="form-group">
            <label for="title">Director</label>
            <input type="text" class="form-control" id="director" name="director">
            @include('movies.partials.error-message', ['fieldTitle' => 'title'])
        </div>

        <div class="form-group">
            <label for="title">Year</label>
            <input type="text" class="form-control" id="year" name="year">
            @include('movies.partials.error-message', ['fieldTitle' => 'title'])
        </div>

        <div class="form-group">
            <label for="title">Storyline</label>
            <input type="text" class="form-control" id="storyline" name="storyline">
            @include('movies.partials.error-message', ['fieldTitle' => 'title'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Movie</button>
        </div>

    </form>
@endsection