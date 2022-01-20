<?php

namespace App\Domain;

use App\Models\AnoLetivo;
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
        return $c;

    }

    public static function getCurso(int $codigo)
    {
        return Curso::where('codigo', $codigo)->first();
    }

    public static function getCursos(): Collection
    {
        return Curso::all();
    }

    //NÃO FINALIZADO NA ENTREGA
    public static function getMedia(int $codigo): float
    {
        $curso = Curso::where('codigo', $codigo)->first();
        $res = 0;
        $count = 0;

        foreach ($curso->pauta as $pauta) {
            $res += $pauta->media;
            $count += 1;
        }

        return $res / $count;
    }
}
