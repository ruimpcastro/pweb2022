<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\PautaController;
use App\Http\Controllers\PlanoEstudoController;
use App\Http\Controllers\ResultadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/alunos', [AlunoController::class, 'index']);
Route::get('/aluno/{id}', [AlunoController::class, 'show']);
Route::post('/alunos', [AlunoController::class, 'store']);
Route::delete('/aluno/{id}', [AlunoController::class, 'destroy']);

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/curso/{id}', [CursoController::class, 'show']);
Route::delete('/curso/{id}', [CursoController::class, 'destroy']);

Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplina/{id}', [DisciplinaController::class, 'show']);
Route::delete('/disciplina/{id}', [DisciplinaController::class, 'destroy']);

Route::get('/pautas', [PautaController::class, 'index']);
Route::get('/pauta/{id}', [PautaController::class, 'show']);
Route::delete('/pauta/{id}', [PautaController::class, 'destroy']);

Route::get('/curso/{id}/plano_estudo', [PlanoEstudoController::class, 'show']);

Route::get('/resultados', [ResultadoController::class, 'index']);
Route::get('/resultado/{id}', [ResultadoController::class, 'show']);
Route::delete('/resultado/{id}', [ResultadoController::class, 'destroy']);

