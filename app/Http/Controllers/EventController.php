<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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
        /*Upload de imagem*/
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." .$extension;
            /* criando a pasta*/
            $requestImage->move(public_path('img/events'), $imageName);
            /*Salvar no banco de fato*/
            $event->image = $imageName;
        /*usado para salvar*/
        $event->save();
        /*mensagem de criado com sucesso para o usuário*/
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    }
}
