<?php

use App\Http\Controllers\CursoController;
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

Route::get('/alunos', [CursoController::class, 'index']);
Route::get('/aluno/{id}', [CursoController::class, 'show']);
Route::delete('/aluno/{id}', [CursoController::class, 'destroy']);

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/curso/{id}', [CursoController::class, 'show']);
Route::delete('/curso/{id}', [CursoController::class, 'destroy']);

Route::get('/disciplinas', [CursoController::class, 'index']);
Route::get('/disciplina/{id}', [CursoController::class, 'show']);
Route::delete('/disciplina/{id}', [CursoController::class, 'destroy']);

Route::get('/pautas', [CursoController::class, 'index']);
Route::get('/pauta/{id}', [CursoController::class, 'show']);
Route::delete('/pauta/{id}', [CursoController::class, 'destroy']);

Route::get('/planos', [CursoController::class, 'index']);
Route::get('/plano/{id}', [CursoController::class, 'show']);
Route::delete('/plano/{id}', [CursoController::class, 'destroy']);

Route::get('/resultados', [CursoController::class, 'index']);
Route::get('/resultado/{id}', [CursoController::class, 'show']);
Route::delete('/resultado/{id}', [CursoController::class, 'destroy']);

