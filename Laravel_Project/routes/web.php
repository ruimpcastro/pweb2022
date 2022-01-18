<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});

//CURSO
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::post('/cursos/create', [CursoController::class, 'store']);

Route::get('/curso/{id}', [CursoController::class, 'show']);
Route::post('/curso/{id}', [CursoController::class, 'store']);
Route::delete('/curso/{id}', [CursoController::class, 'destroy']);

//ALUNO------------------------------------------------------------

/*
Route::get('/alunos', function () {
    return view('alunos');
});
*/

Route::get('/alunos', [CursoController::class, 'index']);
Route::get('/alunos/create', [CursoController::class, 'create']);
Route::post('/alunos/create', [CursoController::class, 'store']);

Route::get('/aluno/{id}', [CursoController::class, 'show']);
Route::post('/aluno/{id}', [CursoController::class, 'store']);
Route::delete('/aluno/{id}', [CursoController::class, 'destroy']);

//PAUTA------------------------------------------------------------

/*
Route::get('/pautas', function () {
    return view('pautas');
});
*/

Route::get('/pautas', [CursoController::class, 'index']);
Route::get('/pautas/create', [CursoController::class, 'create']);
Route::post('/pautas/create', [CursoController::class, 'store']);

Route::get('/pauta/{id}', [CursoController::class, 'show']);
Route::post('/pauta/{id}', [CursoController::class, 'store']);
Route::delete('/pauta/{id}', [CursoController::class, 'destroy']);

//AVALIAÇÂO------------------------------------------------------------

/*
Route::get('/avaliacoes', function () {
    return view('avaliacoes');
});
*/

Route::get('/avaliacoes', [CursoController::class, 'index']);
Route::get('/avaliacoes/create', [CursoController::class, 'create']);
Route::post('/avaliacoes/create', [CursoController::class, 'store']);

Route::get('/avaliacao/{id}', [CursoController::class, 'show']);
Route::post('/avaliacao/{id}', [CursoController::class, 'store']);
Route::delete('/avaliacao/{id}', [CursoController::class, 'destroy']);


