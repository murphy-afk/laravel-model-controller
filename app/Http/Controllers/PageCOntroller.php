<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageCOntroller extends Controller
{
    function welcome() {
        return view('welcome');
    }
    function movies() {
        $movies = Movie::all();
        dd($movies);

        return view('index');
    }
}
