<?php

namespace App\Domain;

use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;

class Cadeira
{

    public static function createDisciplina(int $codigo, string $designacao, int $semestre, string $plano): Disciplina
    {
        $d = new Disciplina();
        $d->codigo = $codigo;
        $d->designacao = $designacao;
        $d->semestre = $semestre;
        $d->plano = $plano;
        $d->save();
        return  $d;

    }

    public static function getDisciplina(int $codigo): Disciplina
    {
        return Disciplina::where('codigo', $codigo)->first();
    }

    public static function getDisciplinas(): Collection
    {
        return Disciplina::all();
    }

}

