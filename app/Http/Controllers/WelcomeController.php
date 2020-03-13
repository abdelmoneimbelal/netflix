<?php

namespace App\Http\Controllers;

use App\category;
use App\Movie;

class WelcomeController extends Controller
{
    public function index()
    {
        $latest_movies = Movie::latest()->limit(2)->get();
        $categories = category::with('movies')->get();

        return view('welcome', compact('latest_movies', 'categories'));

    }
}
