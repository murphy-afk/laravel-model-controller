<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCOntroller extends Controller
{
    function welcome() {
        return view('welcome');
    }
    function index() {
        return view('index');
    }
}
