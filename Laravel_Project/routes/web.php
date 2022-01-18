<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\PautaController;
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

Route::get('/alunos', [AlunoController::class, 'index']);
Route::get('/alunos/create', [AlunoController::class, 'create']);
Route::post('/alunos/create', [AlunoController::class, 'store']);

Route::get('/aluno/{id}', [AlunoController::class, 'show']);
Route::post('/aluno/{id}', [AlunoController::class, 'store']);
Route::delete('/aluno/{id}', [AlunoController::class, 'destroy']);

//DISCIPLINAS------------------------------------------------------------

/*
Route::get('/disciplinas', function () {
    return view('disciplinas');
});
*/

Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/create', [DisciplinaController::class, 'create']);
Route::post('/disciplinas/create', [DisciplinaController::class, 'store']);

Route::get('/disciplina/{id}', [DisciplinaController::class, 'show']);
Route::post('/disciplina/{id}', [DisciplinaController::class, 'store']);
Route::delete('/disciplina/{id}', [DisciplinaController::class, 'destroy']);

//PAUTA------------------------------------------------------------

/*
Route::get('/pautas', function () {
    return view('pautas');
});
*/

Route::get('/pautas', [PautaController::class, 'index']);
Route::get('/pautas/create', [PautaController::class, 'create']);
Route::post('/pautas/create', [PautaController::class, 'store']);

Route::get('/pauta/{id}', [PautaController::class, 'show']);
Route::post('/pauta/{id}', [PautaController::class, 'store']);
Route::delete('/pauta/{id}', [PautaController::class, 'destroy']);

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


