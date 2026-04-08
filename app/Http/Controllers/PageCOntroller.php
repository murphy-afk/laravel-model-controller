<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageCOntroller extends Controller
{
    function welcome() {
        return view('welcome');
    }
    function index() {
        $movies = Movie::all();

        return view('index', compact('movies'));
    }
}
