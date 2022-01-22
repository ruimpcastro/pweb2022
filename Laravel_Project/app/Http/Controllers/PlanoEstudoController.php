<?php

namespace App\Http\Controllers;

use App\Domain\CursoHandler;
use App\Domain\DisciplinaHandler;
use App\Domain\PlanoEstudoHandler;
use App\Http\Resources\PlanoEstudoCollection;
use App\Http\Resources\PlanoEstudoResource;
use App\Models\Curso;
use App\Models\PlanoEstudo;
use Illuminate\Http\Request;

class PlanoEstudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PlanoEstudoHandler $pe)
    {
        $p = $pe::getDisciplinasFromCurso();
        //return response(new CursoCollection($c));


        //return view('planoestudo', ['plano' => $p]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $peh = new PlanoEstudoHandler();
        $p = $peh::getDisciplinasFromCurso($id);
        $ch = new CursoHandler();
        $curso = Curso::where('id', $id)->first();
        $c = $ch::getCurso($curso->codigo);
        return view('planoestudo', ['plano' => $p, 'curso' => $c]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showEdit($id)
    {
        $peh = new PlanoEstudoHandler();
        $p = $peh::getDisciplinasFromCurso($id);
        $ch = new CursoHandler();
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplinas();
        $curso = Curso::where('id', $id)->first();
        $c = $ch::getCurso($curso->codigo);
        return view('editarPlanoestudo', ['disciplinas' => $d, 'plano' => $p, 'curso' => $c]);
    }

    public function addDisciplina($id)
    {
        $peh = new PlanoEstudoHandler();
        $p = $peh::getDisciplinasFromCurso($id);
        $ch = new CursoHandler();
        $curso = Curso::where('id', $id)->first();
        $c = $ch::getCurso($curso->codigo);
        $peh::associarPlanoEstudoDisciplina($id, $c->codigo);
        return view('editarPlanoestudo', ['plano' => $p, 'curso' => $c]);
    }

    public function deleteDisciplina($id)
    {
        $peh = new PlanoEstudoHandler();
        $p = $peh::getPlanoEstudo($id);
        $ch = new CursoHandler();
        $curso = Curso::where('id', $id)->first();
        $c = $ch::getCurso($curso->codigo);
        $peh::deleteAssociacaoPlanoEstudoDisciplina($id, $c->codigo);
        return view('editarPlanoestudo', ['plano' => $p, 'curso' => $c, 'delAss' => $del]);
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
        return PlanoEstudo::destroy($id);
    }

}
