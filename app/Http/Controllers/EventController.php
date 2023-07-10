<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /*Aqui está puxando os dados do banco de dados para a index*/
    public function index(){

        $search = request('search');
        if($search){
            $events = Event::where([
                ['title', 'LIKE', "%{$search}%"]
            ])->get();
        } else {


        $events = Event::all();

        }
        return view('welcome', ['events' => $events, 'search' => $search]);
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
        $event->items = $request->items;
        $event->date = $request->date;

        //Event image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }



    public function show($id){
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
    }
}
