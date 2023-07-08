@extends('layouts.main')

@section('title', 'SAN_dev')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurando...">
    </form>
</div>
 <div id="produtos-container">
    @foreach ($produtos as $produto)
    <ul class="list-group">
        <li class="list-group-item">Nome do Produto: {{$produto->nome}}</li>
        <li class="list-group-item">Preço do Produto: {{$produto->preco}}</li>
    </ul>
    @endforeach
 </div>
</div>

@endsection
