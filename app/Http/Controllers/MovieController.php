<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view( 'pages.movie.index', compact('movies') );
    }
}
