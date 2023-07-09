@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu Evento</h1>
    <form action="/events" method="post">
        @csrf
        <div class="form-group">
            <label for="image">Imagem Do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Digite seu novo evento">
        </div>
        <div class="form-group">
            <label for="title">Descrição do Evento:</label>
            <textarea name="description" id="decription" class="form-control" placeholder="Descrição do Evento"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Localização do Evento:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Digite a localização">
        </div>
        <div class="form-group">
            <label for="title">Privacidade do Evento:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Público</option>
                <option value="1">Private</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar o Evento">
    </form>
    </div>

@endsection
