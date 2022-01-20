<?php

namespace App\Http\Controllers;

use App\Domain\AlunoHandler;
use App\Domain\CursoHandler;
use App\Http\Resources\AlunoCollection;
use App\Http\Resources\AlunoResource;
use App\Http\Resources\CursoResource;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(AlunoHandler $ah)
    {
        $a = $ah::getAlunos();
        //return response(new AlunoCollection($a));

        return view('alunos', ['alunos' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('criarAluno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request, AlunoHandler $ah)
    {
        //Aluno::createAluno($request->numero_aluno, $request->nome, $request->curso);

        $numero_aluno = $request->num;
        $nome = $request->nom;
        $designacaoCurso = $request->des;

        $request->validate(
            [
                'num' => 'required',
                'nom' => 'required',
                'designacaoCurso' => 'required',
            ]
        );

        $ah::createAluno($numero_aluno, $nome, $designacaoCurso);

        return redirect('alunos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $ah = new AlunoHandler();
        $a = $ah::getAluno($id);
        $c = $ah::getCursoFromAluno($id);
        $ch = new CursoHandler();
        $curso = $ch::getCurso($c->codigo);
        //return new AlunoResource($a);
        return view('aluno', ['aluno' => $a, 'curso' => $curso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        return Aluno::destroy($id);
    }
}
