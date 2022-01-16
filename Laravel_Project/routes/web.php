<?php

use App\Http\Controllers\CursoController;
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

Route::get('/', function () {
    return view('home');
});

//ROTA
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/curso/{id}', [CursoController::class, 'show']);

Route::get('/alunos', function () {
    return view('alunos');
});

Route::get('/pautas', function () {
    return view('pautas');
});

Route::get('/avaliacoes', function () {
    return view('avaliacoes');
});


