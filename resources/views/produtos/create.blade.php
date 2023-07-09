@extends('layouts.main')

@section('title', 'Criar Produto')

@section('content')

<h1>Criar Produto</h1>

<div id="event-create-container" class="col-md-6 offset-md-3">
<form action="/produtos" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto">
    </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="floter" class="form-control" id="preco" name="preco" placeholder="Digite o preço do produto">
    </div>
    <input type="submit" class="btn btn-primary" value="Adicionar o Produto">
    </div>
</form>

@endsection
