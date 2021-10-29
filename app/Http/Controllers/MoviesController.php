<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MoviesController extends Controller
{
    public function index(){
    
    $movies = Movies::all();
    dd($movies);
    return view('welcome');

}

}