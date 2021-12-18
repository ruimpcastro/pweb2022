<?php

namespace App\Domain;

use App\Models\Curso;
use App\Models\Pauta;
use App\Models\PlanoEstudo;
use Illuminate\Database\Eloquent\Collection;

class OfertaLetiva
{

    public static function createCurso(int $codigo, string $designacao): Curso
    {
        $c = new Curso();
        $c->codigo = $codigo;
        $c->designacao = $designacao;
        $c->save();
        $p = new PlanoEstudo();
        $c->plano_estudo()->save($p);
        return  $c;

    }

    public static function getCurso(int $codigo): Curso
    {
        return Curso::where('codigo', $codigo)->first();
    }

    public static function getCursos(): Collection
    {
        return Curso::all();
    }

    //NOT WORKING... YET
    public static function getMedia(int $codigo) :float
    {
        $curso = Curso::where('codigo', $codigo)->first();
        $res = [];
        $p = Pauta::where('curso_id', $curso->id)::all();

        foreach ($curso->pauta) {

        }
    }
}
