<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*para criar uma controller é só o padrão já inserido pelo laravel
obs: podemos passar valores por aqui também, retornando para ele mesmo
*/
/*chamando o controller*/
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProdutosController;
/* passando o controller para a index */
Route::get('/', [EventController::class, 'index']);
/* controller que dá acesso a página de criação */
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
/*Aqui é a rota onde vai criar o evento*/
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::delete('/events/{id}', [EventController::class, 'destroy']);

Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');

Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');





Route::get('/mostraproduto', [ProdutosController::class, 'index']);
Route::get('/produtos/create', [ProdutosController::class, 'create']);
Route::post('/produtos', [ProdutosController::class, 'store']);




Route::get('/contact', function () {
    $nome = "Lucian";
    $idade = "25";
    $profissao = "Professor";

    return view('contact', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao]);
});

//Route::get('/produtos', function () {
//    return view('produtos');
//});



