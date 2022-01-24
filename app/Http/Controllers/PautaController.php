<?php

namespace App\Http\Controllers;

use App\Domain\AlunoHandler;
use App\Domain\DisciplinaHandler;
use App\Domain\PautaHandler;
use App\Domain\ResultadoHandler;
use App\Http\Resources\PautaCollection;
use App\Http\Resources\PautaResource;
use App\Models\Pauta;
use Illuminate\Http\Request;

class PautaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PautaHandler $ph)
    {
        $p = $ph::getPautas();
        //return response(new PautaCollection($p));

        return view('pautas', ['pautas' => $p]);
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
     * @return PautaResource
     */
    public function show($id)
    {
        $ph = new PautaHandler();
        $d = $ph::getDisciplinaFromPauta($id);
        $p = $ph::getPauta($id);

        $rh = new ResultadoHandler();
        $ah = new AlunoHandler();
        $a = $ah::getAlunos();

        //return new PautaResource($p);

        return view('pauta', ['pauta' => $p, 'disciplina' => $d, 'aluno' => $a]);
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
     */
    public function update(Request $request, $id, PautaHandler $ph, DisciplinaHandler $dh)
    {
        $p = $ph::getPauta($id);
        $d = $dh::getDisciplinaId($p->disciplina_id);
        $resultados = $request->file;

        $request->validate(
            [
                'file' => 'required'
            ]
        );

        $ph::gerarPauta($resultados);
        return redirect("disciplina/$d->codigo/pautas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Pauta::destroy($id);
    }
}
