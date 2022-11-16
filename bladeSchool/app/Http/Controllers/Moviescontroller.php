<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Moviescontroller extends Controller
{
    public function index()
    {
        $movies = array('Black Adom', 'Ticket to paaradise', 'Movie stuff');
        return view('index', compact('movies'));
    }
}
