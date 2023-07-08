<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store (Request $request){

        $produtos = new Produto;

        $produtos->nome = $request->nome;
        $produtos->preco = $request->preco;

        $produtos->save();
        return redirect('/')->with('msg', 'Produto criado com sucesso!');
    }

    public function index(){
        $produtos = Produto::all();
        return view('mostraproduto', ['produtos' => $produtos]);
    }
}
