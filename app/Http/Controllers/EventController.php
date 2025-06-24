<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $eventos = Event::all();
        return view('home', ['eventos'=> $eventos]);
    }

    public function criarEvento(){
        return view('eventos.criar');
    }
}
