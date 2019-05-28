<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    const STORE_RULES = ['title' => 'required', 'genre' => 'required', 'year' => 'required', 'storyline' => 'max:1000'];

    protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];
}
