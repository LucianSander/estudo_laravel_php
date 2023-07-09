<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /*Aqui está puxando os dados do banco de dados para a index*/
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }
    /*controller que puxa a página de criação onde aparece o questionário*/
    public function create(){
            return view('events.create');
        }
        /*controller da store para salvar a criação*/
    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;
        //$event->image = $request->image;


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;

        }

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
    }
}
