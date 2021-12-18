<?php

namespace App\Domain;

use App\Models\Curso;
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

    public static function getMedia()
    {

    }
}
