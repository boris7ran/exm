<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $lastFive = self::lastFiveAdded();
        return view('movies.index', compact('movies', 'lastFive'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        \Log::info($movie);
        $lastFive = self::lastFiveAdded();
        return view('movies.show', compact('movie', 'lastFive'));
    }

    public function create()
    {
        $lastFive = self::lastFiveAdded();
        return view('movies.create', compact('lastFive'));
    }

    public function store()
    {
        $this->validate(request(), Movie::STORE_RULES);
        $movie = Movie::create(request()->all());
        return redirect()->route('all-movies');
    }

    public static function lastFiveAdded()
    {
        $lastFiveAdded = Movie::latest()->take(5)->get();
        return $lastFiveAdded;
    }
}
