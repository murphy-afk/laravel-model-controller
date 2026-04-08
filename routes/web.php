<?php

use App\Http\Controllers\PageCOntroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageCOntroller::class, 'welcome'] );

Route::get('/movies', [PageCOntroller::class, 'movies']);