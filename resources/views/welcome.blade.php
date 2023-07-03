@extends('layouts.main')

@section('title', 'SAN_dev')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurando...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="img/events/{{$event->image}}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">16/06/2023</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participantes">X Participantes</p>
                <a href="#" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
