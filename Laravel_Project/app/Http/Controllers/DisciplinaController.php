<?php

namespace App\Http\Controllers;

use App\Domain\DisciplinaHandler;
use App\Domain\PautaHandler;
use App\Http\Resources\DisciplinaCollection;
use App\Http\Resources\DisciplinaResource;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(DisciplinaHandler $dh)
    {
        $d = $dh::getDisciplinas();
        //return response(new DisciplinaCollection($d));

        return view('disciplinas', ['disciplinas' => $d]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criarDisciplina');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, DisciplinaHandler $dh)
    {
        $codDisciplina = $request->cod;
        $designacaoDesciplina = $request->des;
        $semestre = $request->sem;
        $ano = $request->an;
        $plano = $request ->pln;

        $request->validate(
            [
                'cod' => 'required',
                'des' => 'required',
                'sem' => 'required',
                'an' => 'required',
                'pln' => 'required',
            ]
        );

        $dh::createDisciplina($codDisciplina, $designacaoDesciplina, $semestre, $ano, $plano);

        return redirect('disciplinas/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplina($id);
        //return new DisciplinaResourxwce($d);
        return view('disciplina', ['disciplina' => $d]);
    }

    public function showPautas($id)
    {
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplina($id);
        return view('disciplinaPauta', ['disciplina' => $d]);
    }

    public function showAlunos($id)
    {
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplina($id);
        return view('disciplinaAluno', ['disciplina' => $d]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplina($id);

        return view('editarDisciplina', ['disciplina' => $d]);
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
        $d = $dh::getDisciplina($id);
        $designacaoDisciplina = $request->des;

        $request->validate(
            [
                'des' => 'required',
            ]
        );

        $dh::editDisciplina($d->codigo, $designacaoDisciplina);

        return redirect("disciplina/$d->codigo/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Disciplina::destroy($id);
        return redirect('/disciplinas');
    }
}
