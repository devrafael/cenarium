<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function criarEvento(){
        return view('evento.criar');
    }
}
