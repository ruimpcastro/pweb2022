<?php

namespace App\Domain;

use App\Models\AnoLetivo;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;

class Cadeira
{

    public static function createDisciplina(int $codigo, string $designacao, int $semestre, string $plano): Disciplina
    {
        $d = new Disciplina();
        $a = new AnoLetivo();
        $d->codigo = $codigo;
        $d->designacao = $designacao;
        $d->semestre = $semestre;
        $d->plano = $plano;
        $d->ano_letivo()->associate($a);
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

    public static function associarAnoLetivo(int $codigoDisciplina, int $anoLetivo): Disciplina
    {
        $d = Disciplina::where('codigo', $codigoDisciplina)->first();
        $a = AnoLetivo::where('ano', $anoLetivo)->first();
        $d->ano_letivo()->associate($a);
        return $d;
    }
}

