<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\PautaController;
use App\Http\Controllers\PlanoEstudoController;
use App\Http\Controllers\ResultadoController;
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

Route::get('/register', function () {
    return view('register');
});

//CURSO
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::post('/cursos/create', [CursoController::class, 'store']);
Route::get('/curso/{id}/edit', [CursoController::class, 'edit']);
Route::post('/curso/{id}/edit', [CursoController::class, 'update']);

Route::get('/curso/{id}/alunos', [AlunoController::class, 'indexWithCurso']);
Route::get('/curso/{id}', [CursoController::class, 'show']);
Route::post('/curso/{id}', [CursoController::class, 'store']);
Route::delete('/curso/{id}', [CursoController::class, 'destroy']);

//PLANO ESTUDO
Route::get('/planoestudo/{id}/edit', [PlanoEstudoController::class, 'edit']);
Route::post('/planoestudo/{id}/edit', [PlanoEstudoController::class, 'update']);
Route::delete('/planoestudo/{id}/edit', [PlanoEstudoController::class, 'deleteDisciplina']);
Route::get('/planoestudo/{id}', [CursoController::class, 'show']);
Route::get('/planoestudo/{id}', [PlanoEstudoController::class, 'show']);

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

//DISCIPLINA
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/create', [DisciplinaController::class, 'create']);
Route::post('/disciplinas/create', [DisciplinaController::class, 'store']);
Route::get('/disciplina/{id}/edit', [DisciplinaController::class, 'edit']);
Route::post('/disciplina/{id}/edit', [DisciplinaController::class, 'update']);

Route::get('/disciplina/{id}', [DisciplinaController::class, 'show']);
Route::get('/disciplina/{id}/pautas', [DisciplinaController::class, 'showPautas']);
Route::get('/disciplina/{id}/alunos', [DisciplinaController::class, 'showAlunos']);
Route::post('/disciplina/{id}', [DisciplinaController::class, 'store']);
Route::delete('/disciplina/{id}', [DisciplinaController::class, 'destroy']);

//PAUTA------------------------------------------------------------

/*
Route::get('/pautas', function () {
    return view('pautas');
});
*/

//PAUTA
Route::get('/pautas', [PautaController::class, 'index']);
Route::get('/pautas/create', [PautaController::class, 'create']);
Route::post('/pautas/create', [PautaController::class, 'store']);

Route::get('/pauta/{id}', [PautaController::class, 'show']);
Route::post('/pauta/{id}', [PautaController::class, 'store']);
Route::delete('/pauta/{id}', [PautaController::class, 'destroy']);

/*
Route::get('/avaliacoes', function () {
    return view('avaliacoes');
});
*/

//AVALIAÇÃO
Route::get('/avaliacoes', [ResultadoController::class, 'index']);
Route::get('/avaliacoes/create', [ResultadoController::class, 'create']);
Route::post('/avaliacoes/create', [ResultadoController::class, 'store']);

Route::get('/avaliacao/{id}', [ResultadoController::class, 'show']);
Route::post('/avaliacao/{id}', [ResultadoController::class, 'store']);
Route::delete('/avaliacao/{id}', [ResultadoController::class, 'destroy']);


