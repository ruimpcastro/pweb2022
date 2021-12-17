<?php

namespace App\Domain;

use App\Models\Curso;
use App\Models\PlanoEstudo;
use Illuminate\Database\Eloquent\Collection;

class OfertaLetiva
{

    public function createCurso(int $codigo, string $designacao): Curso
    {
        $c = new Curso();
        $c->codigo = $codigo;
        $c->designacao = $designacao;
        $c->save();
        $p = new PlanoEstudo();
        $c->plano_estudo()->save($p);
        return  $c;

    }

    public function getCurso(int $codigo): Curso
    {
        return Curso::where('codigo', $codigo)->first();
    }

    public function getCursos(): Collection
    {
        return Curso::all();
    }

}
