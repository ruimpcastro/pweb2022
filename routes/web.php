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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

//CURSO
Route::get('/cursos', [CursoController::class, 'index'])->middleware(['auth']);
Route::get('/cursos/create', [CursoController::class, 'create'])->middleware(['auth']);
Route::post('/cursos/create', [CursoController::class, 'store'])->middleware(['auth']);
Route::get('/curso/{id}/edit', [CursoController::class, 'edit'])->middleware(['auth']);
Route::post('/curso/{id}/edit', [CursoController::class, 'update'])->middleware(['auth']);

Route::get('/curso/{id}/alunos', [AlunoController::class, 'indexWithCurso'])->middleware(['auth']);
Route::get('/curso/{id}', [CursoController::class, 'show'])->middleware(['auth']);
Route::post('/curso/{id}', [CursoController::class, 'store'])->middleware(['auth']);
Route::delete('/curso/{id}', [CursoController::class, 'destroy'])->middleware(['auth']);

//PLANO ESTUDO
Route::get('/planoestudo/{id}/edit', [PlanoEstudoController::class, 'edit'])->middleware(['auth']);
Route::post('/planoestudo/{id}/edit', [PlanoEstudoController::class, 'update'])->middleware(['auth']);
Route::delete('/planoestudo/{id}/edit', [PlanoEstudoController::class, 'deleteDisciplina'])->middleware(['auth']);
Route::get('/planoestudo/{id}', [CursoController::class, 'show'])->middleware(['auth']);
Route::get('/planoestudo/{id}', [PlanoEstudoController::class, 'show'])->middleware(['auth']);

//ALUNO------------------------------------------------------------

/*
Route::get('/alunos', function () {
    return view('alunos');
});
*/

Route::get('/alunos', [AlunoController::class, 'index'])->middleware(['auth']);
Route::get('/alunos/create', [AlunoController::class, 'create'])->middleware(['auth']);
Route::post('/alunos/create', [AlunoController::class, 'store'])->middleware(['auth']);

Route::get('/aluno/{id}', [AlunoController::class, 'show'])->middleware(['auth']);
Route::post('/aluno/{id}', [AlunoController::class, 'store'])->middleware(['auth']);
Route::delete('/alunos', [AlunoController::class, 'destroy'])->middleware(['auth']);

//DISCIPLINAS------------------------------------------------------------

/*
Route::get('/disciplinas', function () {
    return view('disciplinas');
});
*/

//DISCIPLINA
Route::get('/disciplinas', [DisciplinaController::class, 'index'])->middleware(['auth']);
Route::get('/disciplinas/create', [DisciplinaController::class, 'create'])->middleware(['auth']);
Route::post('/disciplinas/create', [DisciplinaController::class, 'store'])->middleware(['auth']);
Route::get('/disciplina/{id}/edit', [DisciplinaController::class, 'edit'])->middleware(['auth']);
Route::post('/disciplina/{id}/edit', [DisciplinaController::class, 'update'])->middleware(['auth']);

Route::get('/disciplina/{id}', [DisciplinaController::class, 'show'])->middleware(['auth']);
Route::get('/disciplina/{id}/pautas', [DisciplinaController::class, 'showPautas'])->middleware(['auth']);
Route::get('/disciplina/{id}/alunos', [DisciplinaController::class, 'showAlunos'])->middleware(['auth']);
Route::post('/disciplina/{id}', [DisciplinaController::class, 'store'])->middleware(['auth']);
Route::delete('/disciplina/{id}', [DisciplinaController::class, 'destroy'])->middleware(['auth']);

//PAUTA------------------------------------------------------------

/*
Route::get('/pautas', function () {
    return view('pautas');
});
*/

//PAUTA
Route::get('/pautas', [PautaController::class, 'index'])->middleware(['auth']);
Route::get('/pautas/create', [PautaController::class, 'create'])->middleware(['auth']);
Route::post('/pautas/create', [PautaController::class, 'store'])->middleware(['auth']);

Route::get('/pauta/{id}', [PautaController::class, 'show'])->middleware(['auth']);
Route::post('/pauta/{id}', [PautaController::class, 'store'])->middleware(['auth']);
Route::delete('/pauta/{id}', [PautaController::class, 'destroy'])->middleware(['auth']);

/*
Route::get('/avaliacoes', function () {
    return view('avaliacoes');
});
*/

//AVALIAÇÃO
Route::get('/avaliacoes', [ResultadoController::class, 'index'])->middleware(['auth']);
Route::get('/avaliacoes/create', [ResultadoController::class, 'create'])->middleware(['auth']);
Route::post('/avaliacoes/create', [ResultadoController::class, 'store'])->middleware(['auth']);

Route::get('/avaliacao/{id}', [ResultadoController::class, 'show'])->middleware(['auth']);
Route::post('/avaliacao/{id}', [ResultadoController::class, 'store'])->middleware(['auth']);
Route::delete('/avaliacao/{id}', [ResultadoController::class, 'destroy'])->middleware(['auth']);


require __DIR__.'/auth.php';
