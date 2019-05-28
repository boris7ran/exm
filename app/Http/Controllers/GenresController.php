<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Controllers\MoviesController;

class GenresController extends Controller
{
    public function show($genres)
    {
        $movies = Movie::where('genre', $genres)->get();
        $lastFive = MoviesController::lastFiveAdded();
        return view('genres.index', compact('movies', 'lastFive'));
    }
}
