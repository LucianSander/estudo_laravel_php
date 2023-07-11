@extends('layouts.main')

@section('title', 'Editando ' . $event->title)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem Do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="#" alt="{{$event->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Digite seu novo evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="title">Descrição do Evento:</label>
            <textarea name="description" id="decription" class="form-control" placeholder="Descrição do Evento">{{$event->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Localização do Evento:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Digite a localização" value="{{$event->city}}">
        </div>
        <div class="form-group">
            <label for="title">Items Adicionais:</label>
            <div class="form-group">
                <input type="checkbox" class="form-check-input" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" class="form-check-input" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" class="form-check-input" name="items[]" value="Open-Bar"> Open-Bar
            </div>
            <div class="form-group">
                <input type="checkbox" class="form-check-input" name="items[]" value="Open-Food"> Open-Food
            </div>
            <div class="form-group">
                <input type="checkbox" class="form-check-input" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <div class="form-group">
            <label for="title">Privacidade do Evento:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Público</option>
                <option value="1" {{$event->private == 1 ? "selected='selected'" : "" }}>Private</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" name="date" id="date" value="{{$event->date->format('Y-m-d')}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
    </div>

@endsection
