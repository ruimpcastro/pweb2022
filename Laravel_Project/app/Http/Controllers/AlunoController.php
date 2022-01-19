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
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::createAluno($request->numero_aluno, $request->nome, $request->curso);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ah = new AlunoHandler();
        $a = $ah::getAluno($id);
        $i = $a->curso_id;
        $c = Curso::where('id', $i)->first();
        $ch = new CursoHandler();
        $curso = $ch::getCurso($c);
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Aluno::destroy($id);
    }
}
