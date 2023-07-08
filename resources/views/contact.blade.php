@extends('layouts.main')

@section('title', 'Contatos')

@section('content')

<h1>Página de contato</h1>
<p>Olá, meu nome é {{ $nome }} minha idade é {{$idade}} e minha profissao é {{ $profissao }}</p>
<a href="/">Voltar para a Home</a>

@endsection
