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
/* passando o controller para a index */
Route::get('/', [EventController::class, 'index']);
/* controller para criar um evento */
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('produtos');
});

