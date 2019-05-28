<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    public function show($genres)
    {
        $movies = Movie::where('genre', $genres)->get();
        return view('genres.index', compact('movies'));
    }
}
