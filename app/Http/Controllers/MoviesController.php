<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MoviesController extends Controller
{
    public function index(){
    
    $data = Movies::all();
    $movies = [
        'movies' => $data,
    ];
    return view('home', $movies);

}

}