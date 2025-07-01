<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $buscar = request('search');

        if($buscar){
            $eventos = Event::where([
                ['title', 'like', '%'.$buscar.'%']
            ])->get();
        }else {
            $eventos = Event::all();
        }


        return view('home', ['eventos' => $eventos, 'buscar' => $buscar]);
    }

    public function formCreate()
    {
        return view('eventos.criar');
    }

    public function store(Request $request)
    {
        $evento = new Event();
        $evento->title = $request->title;
        $evento->date = $request->date;
        $evento->city = $request->city;
        $evento->private = $request->private;
        $evento->description = $request->description;
        $evento->items = $request->items;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() .
                strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $evento->image = $imageName;
        }

        $user = Auth::user();
        $evento->user_id = $user->id;


        $evento->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso');
    }

    public function show($id){
        $evento = Event::findOrFail($id);
        return view('eventos.evento-detalhe', ['evento' => $evento]);
    }


}
